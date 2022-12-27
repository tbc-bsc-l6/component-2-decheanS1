<x-layout>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Crud </h2>
            </div>

        </div>
    </div>


    <div class="d-flex">
        <div class="p-2 w-100"> Total {{count($posts) }} posts  </div>
        <div class="p-2 flex-shrink-1">
            <a href="{{ route('posts.create') }}" class="btn btn-primary">
                Create+
            </a>

        </div>
      </div>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Content</th>


        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }} </td>
            <td>{{ $post->title }} </td>
            <td>{{ $post->content }}</td>
            <td>
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-success"> Show </a>
            </td>

            <td>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary"> Edit </a>
            </td>

            <td>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>

        </tr>
        @endforeach
    </table>


</x-layout>
