<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Posts') }}
        </h2>
    </x-slot>
    {{-- for the errors --}}
    @if ($errors->any())
        <div class="max-w-md mx-auto bg-red-50 text-red-700 border border-red-400 rounded text-sm p-4 mt-5">
            <strong class="text-xl align-center cursor-pointer alert-del flex justify-end ">&times;</strong>
            <p class="font-bold">Oops!</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
        </div>

    @endif

    {{-- the content  --}}

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 overflow-hidden">
            <div class="bg-white shadow-xl sm:rounded-lg p-5 mx-auto max-w-md ">
                <form action="{{ route('posts.store') }}" method="POST"  class="p-2  flex flex-col">
                    @csrf
                    <input type="text" name="title" placeholder="Title"><br>
                    <textarea name="content"  rows="7" placeholder="Content"> </textarea><br>
                    <input type="submit" value="Submit" class="bg-blue-500 p-2 text-white">

                </form>
            </div>
        </div>
    </div>

<script>
     // Script For Close alert
    var alert_del = document.querySelectorAll('.alert-del');
    alert_del.forEach((x) =>
        x.addEventListener('click', function () {
        x.parentElement.classList.add('hidden');
        })
    );
</script>


    {{-- </x-slot> --}}

</x-app-layout>
