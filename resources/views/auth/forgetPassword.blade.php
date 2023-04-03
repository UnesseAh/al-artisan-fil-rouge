@if(session('message'))
    <span>{{ session('message') }}</span>
@endif

<form action="{{ route('forget.password.submit') }}" method="POST">
    @csrf
    <div>
    <label for="email">Email :</label>
    <input type="email" name="email" id="email">
    </div>
    <div>
        <button type="submit">Send Password Reset Link </button>
    </div>
</form>
