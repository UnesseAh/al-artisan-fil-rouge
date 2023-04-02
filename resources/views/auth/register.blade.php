@if(session('error'))
    <div>{{ session('error') }}</div>
@endif
<h1>REGISTER :</h1>
<form method="POST" action="{{ route('register.submit') }}">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name">
        @if($errors->has('name'))
            <span>{{ $errors->first('name') }}</span>
        @endif
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email">
        @if($errors->has('email'))
            <span>{{ $errors->first('email')}}</span>
        @endif
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password">
        @if($errors->has('password'))
            <span>{{ $errors->first('password') }}</span>
        @endif
    </div>
    <div>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation">
    </div>

    @if(session('error'))
        <div>{{ session('error') }}</div>
    @endif
    <button type="submit">Register</button>
</form>

<p>Already have an account? <a href="{{ route('login.page') }}">login</a></p>
