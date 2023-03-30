<form action="{{ route('register.post') }}" method="POST">
    @csrf
    <input type="text" name="name">
    <br>
    <input type="text" name="email">
    <br>
    <input type="password" name="password">
    <br>
    <button type="submit">Register</button>
</form>
