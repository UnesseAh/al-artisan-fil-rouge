<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al Artisan</title>
    <link rel="icon" type="image/x-icon" href="{{asset('image/logo/icon/al-artisan-icon-white.png')}}">

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
<!-- End nav -->

<!-- Credit card form -->
    <!--Main layout-->
    <main class="mt-5 pt-4">
        <div class="container">
            <!-- Heading -->
            <h2 class=" text-center">Checkout Form</h2>

            <!--Grid row-->
            <div class="row d-flex justify-content-center" style="margin-bottom: 80px">
                <!--Grid column-->
                <div class="col-md-8 mb-4">
                    <!--Card-->
                    <div class="card p-4">
                        <hr class="mb-4" />
                        <form action="{{ route('buy.products') }}" method="POST">
                            @csrf
                            <!--address-->
                            <p class="mb-0">Shipping Address</p>
                            <div class="form-outline mb-4">
                                <input name="shipping_address" type="text" class="form-control" placeholder="Shipping Address" />
                            </div>

                            <!--Phone number-->
                            <p class="mb-0">Phone Number</p>
                            <div class="form-outline">
                                <input type="text" id="form12" placeholder="Phone number" class="form-control" />
                            </div>

                            <hr class="mb-4" />
                            <button type="submit" class="w-100 btn btn-outline-success">Buy Products</button>
                        </form>

                    </div>
                    <!--/.Card-->
                </div>
                <!--Grid column-->


                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
    </main>
    <!--Main layout-->

<!-- Credit card form -->



<footer class="bg-dark text-center text-white">
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-center">
            <div class="p-4">
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="text-center p-3 bg-dark" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 al-artisan.com
    </div>
</footer>



<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>
