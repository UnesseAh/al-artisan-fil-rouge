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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>
<body>
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
    <div class="merhaba" style="outline: 2px solid red">
        <h2>Marhaba!</h2>
        <p>Experience the charm of <strong>Moroccan decor</strong> and <strong>lifestyle</strong> at our store, where you can discover the most extraordinary <strong>artisanal crafts</strong>. Our collection features unique and <strong>exquisite treasures</strong> straight from Morocco, tailored to <strong>modern</strong> and <strong>contemporary homes</strong>. We collaborate with <strong>independent buyers</strong> and cater to commercial projects as well.</p>
    </div>
    <!-- On Sale -->
    @include('includes.landing-page.onsale')
    <!-- On Sale -->
    <!-- Shop By Category -->
    @include('includes.landing-page.shop-by-category')
    <!-- Shop By Category -->
    <!-- Testimonials -->
    @include('includes.landing-page.testimonials')
    <!-- Testimonials -->


</div>
<!-- Footer -->
@include('includes.landing-page.footer')
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
