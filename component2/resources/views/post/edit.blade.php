<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 overflow-hidden">
            <div class="bg-white shadow-xl sm:rounded-lg p-5 mx-auto max-w-md ">
                <form action="{{ route('posts.update', $post->id) }}" method="post" class="flex flex-col p-2">
                    @csrf
                   @method('PUT')
                        <input type="text" class="form-control" name="title" value=" {{ $post->title }}"> <br>

                        <textarea class="form-control" name="content" rows="7" > {{ $post->content }} </textarea> <br>

                    <input type="submit" value="Submit" class="bg-blue-500 p-2 text-white">
               </form>
            </div>
        </div>
    </div>



</x-app-layout>
