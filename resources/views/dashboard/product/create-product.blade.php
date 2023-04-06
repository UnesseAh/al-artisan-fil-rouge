@include('includes.dashboard.head')

<h1>Create a new product</h1>

<form>
    <div class="form-floating">
        <input type="text" id="title" class="form-control" placeholder="title">
        <label for="title" class="form-label">Title</label>
    </div>
    <div class="form-floating">
        <input type="text" id="description" class="form-control" placeholder="description">
        <label for="description" class="form-label">Description</label>
    </div>
    <div>
        <label for="category">Category</label>
        <select class="form-select">
            <option>Mantati</option>
            <option>Tapiyti</option>
            <option>Twintiti</option>
        </select>
    </div>
    <div class="form-floating">
        <input type="number" id="price" class="form-control" placeholder="price">
        <label for="price" class="form-label">Price</label>
    </div>
</form>

