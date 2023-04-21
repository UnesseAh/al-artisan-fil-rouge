@include('includes.dashboard.head')
@include('includes.landing-page.navbar')
@if(session('message'))
    <div>{{ session('message') }}</div>
@endif

<div class="container">
    <div class="d-flex">
        <div class="col-md-6 mb-4 p-4">
            <img src="{{ asset('image/'.$handicraft->image) }}" class="img-fluid" alt="product-name">
        </div>
        <div class="col-md-6 mb-4 p-4">
            <h1> {{ $handicraft->title }}</h1>
            <p>Description: {{ $handicraft->description }}</p>
            <p>Price: {{ $handicraft->price }}</p>
            <form method="POST" action="{{ route('cart.add')}}" class="mt-4">
                @csrf
                <!-- add a hidden input field for the product ID -->
                <input type="hidden" name="handicraft_id" value="{{$handicraft->id}}">
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" value="1" min="1" max="{{$handicraft->stock}}"
                           class="form-control">
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">
                    Add To Cart
                </button>
            </form>
        </div>
    </div>
</div>

@include('includes.landing-page.footer')

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
