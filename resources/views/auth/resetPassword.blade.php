
<form action="{{ route('reset.password.submit') }}" method="POST">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <div>
        <label for="email">Email :</label>
        <input name="email" type="email" id="email">
    </div>

    <div>
        <label for="password">Password :</label>
        <input name="password" type="password" id="password">
    </div>

    <div>
        <label for="password-confirm">Confirm Password :</label>
        <input name="password_confirmation" type="password" id="password-confirm">
    </div>

    <button type="submit">Reset Password</button>
</form>
