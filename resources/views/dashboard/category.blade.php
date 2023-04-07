
@include('includes.dashboard.head')
<h1>Category</h1>
<div>
    <form method="Post" action="{{ route('store.category') }}">
        @csrf
        <div>
            <label>Category :</label>
            <input name="name" type="text">
        </div>
        <button class="btn btn-info" type="submit">Add Category</button>
    </form>
</div>

<div>
    <table class="table">
        <thead>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <button>edit</button>
                    <form method="post" action="{{ route('delete.category', ['id'=>$category->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
