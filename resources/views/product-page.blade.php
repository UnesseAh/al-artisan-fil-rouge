@include('includes.dashboard.head')

@if(session('message'))
    <div>{{ session('message') }}</div>
@endif

<div class="row">
    <div class="col-md-8 mb-4">
        <img src="{{ asset('image/'.$handicraft->image) }}" style="width: 30%">
    </div>
    <div class="col-md-8 mb-4">
        <h1>Title : {{ $handicraft->title }}</h1>
        <p> Description : {{ $handicraft->description }}</p>
        <p>Price : {{ $handicraft->price  }}</p>
        <p>Old Price : {{ $handicraft->old_price  }}</p>
        <form method="POST" action="{{ route('cart.add')}}">
            @csrf
            <!-- add a hidden input field for the product ID -->
            <input type="hidden" name="product_id" value="{{$handicraft->id}}">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" value="1" min="1" max="{{$handicraft->stock}}">
            <hr>
            <button type="submit" class="btn btn-primary">
                Add To Cart
            </button>
        </form>
    </div>


</div>


<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
