
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
                    <a href="{{ route('edit.category', ['id'=>$category->id]) }}">Edit</a>
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


<h1>Subcategory</h1>
<div>
    <form method="Post" action="{{ route('store.subcategory') }}">
        @csrf
        <div>
            <label>Category :</label>
            <input name="category_id" type="number">
        </div>
        <div>
            <label>Subategory :</label>
            <input name="name" type="text">
        </div>
        <button class="btn btn-info" type="submit">Add Subcategory</button>
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
        @foreach($subcategories as $subcategory)
            <tr>
                <td>{{ $subcategory->id }}</td>
                <td>{{ $subcategory->name }}</td>
                <td>
                    <a href="{{ route('edit.subcategory', ['id'=>$subcategory->id]) }}">Edit</a>
                    <form method="post" action="{{ route('delete.subcategory', ['id'=>$subcategory->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
