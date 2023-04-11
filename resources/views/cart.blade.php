@include('includes.dashboard.head')


@if(session('message'))
    <div>{{ $message }}</div>
@endif
<div class="row">
    <div class="col-md-8 mb-4">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h5 class="mb-0">My Cart</h5>
            </div>
            <div class="card-body">
                @if(count($cartItems) > 0)
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                    <tr>
                        <th>Proudct</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cartItems as $cartItem)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('image/'. $cartItem->product->image)}}" alt="" style="width: 45px; height: 45px"/>
                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">{{ $cartItem->product->title }}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">{{ $cartItem->product->price }}</p>
                            </td>
                            <td>
                                <span class="badge badge-success rounded-pill d-inline">{{ $cartItem->quantity }}</span>
                            </td>
                            <td>{{ $cartItem->product->price * $cartItem->quantity}} </td>
                            <td>
                                <form method="POST" action="{{ route('cart.delete',['cartItem' => $cartItem->id])  }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link btn-sm px-3" data-ripple-color="dark">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                <p>Your cart is empty</p>
                @endif
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h5 class="mb-0">Summary</h5>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                        Products
                        <span>$53.98</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        Shipping
                        <span>Gratis</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                        <div>
                            <strong>Subtotal</strong>
                        </div>
                        <span><strong>$53.98</strong></span>
                    </li>
                </ul>

                <a type="button" class="btn btn-primary btn-lg btn-block">
                    Checkout
                </a>
            </div>
        </div>
    </div>
</div>
