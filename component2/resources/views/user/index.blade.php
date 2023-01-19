<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 ">

            {{-- for create button  --}}
            <div class="flex flex-row mb-3">
                <div class="grid grow justify-end">
                    <a href="{{route('users.create') }}" class="bg-blue-700 p-2 text-white">Create +</a>
                </div>
            </div>

            <div class="w-full  mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                <header class="px-5 py-4 border-b border-gray-100">
                    <h2 class="font-semibold text-gray-800">Users</h2>
                </header>
                <div class="p-3">
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                <tr>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Name</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Email</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">User Role</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-center">Actions</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-sm divide-y divide-gray-100">

                            @foreach ($users as $user)
                                <tr class="mb-3">

                                    <td class="p-2 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="/myimage/img.png" width="40" height="40" alt="Alex Shatov"></div>
                                            <div class="font-medium text-gray-800">{{$user->name}}</div>
                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left">{{$user->email}}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left font-medium text-green-500">
                                            @if ($user->is_admin )
                                                 {{"Admin" }}
                                            @else
                                            {{ "User" }}
                                            @endif


                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="flex justify-end mb-4">
                                            <a href="{{ route('users.edit', $user->id) }}" class="mx-1">
                                                <img src="/myimage/e1.png" alt="" srcset="" width="30" height="15">
                                            </a>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button class="mx-1">
                                                    <img src="/myimage/delete.png" alt="" srcset="" width="30" height="15">
                                                </button>

                                            </form>
                                        </div>

                                    </td>
                                </tr>


                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>




        </div>





    </div>




</x-app-layout>
