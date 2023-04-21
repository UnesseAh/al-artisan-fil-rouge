<!DOCTYPE html>
<html lang="en-US">
@include('includes.dashboard.head')
<body>
<!-- Navbar -->
@include('includes.landing-page.navbar')
<!-- Navbar -->
<div class="card text-center">
    <div class="card-header">MARHABA!</div>
    <div class="card-body d-flex justify-content-center">
        <p class="card-text w-50">Welcome to Al Artisan, where we strive to empower talented artisans from remote areas by showcasing their exquisite crafts. Our unique and authentic products are sourced directly from the artisans, allowing us to offer wholesale prices to bazaar owners and support the local communities. By shopping with us, you're not only getting beautiful and authentic Moroccan decor, but you're also contributing to the livelihoods of the hardworking artisans who make them.</p>
    </div>
</div>
<div class="container">

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
