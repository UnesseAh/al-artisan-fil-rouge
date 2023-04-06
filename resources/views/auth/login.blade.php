
{{--@if(session('message'))--}}
{{--    <div>{{ session('message') }}</div>--}}
{{--@endif--}}


@include('includes.dashboard.head')
<body>
<div>
    <section class="vh-100" style="background-color: #212121;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="{{ asset('images/image-1.jpg') }}"
                                     alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="dsfasdfsadcol-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="{{ route('login.submit') }}" method="POST">
                                        @csrf
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <img src="{{ asset('images/logo/al-artisan-logo-dark-1.png') }}" style="width: 50%">
{{--                                            <span class="h1 fw-bold mb-0">Al Artisan </span>--}}
                                        </div>

{{--                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>--}}

                                        <div class="form-outline mb-4">
                                            <input name="email" type="email" id="email" class="form-control form-control-lg" />
                                            <label  class="form-label" for="email">Email address</label>
                                        </div>
                                        {{--        @if($errors->has('email'))--}}
                                        {{--            <span>{{ $errors->first('email')}}</span>--}}
                                        {{--        @endif--}}

                                        <div class="form-outline mb-1">
                                            <input name="password" type="password" id="password" class="form-control form-control-lg" />
                                            <label  class="form-label" for="password">Password</label>
                                        </div>
                                        {{--        @if($errors->has('password'))--}}
                                        {{--            <span>{{ $errors->first('password') }}</span>--}}
                                        {{--        @endif--}}
                                        <a class="small text-muted" href="{{ route('forget.password.show') }}">Forgot password?</a>


                                        <div class="pt-1 mt-2 mb-4">
                                            <button type="submit" class="btn btn-dark btn-lg btn-block" >Login</button>
                                        </div>

                                        <p class="mb-5 pb-lg-2" style="color: #212121;">Don't have an account? <a href="{{ route('register.page') }}" style="color: #C7B299;">Register here</a></p>

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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>
