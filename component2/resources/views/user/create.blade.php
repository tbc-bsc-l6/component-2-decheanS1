<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Users') }}
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
                <form action="{{ route('users.store') }}" method="POST"  class="p-2 flex flex-col">
                    @csrf
                    <input type="text" name="name" placeholder="Name" ><br><br>
                    <input type="text" name="email" placeholder="Email"> <br><br>
                    <input type="password" name="password" placeholder="Password" > <br><br>
                    <input type="submit" value="Submit" class="bg-blue-500 p-2 text-white">
                </form>
            </div>
        </div>
    </div>



    <!-- component -->


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
