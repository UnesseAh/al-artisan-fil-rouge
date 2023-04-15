<!DOCTYPE html>
<html lang="en-US">
@include('includes.dashboard.head')
<body>
<!--Main Navigation-->
{{--<header>--}}
{{--    <!-- Navbar -->--}}
{{--    @include('includes.dashboard.navbar')--}}
{{--    <!-- Navbar -->--}}
{{--</header>--}}
<!--Main Navigation-->

<!--Main layout-->
    <div class="container" style="margin-top: 58px;">
        <form action="{{ route('update.profile', ['user' => $user->id])}}" method="POST">
            @csrf
            @method('PUT')

            @if(session('profile'))
                <div class="alert alert-success p-3">{{ session('profile') }}</div>
            @endif

            <!-- Name input -->
            <div class="form-outline mb-3">
                <input value="{{ $user->name }}" name="name" type="text" id="name" class="form-control" />
                <label class="form-label" for="name">Name</label>
            </div>
            @if($errors->has('name'))
                <p class="text-danger small mb-2">{{ $errors->first('name') }}</p>
            @endif


            <!-- Email input -->
            <div class="form-outline mb-3">
                <input value="{{ $user->email }}"  name="email" type="email" id="email" class="form-control" />
                <label class="form-label" for="email">Email address</label>
            </div>
            @if($errors->has('email'))
                <p class="text-danger small mb-2">{{ $errors->first('email') }}</p>
            @endif

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
                Update Profile
            </button>
        </form>
    </div>

<div class="container" style="margin-top: 58px;">
    <form action="{{ route('update.password')}}" method="POST">
        @csrf
        @method('PUT')

        @if(session('status'))
            <div class="alert alert-success p-3">{{ session('status') }}</div>
        @elseif(session('error-message'))
            <div class="alert alert-danger p-3">{{ session('error-message') }}</div>
        @endif

            <!-- Old Password input -->
        <div class="form-outline mb-3">
            <input value=""  name="old_password" type="password" id="email" class="form-control" />
            <label class="form-label" for="email">Old password</label>
        </div>
        @if($errors->has('old_password'))
            <p class="text-danger small mb-2">{{ $errors->first('old_password') }}</p>
        @endif

        <!-- New Password input -->
        <div class="form-outline mb-3">
            <input  name="password" type="password" id="new-password" class="form-control" />
            <label class="form-label" for="new-password">New password</label>
        </div>
        @if($errors->has('password'))
            <p class="text-danger small mb-2">{{ $errors->first('password') }}</p>
        @endif

        <!-- Confirm New Password input -->
        <div class="form-outline mb-3">
            <input  name="password_confirmation" type="password" id="confirmNewPasswordInput" class="form-control" />
            <label class="form-label" for="confirmNewPasswordInput">Confirm new password</label>
        </div>
        @if($errors->has('password_confirmation'))
            <p class="text-danger small mb-2">{{ $errors->first('password_confirmation') }}</p>
        @endif

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">
            Update Password
        </button>
    </form>

    <div>
        <p><a href="{{ route('dashboard') }}">Back to Dashboard</a></p>
    </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

<body>
</html>

