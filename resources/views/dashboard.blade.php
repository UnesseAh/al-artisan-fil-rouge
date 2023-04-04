<h1>Dashboard</h1>
@if(session('message'))
    <span>{{ session('message') }}</span>
@endif


<p><a href="{{ route('forget.password.show') }}">Change password</a></p>
<p><a href="">Categories</a></p>

