<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-200 bg-opacity-75 overflow-hidden shadow-xl sm:rounded-lg">

                    <div class="mx-auto max-w-xl text-center p-7">
                        <h1 class="text-3xl font-extrabold sm:text-5xl">
                          Hey, You're logged in!

                        </h1>

                        <p class="mt-4 sm:text-xl sm:leading-relaxed">
                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo
                          tenetur fuga ducimus numquam ea!
                        </p>

                        <div class="mt-8 flex flex-wrap justify-center gap-4">
                          <a
                            class="block w-full rounded bg-blue-500 px-12 py-3 text-sm font-medium text-white shadow hover:bg-gray-700 focus:outline-none focus:ring active:bg-red-500 sm:w-auto"
                            href="#"
                          >
                            Get Started
                          </a>

                          <a
                            class="block w-full rounded px-12 py-3 text-sm font-medium text-red-600 shadow hover:text-red-700 focus:outline-none focus:ring active:text-red-500 sm:w-auto"
                            href="#"
                          >
                            Learn More
                          </a>

                            {{-- <div class="w-full rounded px-12 py-3">

                                <form action="#" method="post">
                                    @csrf
                                    <input type="text" id="email" name="email" class="bg-transparent">
                                    <button type="submit" class="bg-blue-500 text-white">Submit</button>
                                </form>
                            </div> --}}


                        </div>
                    </div>

            </div>
        </div>
    </div>





</x-app-layout>
