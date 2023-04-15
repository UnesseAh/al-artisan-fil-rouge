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
            <div class="form-outline mb-2">
                <input value="{{ $user->name }}" name="name" type="text" id="name" class="form-control" />
                <label class="form-label" for="name">Name</label>
            </div>
            @if($errors->has('name'))
                <p class="text-danger small mb-2">{{ $errors->first('name') }}</p>
            @endif


            <!-- Email input -->
            <div class="form-outline mb-2">
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

{{--<div class="container" style="margin-top: 58px;">--}}
{{--    <form action="{{ route('update.profile')}}" method="POST">--}}
{{--        @csrf--}}
{{--        @method('PUT')--}}

{{--        <!-- Old Password input -->--}}
{{--        <div class="form-outline mb-4">--}}
{{--            <input value=""  name="password" type="password" id="email" class="form-control" />--}}
{{--            <label class="form-label" for="email">Old Password</label>--}}
{{--        </div>--}}

{{--        <!-- New Password input -->--}}
{{--        <div class="form-outline mb-4">--}}
{{--            <input  name="password_confirmation" type="password" id="password_confirmation" class="form-control" />--}}
{{--            <label class="form-label" for="password_confirmation">New Password</label>--}}
{{--        </div>--}}
{{--        <!-- Submit button -->--}}
{{--        <button type="submit" class="btn btn-primary btn-block mb-4">--}}
{{--            Update Password--}}
{{--        </button>--}}
{{--    </form>--}}
{{--</div>--}}

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

<body>
</html>

