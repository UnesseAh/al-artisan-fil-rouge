
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
                                <img src="{{ asset('image/image-1.jpg') }}"
                                     alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="dsfasdfsadcol-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form action="{{ route('login.submit') }}" method="POST">
                                        @csrf
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <img src="{{ asset('image/logo/al-artisan-logo-dark-1.png') }}" style="width: 50%">
                                        </div>
                                        @if(session('message'))
                                            <div class="alert alert-success p-3">{{ session('message') }}</div>
                                        @endif

                                        <div class="form-outline mb-2">
                                            <input name="email" type="email" value="{{ old('email') }}" id="email" class="form-control form-control-lg" />
                                            <label  class="form-label" for="email">Email address</label>
                                        </div>
                                        @if($errors->has('email'))
                                            <p class="text-danger small mb-2">{{ $errors->first('email') }}</p>
                                        @endif


                                        <div class="form-outline mb-1">
                                            <input name="password" type="password" value="{{ old('password') }}" id="password" class="form-control form-control-lg" />
                                            <label  class="form-label" for="password">Password</label>
                                        </div>
                                        @if($errors->has('password'))
                                            <p class="text-danger small mb-2">{{ $errors->first('password') }}</p>
                                        @endif


                                        <a class="small text-muted" href="{{ route('forget.password.show') }}">Forgot password?</a>


                                        <div class="pt-1 mt-2 mb-4">
                                            <button type="submit" class="btn btn-dark btn-lg btn-block" >Login</button>
                                        </div>

                                        <p class="pb-lg-2" style="color: #212121; margin-bottom: 0">Don't have an account? <a href="{{ route('register.page') }}" style="color: #C7B299;">Register here</a></p>

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
