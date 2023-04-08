@include('includes.dashboard.head')

<h1>Edit product</h1>

<form action="{{ route('update.product', ['id' => $product->id]) }}" method="Post">
    @csrf
    @method('PUT')
    <div class="form-floating">
        <input name="title" value="{{ $product->title }}" type="text" id="title" class="form-control" placeholder="title">
        <label for="title" class="form-label">Title</label>
    </div>
    <div class="form-floating">
        <input name="description" value="{{ $product->description }}" type="text" id="description" class="form-control" placeholder="description">
        <label for="description" class="form-label">Description</label>
    </div>
    <div>
        <label for="subcategory">Subcategory</label>
        <select name="subcategory_id" id="subcategory"  class="form-select">
            <option selected>Choose a subcategory</option>
            @foreach($subcategories as $subcategory)
            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-floating">
        <input name="price" value="{{ $product->price }}" type="number" id="price" class="form-control" placeholder="price">
        <label for="price" class="form-label">Price</label>
    </div>
    <div class="form-floating">
        <input name="old_price" value="{{ $product->old_price }}" type="number" id="old-price" class="form-control" placeholder="old price">
        <label for="old-price" class="form-label">Old Price</label>
    </div>
    <button type="submit" class="btn btn-primary">Update Product</button>
</form>

