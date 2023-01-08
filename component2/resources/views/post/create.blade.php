<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form action="{{ route('posts.store') }}" method="POST"  class="p-2">
                    @csrf
                    <input type="text" name="title" placeholder="Title"><br><br>
                    <textarea name="content" cols="30" rows="7" placeholder="Content"> </textarea><br>
                    <input type="submit" value="Submit" class="bg-blue-500 p-2">
                </form>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- </x-slot> --}}

</x-app-layout>
