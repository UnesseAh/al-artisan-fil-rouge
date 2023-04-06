{{--@if(session('message'))--}}
{{--    <span>{{ session('message') }}</span>--}}
{{--@endif--}}

{{--<form action="{{ route('forget.password.submit') }}" method="POST">--}}
{{--    @csrf--}}
{{--    <div>--}}
{{--    <label for="email">Email :</label>--}}
{{--    <input type="email" name="email" id="email">--}}
{{--    </div>--}}
{{--    <div>--}}
{{--        <button type="submit">Send Password Reset Link </button>--}}
{{--    </div>--}}
{{--</form>--}}

@include('includes.dashboard.head')
<body class="text-center d-flex justify-content-center align-items-center" style="min-height: 100vh; background-color: #332D2D">
<div  class="card   w-25">
    <div class="card-body">
        <img class="mb-3" src="{{ asset('images/logo/al-artisan-logo-dark-1.png') }}" style="width: 50%">
        <p style="font-size: 15px; line-height: 20px ">Please enter your email address. You will receive an email message with a reset password link.</p>
        <form action="{{ route('forget.password.submit') }}" method="POST">
            @csrf
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input name="email" type="email" id="email" class="form-control" />
                <label class="form-label" for="email">Email address</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-dark btn-block mb-4">Get New Password</button>

            <div class="text-center">
                <p><a style="color: #C7B299" href="{{ route('register.page') }}">Register</a> | <a style="color: #C7B299" href="{{ route('login.page') }}">Login</a></p>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

</body>


