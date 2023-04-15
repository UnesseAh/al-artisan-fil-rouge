

@include('includes.dashboard.head')
<body class="text-center d-flex justify-content-center align-items-center container" style="min-height: 100vh; background-color: #C7B299">
<div class="row ">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <img class="mb-3" src="{{ asset('image/logo/icon/al-artisan-icon-dark.png') }}" style="width: 40%">
                <p style="font-size: 15px; line-height: 20px ">Please enter your email address. You will receive an email message with a reset password link.</p>
                <form action="{{ route('reset.password.submit') }}" method="POST">
                    @csrf
                    @if(session('tokenNotValid'))
                        <div class="alert alert-danger p-3">{{ session('tokenNotValid') }}</div>
                    @endif
                    <!-- Input hidden -->
                    <input type="hidden" name="token" value="{{ $token }}">
                    <!-- Email input -->
                    <div class="form-outline mb-2">
                        <input name="email" value="{{ old('email') }}" type="email" id="email" class="form-control" />
                        <label class="form-label" for="email">Email Adress</label>
                    </div>
                    @if($errors->has('email'))
                        <p class="text-danger small mb-2">{{ $errors->first('email') }}</p>
                    @endif
                    <!-- Password input -->
                    <div class="form-outline mb-2">
                        <input name="password" value="{{ old('password') }}" type="password"  id="password" class="form-control" />
                        <label class="form-label" for="password">Password</label>
                    </div>
                    @if($errors->has('password'))
                        <p class="text-danger small mb-2">{{ $errors->first('password') }}</p>
                    @endif
                    <!-- Confirm Password input -->
                    <div class="form-outline mb-2">
                        <input name="password_confirmation" type="password"  id="password_confirm" class="form-control" />
                        <label class="form-label" for="password_confirm">Confirm Password </label>
                    </div>
                    @if($errors)
                        <p class="text-danger small mb-2">{{ $errors->first('password_confirmation') }}</p>
                    @endif

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-dark btn-block mb-4">Reset Password</button>

                    <div class="text-center">
                        <p><a style="color: #C7B299" href="{{ route('register.page') }}">Register</a> | <a style="color: #C7B299" href="{{ route('login.page') }}">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>


