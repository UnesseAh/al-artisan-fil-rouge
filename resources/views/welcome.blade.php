<!DOCTYPE html>
<html lang="en-US">
{{--@include('includes.dashboard.head')--}}
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al Artisan</title>
    <script src="{{asset('js/landing-page.js')}}" type="text/javascript" defer></script>
    <link rel="stylesheet" href="{{asset('css/landing-page.css')}}">
    <!--  Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /><body>
<!-- Navbar -->
{{--@include('includes.landing-page.navbar')--}}
<!-- Navbar -->
<div class="nav-hero">
    <!-- Navigation -->
    <header class="row container">
        <a href="#" class="logo row" >
            <img src="{{asset('image/logo/icon/al-artisan-icon-dark.png')}}" alt="">
            <h1>Al Artisan</h1>
        </a>
        <div class="toggleMenu" onclick="toggleMenu();"></div>
        <nav class="navigation row">
            <ul class="row">
                <li><a href="#">Artisans</a></li>
                <li><a href="#">Categoires</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Sign up</a></li>
            </ul>
        </nav>
    </header>
    <!-- End Navigation -->

    <!-- Hero -->
    <section class="hero row container">
        <div>
            <h1>Supporting Moroccan artisans, one purchase at a time.</h1>
            <p>Hurry up join our community now!</p>
            <a href="#" class="hero-btn">Join now</a>
        </div>
        <div class="row">
            <img src="{{asset('image/hero-image.jpg')}}" alt="">
        </div>
    </section>

    <!-- End Hero -->
</div>





<div class="container">
    <!-- Marhaba -->
    <div class="merhaba" style="outline: 2px solid red">
        <h2>Marhaba!</h2>
        <p>Experience the charm of <strong>Moroccan decor</strong> and <strong>lifestyle</strong> at our store, where you can discover the most extraordinary <strong>artisanal crafts</strong>. Our collection features unique and <strong>exquisite treasures</strong> straight from Morocco, tailored to <strong>modern</strong> and <strong>contemporary homes</strong>. We collaborate with <strong>independent buyers</strong> and cater to commercial projects as well.</p>
    </div>
    <!-- End Marhaba -->

    <!-- On Sale -->
    <h2 class="on-sale-heading" style="outline: 2px solid red">ON SALE</h2>

    <div class="main_products" style="outline: 2px solid red">

        <div class="product">
            <img src="{{asset('image/product-1.png')}}" alt="">
            <div class="product_desc">
                <div class="title">Nike M3</div>
                <p>$12.34</p>
            </div>
        </div>
        <div class="product">
            <img src="{{asset('image/product-1.png')}}" alt="">
            <div class="product_desc">
                <div class="title">Nike M3</div>
                <p>$12.34</p>
            </div>
        </div>
        <div class="product">
            <img src="{{asset('image/product-1.png')}}" alt="">
            <div class="product_desc">
                <div class="title">Nike M3</div>
                <p>$12.34</p>
            </div>
        </div>
        <div class="product">
            <img src="{{asset('image/product-1.png')}}" alt="">
            <div class="product_desc">
                <div class="title">Nike M3</div>
                <p>$12.34</p>
            </div>
        </div>
        <div class="product">
            <img src="{{asset('image/product-1.png')}}" alt="">
            <div class="product_desc">
                <div class="title">Nike M3</div>
                <p>$12.34</p>
            </div>
        </div>
        <div class="product">
            <img src="{{asset('image/product-1.png')}}" alt="">
            <div class="product_desc">
                <div class="title">Nike M3</div>
                <p>$12.34</p>
            </div>
        </div>
        <div class="product">
            <img src="{{asset('image/product-1.png')}}" alt="">
            <div class="product_desc">
                <div class="title">Nike M3</div>
                <p>$12.34</p>
            </div>
        </div>
        <div class="product">
            <img src="{{asset('image/product-1.png')}}" alt="">
            <div class="product_desc">
                <div class="title">Nike M3</div>
                <p>$12.34</p>
            </div>
        </div>
    </div>

    <!-- End On Sale -->


    <!-- Shop By Category -->

    <h2 class="on-sale-heading" style="outline: 2px solid red">Categories</h2>

    <section class="banner" style="outline: 2px solid red">
            <a href="">
                <div class="banner-img">
                    <img src="{{ asset('image/category-1.jpg') }}" alt="" style="height: 20rem; width: 30rem !important;">
                    <p class="category">Moroccan Lighting</p>
                </div>
            </a>
        <a href="">
            <div class="banner-img">
                <img src="{{ asset('image/category-2.jpg') }}" alt="" style="height: 20rem; width: 30rem !important;">
                <p class="category">Moroccan Area Rugs</p>
            </div>
        </a>
        <a href="">
            <div class="banner-img">
                <img src="{{ asset('image/category-3.jpg') }}" alt="" style="height: 20rem; width: 30rem !important;">
                <p class="category">Moroccan Furnishing</p>
            </div>
        </a>
        <a href="">
            <div class="banner-img">
                <img src="{{ asset('image/category-4.jpg') }}" alt="" style="height: 20rem; width: 30rem !important;">
                <p class="category">Moroccan Jewellery</p>
            </div>
        </a>
    </section>
    <!-- End Shop By Category -->



    <!-- Artisans -->
    <div class="artisans" style="outline: 2px solid red">
        <div class="inner">
            <h2 class="on-sale-heading" style="outline: 2px solid red">Artisans</h2>
            <div class="row">
                <div class="col">
                    <div class="artisan">
                        <img src="{{ asset('image/artisan-1.jpg') }}" alt="">
                        <div class="name">Abderrahim Jamou</div>
                        <div class="stars">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>

                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, sed!
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="artisan">
                        <img src="{{ asset('image/artisan-2.jpg') }}" alt="">
                        <div class="name">Moustafa Laanigri</div>
                        <div class="stars">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>

                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, sed!
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="artisan">
                        <img src="{{ asset('image/artisan-3.jpg') }}" alt="">
                        <div class="name">Abdeljelil Nakata</div>
                        <div class="stars">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>

                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, sed!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Artisans -->


    <!-- Partners -->
    <section class="partners_section" style="outline: 2px solid red">
        <h2 style="outline: 2px solid red">Our <strong>Partners</strong></h2>
        <div class="partners_row">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="square-holder">
                    <img alt="" src="{{ asset('image/youcode.png') }}" />
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="square-holder">
                    <img alt="" src="{{ asset('image/um6p.png') }}" />
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="square-holder">
                    <img alt="" src="{{ asset('image/simplon.png') }}" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Partners -->

</div>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">watch</a></li>
                        <li><a href="#">bag</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <img src="{{ asset('image/logo/al-artisan-logo-white-1.png') }}" alt="">
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>



{{--<div class="card text-center" >--}}
{{--    <div class="card-header">MARHABA!</div>--}}
{{--    <div class="card-body d-flex justify-content-center">--}}
{{--        <p class="card-text w-50">Welcome to Al Artisan, where we strive to empower talented artisans from remote areas by showcasing their exquisite crafts. Our unique and authentic products are sourced directly from the artisans, allowing us to offer wholesale prices to bazaar owners and support the local communities. By shopping with us, you're not only getting beautiful and authentic Moroccan decor, but you're also contributing to the livelihoods of the hardworking artisans who make them.</p>--}}
{{--    </div>--}}
{{--</div>--}}
