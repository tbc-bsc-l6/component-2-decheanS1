<x-layout>

    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-500 leading-tight">
            {{ __('Create Products') }}
        </h2>
    </x-slot> --}}

    {{-- <x-slot name="content"> --}}

    <div class="container  mx-auto py-12">
            <div class="row">
                <div class="col-sm-6">
                    <div class="bg-white shadow-xl sm:rounded-lg p-2 m-2">
                        <form action="{{ route('posts.store') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <input type="text" class="form-control" name="title" placeholder="Title" aria-label="First name">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <input type="submit" value="Submit" class="btn btn-primary p-2">

                        </form>




                    </div>

                </div>
              </div>

    </div>

    {{-- </x-slot> --}}

</x-layout>
