@include('includes.dashboard.head')

<h1>Create a new product</h1>

<form method="POST" action="{{route('store.product')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-floating">
        <input name="title" type="text" id="title" class="form-control" placeholder="title">
        <label for="title" class="form-label">Title</label>
    </div>
    <div class="form-floating">
        <input name="description" type="text" id="description" class="form-control" placeholder="description">
        <label for="description" class="form-label">Description</label>
    </div>
    <div>
        <label for="subcategory">Category</label>
        <select name="subcategory_id" class="form-select">
            <option>--Choose subcategory</option>
            @foreach($subcategories as $subcategory)
                <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-floating">
        <input name="price" type="number" id="price" class="form-control" placeholder="price">
        <label for="price" class="form-label">Price</label>
    </div>
    <div class="form-floating">
        <input name="old_price" type="number" id="price" class="form-control" placeholder="price">
        <label for="price" class="form-label">Price</label>
    </div>
    <div class="form-floating">
        <input name="stock" type="number" id="stock" class="form-control" placeholder="stock">
        <label for="stock" class="form-label">Stock</label>
    </div>
    <div class="form-floating">
        <input type="file" name="image" class="form-control" placeholder="image">
        <label for="image" class="form-label">Image</label>
    </div>
    <button type="submit" class="btn btn-primary">Add Product</button>

</form>

