@include('includes.dashboard.head')

<h1>Edit product</h1>

<form>
    <div class="form-floating">
        <input value="{{ $product->title }}" type="text" id="title" class="form-control" placeholder="title">
        <label for="title" class="form-label">Title</label>
    </div>
    <div class="form-floating">
        <input value="{{ $product->description }}" type="text" id="description" class="form-control" placeholder="description">
        <label for="description" class="form-label">Description</label>
    </div>
    <div>
        <label for="category">Subcategory</label>
        <select class="form-select">
            <option selected>subcategory</option>
            @foreach($subcategories as $subcategory)
            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-floating">
        <input value="{{ $product->price }}" type="number" id="price" class="form-control" placeholder="price">
        <label for="price" class="form-label">Price</label>
    </div>
    <div class="form-floating">
        <input value="{{ $product->old_price }}" type="number" id="old-price" class="form-control" placeholder="old price">
        <label for="old-price" class="form-label">Old Price</label>
    </div>
    <button type="submit" class="btn btn-primary">Update Product</button>
</form>

