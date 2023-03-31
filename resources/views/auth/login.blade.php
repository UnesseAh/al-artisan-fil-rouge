@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

<h1>LOGIN :</h1>
<form action="{{ route('login') }}" method="POST">
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
</form>
