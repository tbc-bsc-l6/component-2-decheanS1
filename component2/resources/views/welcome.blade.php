
<x-guest-layout>

    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

        <div class="py-12 mt-7">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-200 bg-opacity-75 overflow-hidden shadow-xl sm:rounded-lg">

                        <div class="mx-auto max-w-xl text-center p-7">
                            <h1 class="text-3xl font-extrabold sm:text-5xl">
                              Welcome to ThePost blog site
                            </h1>

                            <p class="mt-4 sm:text-xl sm:leading-relaxed">
                              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo
                              tenetur fuga ducimus numquam ea!
                            </p>

                            <div class="mt-8 flex flex-wrap justify-center gap-4">
                              <a
                                class="block w-full rounded bg-blue-500 px-12 py-3 text-sm font-medium text-white shadow hover:bg-gray-700 focus:outline-none focus:ring active:bg-red-500 sm:w-auto"
                                href="/register"
                              >
                                Get Started
                              </a>

                                <div class=" w-full rounded px-12 py-3 ">
                                    <p>Subscribe to our newsletter</p>
                                    <form action="#" method="post" class="flex flex-col lg:flex-row justify-center">
                                        @csrf
                                        <input type="text" id="email" name="email" class="bg-transparent text-sm rounded-lg mr-2">
                                        <button type="submit" class="bg-blue-500 text-white p-2 rounded-lg">Subscribe</button>
                                    </form>
                                </div>


                            </div>
                        </div>

                </div>
            </div>
        </div>








</x-guest-layout>
