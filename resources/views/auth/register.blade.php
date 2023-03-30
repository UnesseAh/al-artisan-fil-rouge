<form method="POST" action="{{ route('register') }}">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" required autofocus>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
    </div>
    <div>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" required>
    </div>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session('error'))
        <div>{{ session('error') }}</div>
    @endif
    <button type="submit">Register</button>
</form>
