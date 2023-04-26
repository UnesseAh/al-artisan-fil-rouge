
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
<!-- Navbar -->
<!--Main layout-->
<main class="mt-5 pt-4">
    <div class="container mt-5">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-md-6 mb-4">
                <img src="{{ asset('image/'.$handicraft->image) }}" class="img-fluid" alt="" />
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">
                @if(session('added'))
                    <div class="d-flex align-items-center alert alert-success p-3" style="width: 100%">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                            <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                            <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                        </svg>
                        <span class="px-2">{{ session('added') }}</span>

                    </div>
                @elseif(session('deleted'))
                    <div class="d-flex align-items-center alert alert-danger p-3" style="width: 100%">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-check2-circle" viewBox="0 0 16 16">
                            <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                            <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                        </svg>
                        <span class="px-2">{{ session('warning') }}</span>
                    </div>
                @elseif(session('updated'))
                    <div class="d-flex align-items-center alert alert-warning p-3" style="width: 100%">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-check2-circle" viewBox="0 0 16 16">
                            <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                            <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                        </svg>
                        <span class="px-2">{{ session('updated') }}</span>
                    </div>
                @endif
                <!--Content-->
                <div class="p-4">
                    <strong><p style="font-size: 20px;">{{ $handicraft->title }}</p></strong>
                    <p><a href="">{{ $handicraft->user->name }}</a></p>

                    <p class="lead">
                        <span class="me-1">{{ $handicraft->price }} DH</span>
                    </p>

                    <p>{{ $handicraft->description }}</p>
                    <p>Stock : {{$handicraft->stock}}</p>

                    <form method="POST" action="{{ route('cart.add')}}" class="d-flex justify-content-left">
                        @csrf
                        <!-- add a hidden input field for the product ID -->
                        <input type="hidden" name="handicraft_id" value="{{$handicraft->id}}">
                        <!-- Default input -->
                        <div class="form-outline me-1" style="width: 100px;">
                            <input  type="number" id="quantity" name="quantity" value="1" min="1" max="{{$handicraft->stock}}" class="form-control"/>
                        </div>
                        <button class="btn btn-primary ms-1" type="submit">
                            Add to cart
                            <i class="fas fa-shopping-cart ms-1"></i>
                        </button>
                    </form>
                </div>
                <!--Content-->
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
        <hr/>

        <!--Grid row-->
        <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-md-6 text-center">
                <h4 class="my-4 h4">Related Products</h4>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">
            @foreach($relatedProducts as $relatedProduct)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card"> <img src="{{ asset('image/'.$relatedProduct->image) }}" class="card-img-top" alt="" />
                        <div class="card-body">
                            <h5 class="card-title">{{ $relatedProduct->title }}</h5>
                            <p class="card-text">{{ $relatedProduct->price }} DH</p>
                            <a href="{{ route('show.product', $relatedProduct) }}" class="btn btn-outline-primary">View product</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!--Grid row-->
    </div>

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

</main>
<!--Main layout-->
<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
></script>
</body>










{{--<div class="container">--}}
{{--    <div class="d-flex">--}}
{{--        <div class="col-md-6 mb-4 p-4">--}}
{{--            <img src="{{ asset('image/'.$handicraft->image) }}" class="img-fluid" alt="product-name">--}}
{{--        </div>--}}
{{--        <div class="col-md-6 mb-4 p-4">--}}
{{--            <h1> {{ $handicraft->title }}</h1>--}}
{{--            <p>Description: {{ $handicraft->description }}</p>--}}
{{--            <p>Price: {{ $handicraft->price }}</p>--}}
{{--            <form method="POST" action="{{ route('cart.add')}}" class="mt-4">--}}
{{--                @csrf--}}
{{--                <!-- add a hidden input field for the product ID -->--}}
{{--                <input type="hidden" name="handicraft_id" value="{{$handicraft->id}}">--}}
{{--                <div class="form-group">--}}
{{--                    <label for="quantity">Quantity:</label>--}}
{{--                    <input type="number" id="quantity" name="quantity" value="1" min="1" max="{{$handicraft->stock}}"--}}
{{--                           class="form-control">--}}
{{--                </div>--}}
{{--                <hr>--}}
{{--                <button type="submit" class="btn btn-primary">--}}
{{--                    Add To Cart--}}
{{--                </button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<!DOCTYPE html>--}}
{{--<html lang="en-US">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>Al Artisan</title>--}}
{{--    <script src="{{asset('js/landing-page.js')}}" type="text/javascript" defer></script>--}}
{{--    <link rel="stylesheet" href="{{asset('css/product-page.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('css/landing-page.css')}}">--}}

{{--    <!--  Font Awesome -->--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
{{--</head>--}}
{{--<body>--}}
{{--<!-- Navigation -->--}}

{{--<!-- Navigation -->--}}
{{--<header class="row container">--}}
{{--    <a href="#" class="logo row" >--}}
{{--        <img src="{{asset('image/logo/icon/al-artisan-icon-dark.png')}}" alt="">--}}
{{--        <h1>Al Artisan</h1>--}}
{{--    </a>--}}
{{--    <div class="toggleMenu" onclick="toggleMenu();"></div>--}}
{{--    <nav class="navigation row">--}}
{{--        <ul class="row">--}}
{{--            <li><a href="#">Artisans</a></li>--}}
{{--            <li><a href="#">Categoires</a></li>--}}
{{--            <li><a href="#">Portfolio</a></li>--}}
{{--            <li><a href="#">About Us</a></li>--}}
{{--            <li><a href="#">Contact</a></li>--}}
{{--            <li><a href="#">Sign up</a></li>--}}
{{--        </ul>--}}
{{--    </nav>--}}
{{--</header>--}}
{{--<!-- End Navigation -->--}}
{{--<!-- End Navigation -->--}}
{{--    <div class="small-container single-product">--}}
{{--        <div class="row">--}}
{{--            <div class="col-2">--}}
{{--                <img src="{{ asset('image/'.$handicraft->image) }}" alt="" width="100%" id="ProductImg">--}}
{{--                <div class="small-img-row">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-2">--}}
{{--                <p>Home / Handicrafts</p>--}}
{{--                <h1>{{ $handicraft->title }}</h1>--}}
{{--                <p>{{$handicraft->user->name}}</p>--}}
{{--                <h4>{{ $handicraft->price }}</h4>--}}
{{--                <form method="POST" action="{{ route('cart.add')}}" class="mt-4">--}}
{{--                    @csrf--}}
{{--                    <!-- add a hidden input field for the product ID -->--}}
{{--                    <input type="hidden" name="handicraft_id" value="{{$handicraft->id}}">--}}
{{--                    <input type="number" id="quantity" name="quantity" value="1" min="1" max="{{$handicraft->stock}}">--}}
{{--                    <button type="submit" href="" class="btn">Add to Cart</button>--}}
{{--                </form>--}}
{{--                <h3>Product Details: </h3>--}}
{{--                <br>--}}
{{--                <p>{{ $handicraft->description }}</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</body>--}}

