

@include('includes.dashboard.head')
<body>
    <div>
        <section class="vh-100" style="background-color: white;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <img src="{{ asset('image/image-4.jpg') }}"
                                         alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center" style="background-color: red;">
                                    <div class="card-body p-4 p-lg-5 text-black">

                                        <form action="{{ route('register.submit') }}" method="POST">
                                            @csrf
                                            <div class="d-flex align-items-center mb-3 pb-1">
                                                <img src="{{ asset('image/al-artisan-logo-1.png') }}" style="width: 50%">
{{--                                                <span class="h1 fw-bold mb-0">Logo</span>--}}
                                            </div>

                                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                                            <div class="form-outline mb-4">
                                                <input type="email" id="form2Example17" class="form-control form-control-lg" />
                                                <label class="form-label" for="form2Example17">Email address</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="password" id="form2Example27" class="form-control form-control-lg" />
                                                <label class="form-label" for="form2Example27">Password</label>
                                            </div>

                                            <div class="pt-1 mb-4">
                                                <button class="btn btn-dark btn-lg btn-block" type="button">Login</button>
                                            </div>

                                            <a class="small text-muted" href="#!">Forgot password?</a>
                                            <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                                                                                                                      style="color: #393f81;">Register here</a></p>
                                            <a href="#!" class="small text-muted">Terms of use.</a>
                                            <a href="#!" class="small text-muted">Privacy policy</a>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
{{--@if(session('error'))--}}
{{--    <div>{{ session('error') }}</div>--}}
{{--@endif--}}
{{--<h1>REGISTER :</h1>--}}
{{--<form method="POST" action="{{ route('register.submit') }}">--}}
{{--    @csrf--}}
{{--    <div>--}}
{{--        <label for="name">Name:</label>--}}
{{--        <input type="text" name="name">--}}
{{--        @if($errors->has('name'))--}}
{{--            <span>{{ $errors->first('name') }}</span>--}}
{{--        @endif--}}
{{--    </div>--}}
{{--    <div>--}}
{{--        <label for="email">Email:</label>--}}
{{--        <input type="email" name="email">--}}
{{--        @if($errors->has('email'))--}}
{{--            <span>{{ $errors->first('email')}}</span>--}}
{{--        @endif--}}
{{--    </div>--}}
{{--    <div>--}}
{{--        <label for="password">Password:</label>--}}
{{--        <input type="password" name="password">--}}
{{--        @if($errors->has('password'))--}}
{{--            <span>{{ $errors->first('password') }}</span>--}}
{{--        @endif--}}
{{--    </div>--}}
{{--    <div>--}}
{{--        <label for="password_confirmation">Confirm Password:</label>--}}
{{--        <input type="password" name="password_confirmation">--}}
{{--    </div>--}}

{{--    @if(session('error'))--}}
{{--        <div>{{ session('error') }}</div>--}}
{{--    @endif--}}
{{--    <button type="submit">Register</button>--}}
{{--</form>--}}

{{--<p>Already have an account? <a href="{{ route('login.page') }}">login</a></p>--}}
