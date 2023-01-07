<x-guest-layout>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Crud </h2>
            </div>

        </div>
    </div>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">
        <div class="flex flex-row">
            <div class="grid grow justify-end">
                <a href="{{route('posts.create') }}" class="bg-blue-700 p-2 text-white">Create +</a>
            </div>

        </div>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 lg:grid-cols-5 ">

            @foreach ($posts as $post)


                {{-- show content for specific user only --}}
                {{-- @can('view', $post) --}}
                    <div class="overflow-hidden shadow-xl sm:rounded-lg p-5 m-2 pb-2 bg-gray-100 bg-opacity-75">

                        <p class="text-xl"> {{ $post->title }} </p>
                        {{-- {{ $post->content }}  --}}
                        {{-- limiting the no. of chars to 10 --}}
                        <p class="text-sm"> {{ Str::limit($post->content, 10) }} </p>
                        {{-- showing the no. of chars in () --}}
                        ({{ Str::length($post->content) }})
                        <hr>

                        <div class="inline-flex items-center mt-3">
                            <img alt="blog" src="/myimage/img.png" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                            <span class="flex-grow flex flex-col pl-3">
                              <span class="title-font font-bold text-gray-900"> {{$post->user->name}}  </span>
                            </span>
                        </div>

                    </div>

            @endforeach
        </div>

    </div>
    <div class="m-5">
        {{ $posts->links() }}
    </div>











</x-guest-layout>
