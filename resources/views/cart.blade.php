@include('includes.dashboard.head')
<h4><i class="fa-solid fa-cart-shopping"></i>My Cart</h4>
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
    <tr>
        <td>
            <div class="d-flex align-items-center">
                <img src="{{asset('images/product-1.png')}}" alt="" style="width: 45px; height: 45px"/>
                <div class="ms-3">
                    <p class="fw-bold mb-1">MOROCCAN KILIM CUSHION, RED</p>
                </div>
            </div>
        </td>
        <td>
            <p class="fw-normal mb-1">149DH</p>
        </td>
        <td>
            <span class="badge badge-success rounded-pill d-inline">5</span>
        </td>
        <td>298DH</td>
        <td>
            <button type="button" class="btn btn-link btn-sm px-3" data-ripple-color="dark">
                <i class="fas fa-times"></i>
            </button>
        </td>
    </tr>
    <tr>
        <td>
            <div class="d-flex align-items-center">
                <img src="{{asset('images/product-2.png')}}" alt="" style="width: 45px; height: 45px"/>
                <div class="ms-3">
                    <p class="fw-bold mb-1">MOROCCAN TRIBAL ENAMELED EARRINGS</p>
                </div>
            </div>
        </td>
        <td>
            <p class="fw-normal mb-1">149DH</p>
        </td>
        <td>
            <span class="badge badge-success rounded-pill d-inline">5</span>
        </td>
        <td>298DH</td>
        <td>
            <button type="button" class="btn btn-link btn-sm px-3" data-ripple-color="dark">
                <i class="fas fa-times"></i>
            </button>
        </td>
    </tr>
    <tr>
        <td>
            <div class="d-flex align-items-center">
                <img src="{{asset('images/product-3.png')}}" alt="" style="width: 45px; height: 45px"/>
                <div class="ms-3">
                    <p class="fw-bold mb-1">MOROCCAN CEILING LIGHTS, ALMINA</p>
                </div>
            </div>
        </td>
        <td>
            <p class="fw-normal mb-1">149DH</p>
        </td>
        <td>
            <span class="badge badge-success rounded-pill d-inline">5</span>
        </td>
        <td>298DH</td>
        <td>
            <button type="button" class="btn btn-link btn-sm px-3" data-ripple-color="dark">
                <i class="fas fa-times"></i>
            </button>
        </td>
    </tr>

    </tbody>

</table>
<div class="d-grid gap-2 col-6 mx-auto">
    <button class="btn btn-primary" type="button">Checkout</button>
</div>
