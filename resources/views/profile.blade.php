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
        <form action="{{ route('edit.profile', ['id' => $user->name]) }}" method="POST">
            @csrf
            <!-- Name input -->
            <div class="form-outline mb-4">
                <input value="{{ $user->name }}" name="name" type="text" id="name" class="form-control" />
                <label class="form-label" for="name">Name</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input value="{{ $user->email }}"  name="email" type="email" id="email" class="form-control" />
                <label class="form-label" for="email">Email address</label>
            </div>


            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
                Update Profile
            </button>
        </form>
    </div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

<body>
</html>

