@include('includes.dashboard.head')

<section class="h-150 h-custom" style="background-color: white;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
                <div class="card rounded-3">
                    <img src="{{ asset('image/create-product-cover.jpg') }}"
                         class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                         alt="Sample photo">
                    <div class="card-body pb-3">
{{--                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Add New Craft :</h3>--}}
                        <form method="POST" action="{{route('update.order', $order)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-outline mb-2">
                                <input name="name" value="{{ $order->user->name }}" type="text" id="name" class="form-control" />
                                <label class="form-label" for="name">Customer</label>
                            </div>
                            @if($errors->has('name'))
                                <p class="text-danger small mb-2">{{ $errors->first('name') }}</p>
                            @endif

                            <div class="form-outline mb-2">
                                <input name="subtotal" value="{{  $order->subtotal }}" min="1" max="999999" type="number" id="subtotal" class="form-control" placeholder="subtotal">
                                <label for="subtotal" class="form-label">Subtotal</label>
                            </div>
                            @if($errors->has('subtotal'))
                                <p class="text-danger small mb-2">{{ $errors->first('subtotal') }}</p>
                            @endif


                            <div class="form-outline mb-2">
                                <input name="shipping_address" value="{{  $order->shipping_address }}" type="text" id="shipping_address" class="form-control" />
                                <label class="form-label" for="title">Shipping Address</label>
                            </div>
                            @if($errors->has('shipping_address'))
                                <p class="text-danger small mb-2">{{ $errors->first('shipping_address') }}</p>
                            @endif

                            <div class="form-outline mb-2">
                                <input name="payment_method" value="{{  $order->payment_method }}" type="text" id="payment_method" class="form-control" />
                                <label class="form-label" for="payment_method">payment method</label>
                            </div>
                            @if($errors->has('payment_method'))
                                <p class="text-danger small mb-2">{{ $errors->first('payment_method') }}</p>
                            @endif

                            <div class="mb-2">
                                <select id="state" name="state_id" class="form-select">
                                    <option selected disabled>Choose state</option>
                                    @foreach($states as $state)
                                        <option value="{{$state->id}}" @if($state->id === $order->state_id) selected @endif >{{$state->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if($errors->has('state'))
                                <p class="text-danger small mb-2">{{ $errors->first('state') }}</p>
                            @endif

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Update Order
                            </button>
                        </form>
                        <div>
                            <p><a class="btn btn-outline-info btn-block" href="{{ route('dashboard') }}">Back to Dashboard</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
