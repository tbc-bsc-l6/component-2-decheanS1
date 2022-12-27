<x-layout>


    <div class="container  mx-auto py-12">
            <div class="row">
                <div class="col-sm-6">
                    <div class="bg-white shadow-xl sm:rounded-lg p-2 m-2">
                        <form action="{{ route('posts.update', $post->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <input type="text" class="form-control" name="title" value=" {{ $post->title }}">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="content" rows="3" > {{ $post->content }} </textarea>
                            </div>
                            <input type="submit" value="Submit" class="btn btn-primary p-2">

                        </form>




                    </div>

                </div>
              </div>

    </div>



</x-layout>
