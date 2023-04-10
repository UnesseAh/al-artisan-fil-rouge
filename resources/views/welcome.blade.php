<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Al Artisan | Home Page</title>
    <link rel="icon" type="image/x-icon" href="image/logo/icon/al-artisan-icon-dark.png">
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">--}}
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark" >
    <!-- Container wrapper -->
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="https://mdbgo.com/">
            <img src="{{ asset('image/logo/icon/al-artisan-icon-white.png') }}" height="36" alt="MDB Logo" loading="lazy" style="margin-top: -1px;"/>
        </a>

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Artisans</a>
                </li>
                <!-- Navbar dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">Categories</a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="#">Lighting</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Rugs</a>
                        </li>
                        <li>
                    </ul>
                </li>
                <!-- Navbar dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">Info</a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="#">About Us</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">FAQ</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Contact</a>
                        </li>

                    </ul>
                </li>
            </ul>
            <!-- Left links -->
            <div class="d-flex align-items-center">
                <a href="{{ route('login.page') }}" type="button" class="btn btn-link px-3 me-2">
                    Login
                </a>
                <a href="{{ route('register.page') }}" type="button" class="btn btn-primary me-3">
                    Register
                </a>

            </div>
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<div class="card text-center">
    <div class="card-header">MARHABA!</div>
    <div class="card-body d-flex justify-content-center">
        <p class="card-text w-50">Welcome to Al Artisan, where we strive to empower talented artisans from remote areas by showcasing their exquisite crafts. Our unique and authentic products are sourced directly from the artisans, allowing us to offer wholesale prices to bazaar owners and support the local communities. By shopping with us, you're not only getting beautiful and authentic Moroccan decor, but you're also contributing to the livelihoods of the hardworking artisans who make them.</p>
    </div>
</div>
<div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($products as $product)
            <a href="{{ route('show.product', ['product' => $product ])}}">
                <div class="col">
                    <div class="card">
                        <img src="{{asset('image/'.$product->image)}}" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <p class="card-text">
                                {{$product->price}}
                            </p>
                        </div>
                    </div>
                </div>
            </a>

        @endforeach
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
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

            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <i class="fab fa-google"></i>
            </a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <i class="fab fa-instagram"></i>
            </a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <i class="fab fa-linkedin-in"></i>
            </a>

            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                <i class="fab fa-github"></i>
            </a>
        </section>
        <!-- Section: Social media -->

        <!-- Section: Form -->
        <section class="">
            <form action="">
                <!--Grid row-->
                <div class="row d-flex justify-content-center">
                    <!--Grid column-->
                    <div class="col-auto">
                        <p class="pt-2">
                            <strong>Sign up for our newsletter</strong>
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-5 col-12">
                        <!-- Email input -->
                        <div class="form-outline form-white mb-4">
                            <input type="email" id="form5Example21" class="form-control" />
                            <label class="form-label" for="form5Example21">Email address</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-auto">
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-outline-light mb-4">
                            Subscribe
                        </button>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </form>
        </section>
        <!-- Section: Form -->

        <!-- Section: Text -->
        <section class="mb-4">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
                repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
                eum harum corrupti dicta, aliquam sequi voluptate quas.
            </p>
        </section>
        <!-- Section: Text -->

        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white">Link 1</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 2</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white">Link 1</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 2</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white">Link 1</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 2</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white">Link 1</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 2</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>
