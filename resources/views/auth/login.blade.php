<h1>LOGIN :</h1>

@if(session('message'))
    <div>{{ session('message') }}</div>
@endif

<form action="{{ route('login.submit') }}" method="POST">
    @csrf
    <div>
        <label for="email">Email:</label>
        <input id="email" type="email" name="email">
        @if($errors->has('email'))
            <span>{{ $errors->first('email')}}</span>
        @endif
    </div>
    <div>
        <label>Password:</label>
        <input type="password" name="password">
        @if($errors->has('password'))
            <span>{{ $errors->first('password') }}</span>
        @endif
    </div>
    <button type="submit">Login</button>
    <br>
    <a href="{{ route('forget.password.show') }}">Reset Password</a>

</form>

<p>You don't have an account? <a href="{{ route('register.page') }}">Register</a></p>
