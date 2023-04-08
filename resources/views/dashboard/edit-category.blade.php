
@include('includes.dashboard.head')
<h1>Edit Category</h1>
<div>
    <form method="POST" action="{{ route('update.category', ['id' => $category->id]) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="category">Category :</label>
            <input value="{{$category->name}}" name="name" type="text" id="category">
        </div>
        <button class="btn btn-info" type="submit">Update Category</button>
    </form>
</div>

