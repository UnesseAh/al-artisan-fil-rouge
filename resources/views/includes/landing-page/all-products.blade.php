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

<!-- On Sale -->
<h2 class="on-sale-heading">ON SALE</h2>

<div class="main_products" style="outline: 2px solid red">
    @foreach($handicrafts as $handicraft)
        <a href="{{ route('show.product', $handicraft) }}">
            <div class="product">
                <img src="{{asset('image/'.$handicraft->image)}}" alt="">
                <div class="product_desc">
                    <div class="title">{{ $handicraft->title }}</div>
                    <p>{{$handicraft->price}} DH</p>
                    <p>{{$handicraft->user->name}}</p>
                </div>
            </div>
        </a>
    @endforeach
</div>

<!-- End On Sale -->
</body>
