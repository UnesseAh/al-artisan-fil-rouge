@include('includes.dashboard.head')


<div class="row">
    <div class="col-md-8 mb-4">
        <img src="{{ asset('image/'.$product->image) }}" style="width: 30%">
    </div>
    <div class="col-md-8 mb-4">
        <h1>Title : {{ $product->title }}</h1>
        <p> Description : {{ $product->description }}</p>
        <p>Price : {{ $product->price  }}</p>
        <p>Old Price : {{ $product->old_price  }}</p>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" max="1000">
        <hr>
        <a type="button" class="btn btn-primary" data-mdb-toggle="button" autocomplete="off">
            Add To Cart
        </a>
    </div>


</div>


<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
