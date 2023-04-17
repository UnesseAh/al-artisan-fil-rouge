
@include('includes.dashboard.head')
<h1>Edit Category</h1>
<div>
    <form method="POST" action="{{ route('update.category', ['category' => $category]) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="category">Category :</label>
            <input value="{{$category->name}}" name="name" type="text" id="category">
            @if($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <button class="btn btn-info" type="submit">Update Category</button>
    </form>
</div>

