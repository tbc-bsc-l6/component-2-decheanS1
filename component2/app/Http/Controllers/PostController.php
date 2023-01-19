<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = cache()->remember('posts-page-'.request('page', default:1), 35, function () {
        //     var_dump('hello');
        //     // return Post::latest()->paginate(16);
        //     return Post::search(request('search'))->paginate(16);
        // });

        $posts = Post::search(request('search'))->paginate(16);


        // $posts = Post::paginate(16);

        return view('post.index')
                ->with('posts', $posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5',
            'content' => 'required'
        ]);

        // Post::create([
        //     'title' => $request->title,
        //     'content' => $request->content
        // ]);

        $attributes = $request->all();
        $attributes['user_id'] = auth()->user()->id;
        Post::create($attributes);

        return redirect(route('posts.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('update', $post);
        return view('post.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->authorize('update', $post);

        $request->validate([
            'title' => 'required|min:5',
            'content' => 'required'
        ]);
        $post->update($request->all());
        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();
        return redirect(route('posts.index'));
    }



    // public function dash()
    // {
    //     $posts = auth()->user()->posts;
    //     return view('dashboard')
    //             ->with('posts', $posts);
    // }



}
