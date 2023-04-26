

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al Artisan</title>
    <script src="{{asset('js/landing-page.js')}}" type="text/javascript" defer></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white p-3">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <img src="{{ asset('image/logo/icon/al-artisan-icon-dark.png') }}" height="40" alt="MDB Logo" loading="lazy"/>
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('landing.data') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Artisans</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart.show') }}">Cart</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <!-- Icon -->
            <a class="link-secondary me-3" href="#">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>

            <!-- Notifications -->
            <div class="dropdown">
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="#">Some news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Another news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                </ul>
            </div>
            <!-- Avatar -->
            <div class="dropdown">
                <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="25" alt="Black and White Portrait of a Man" loading="lazy"/>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                    <li>
                        <a class="dropdown-item" href="#">My profile</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Settings</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="row">

                            <div class="col-lg-7">
                                <h5 class="mb-3"><a href="#!" class="text-body"><i
                                            class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                                <hr>

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div>
                                        <p class="mb-1">Shopping cart</p>
                                        <p class="mb-0">You have 4 items in your cart</p>
                                    </div>
                                    <div>
                                        <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                                    </div>
                                </div>

                                <div>
                                    <div class="card-body p-0">
                                        @if(count($cartItems) > 0)
                                            <table class="table align-middle mb-0 bg-white table-striped table-bordered ">
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
                                                @php($subtotal = 0)

                                                @foreach($cartItems as $cartItem)
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img src="{{asset('image/'. $cartItem->handicraft->image)}}" alt="" style="width: 45px; height: 45px"/>
                                                                <div class="ms-3">
                                                                    <p class="fw-bold mb-1">{{ $cartItem->handicraft->title }}</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="fw-normal mb-1">{{ $cartItem->handicraft->price }} DH</p>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-success rounded-pill d-inline">{{ $cartItem->quantity}} </span>
                                                        </td>
                                                        <td>{{ $cartItem->handicraft->price * $cartItem->quantity}} DH</td>
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
                                                    @php($subtotal += $cartItem->handicraft->price * $cartItem->quantity)

                                                @endforeach
                                                </tbody>
                                            </table>
                                        @else
                                            <p>Your cart is empty</p>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-5 d-flex" style="align-self: flex-end">

                                <div class="card text-white rounded-3" style="background-color: #382C2C; width: 100%">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h5 class="mb-0">Card details</h5>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                                                 class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                                        </div>

                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">Subtotal</p>
                                            <p class="mb-2">{{ $subtotal . ' MAD' }}</p>
                                        </div>

                                        <button type="button" class="btn btn-block btn-lg" style="background-color: #C7B299">
                                            <div class="d-flex justify-content-between">
                                                <span>{{ $subtotal . ' MAD' }}</span>
                                                <a href="{{ route('payment.page', ['subtotal'=> $subtotal]) }}" type="button" class="text-white">
                                                    Checkout
                                                    <i class="fas fa-long-arrow-alt-right ms-2"></i>
                                                </a>
                                            </div>
                                        </button>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Navbar -->



<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <i class="fab fa-facebook-f"></i>
            </a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <i class="fab fa-twitter"></i>
            </a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <i class="fab fa-instagram"></i>
            </a>

        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">al-artisan.com</a>
    </div>
    <!-- Copyright -->
</footer>

</body>
