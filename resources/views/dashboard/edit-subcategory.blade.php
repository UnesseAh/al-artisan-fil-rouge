@include('includes.dashboard.head')
<h1>Edit sub category</h1>

<div>
    <form method="POST" action="{{ route('update.subcategory', ['id' => $subcategory->id]) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Subcategory :</label>
            <input value="{{ $subcategory->name }}" name="name" type="text">
        </div>
        <button class="btn btn-info" type="submit">Update Subcategory</button>
    </form>
</div>

