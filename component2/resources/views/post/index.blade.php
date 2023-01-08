<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="flex flex-row">
                <div class="grid grow justify-end">
                    <a href="{{route('posts.create') }}" class="bg-blue-700 p-2 text-white">Create +</a>
                </div>

            </div>

            <div class="grid grid-cols-1 gap-4 md:grid-cols-3 lg:grid-cols-5 ">

                @foreach ($posts as $post)


                    {{-- show content for specific user only --}}
                    {{-- @can('view', $post) --}}
                        <div class="bg-gray-200 bg-opacity-75 overflow-hidden shadow-xl sm:rounded-lg p-5 m-2 pb-2 ">

                            <p class="text-xl mb-3 font-semibold"> {{ $post->title }} </p>
                            {{-- {{ $post->content }}  --}}
                            {{-- limiting the no. of chars to 10 --}}
                            <p class="text-sm mb-2"> {{ Str::limit($post->content, 39) }} </p>
                            {{-- showing the no. of chars in () --}}
                            ({{ Str::length($post->content) }})
                            <a href="{{ route('posts.show', $post->id) }}" class="text-blue-600 inline-flex items-center mb-2 "> Learn More
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                  </svg>
                            </a>
                            <hr class="border-b-2 border-slate-300 mb-1">
                            <div class="inline-flex items-center">
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


    </div>







</x-app-layout>
