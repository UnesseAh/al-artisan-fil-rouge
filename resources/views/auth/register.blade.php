

@include('includes.dashboard.head')
<body>
    <div>
        <section class="vh-100" style="background-color: #C7B299;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block">
                                    <img src="{{ asset('image/image-2.jpg') }}"
                                         alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center" >
                                    <div class="card-body p-4 p-lg-5 text-black">
                                        <form method="POST" action="{{ route('register.submit') }}">
                                            @csrf
                                            <div class="d-flex align-items-center mb-3 pb-1">
                                                <img src="{{ asset('image/logo/al-artisan-logo-dark-1.png') }}" style="width: 50%">
                                            </div>

                                            <div class="form-outline mb-2">
                                                <input name="name" type="text" id="name" value="{{ old('name') }}" class="form-control form-control-lg bg-white " />
                                                <label class="form-label" for="name">Name</label>
                                            </div>
                                            @if($errors->has('name'))
                                                <p class="text-danger small mb-2">{{ $errors->first('name') }}</p>
                                            @endif


                                            <div class="form-outline mb-2">
                                                <input name="email" type="email" value="{{ old('email') }}"  id="email" class="form-control form-control-lg" />
                                                <label class="form-label" for="email">Email address</label>
                                            </div>
                                            @if($errors->has('email'))
                                                <p class="text-danger small mb-2">{{ $errors->first('email') }}</p>
                                            @endif


                                            <div class="form-outline mb-2">
                                                <input name="password" type="password" value="{{ old('password') }}"  id="password" class="form-control form-control-lg" />
                                                <label class="form-label" for="password">Password</label>
                                            </div>
                                            @if($errors->has('password'))
                                                <p class="text-danger small mb-2">{{ $errors->first('password') }}</p>
                                            @endif


                                            <div class="form-outline mb-2">
                                                <input name="password_confirmation" type="password"  value="{{ old('password_confirmation') }}"  id="password_confirmation" class="form-control form-control-lg" />
                                                <label class="form-label" for="password_confirmation">Confirm password</label>
                                            </div>
                                            @if($errors->has('error'))
                                                <p class="text-danger small mb-2">{{ $errors->first('error') }}</p>
                                            @endif


                                            <div class="pt-1 mb-4">
                                                <button type="submit" class="btn btn-dark btn-lg btn-block">Register</button>
                                            </div>

                                            <p class=" pb-lg-2" style="color: #332D2D;margin-bottom: 0">Already have an account? <a href="{{ route('login.page') }}" style="color: #C7B299;">Login here</a></p>
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
{{--@if(session('error'))--}}
{{--    <div>{{ session('error') }}</div>--}}
{{--@endif--}}
{{--<form method="POST" action="{{ route('register.submit') }}">--}}
{{--    @csrf--}}
{{--    <div>--}}
{{--        <label for="name">Name:</label>--}}
{{--        <input type="text" name="name">--}}
{{--
{{--    </div>--}}
{{--    <div>--}}
{{--        <label for="email">Email:</label>--}}
{{--        <input type="email" name="email">--}}

{{--    </div>--}}
{{--    <div>--}}
{{--        <label for="password">Password:</label>--}}
{{--        <input type="password" name="password">--}}

{{--    </div>--}}
{{--    <div>--}}
{{--        <label for="password_confirmation">Confirm Password:</label>--}}
{{--        <input type="password" name="password_confirmation">--}}
{{--    </div>--}}


{{--    <button type="submit">Register</button>--}}
{{--</form>--}}

{{--<p>Already have an account? <a href="{{ route('login.page') }}">login</a></p>--}}
