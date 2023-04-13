@include('includes.dashboard.head')

<!-- Credit card form -->
<section>
    <div class="row">
        <div class="col-md-8 mb-4">
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h5 class="mb-0">Biling details</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('buy.products') }}" method="POST">
                        @csrf
                        <!-- Text input -->
                        <div class="form-outline mb-4">
                            <input name="shipping_address" type="text" id="adress" class="form-control" />
                            <label class="form-label" for="adress">Address</label>
                        </div>

                        <hr class="my-4"/>

                        <h5 class="mb-4">Payment</h5>

                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="formNameOnCard" class="form-control" />
                                    <label class="form-label" for="formNameOnCard">Name on card</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="card_number" class="form-control" />
                                    <label class="form-label" for="card_number">Credit card number</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-3">
                                <div class="form-outline">
                                    <input type="text" id="expiration" class="form-control" />
                                    <label class="form-label" for="expiration">Expiration</label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-outline">
                                    <input type="text" id="cvv" class="form-control" />
                                    <label class="form-label" for="cvv">CVV</label>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-lg btn-block" type="submit">
                            Buy
                        </button>
                    </form>
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
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            Shipping
                            <span>Free</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                            <div>
                                <strong>Total amount</strong>
                            </div>
                            <span><strong>{{ $subtotal . ' MAD'}}</strong></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Credit card form -->


<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
></script>
