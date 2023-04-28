<!DOCTYPE html>
<html lang="en-US">
@include('includes.dashboard.head')
<body>
<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    @include('includes.dashboard.sidebar')
    <!-- Sidebar -->

    <!-- Navbar -->
    @include('includes.dashboard.navbar')
    <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="container pt-4">
        @if(session('deleted'))
            <div class="d-flex align-items-center alert alert-danger p-3" style="width: fit-content">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-check2-circle" viewBox="0 0 16 16">
                    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                </svg>
                <span class="px-2">{{ session('deleted') }}</span>
            </div>
        @elseif(session('updated'))
            <div class="d-flex align-items-center alert alert-warning p-3" style="width: fit-content">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-check2-circle" viewBox="0 0 16 16">
                    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                </svg>
                <span class="px-2">{{ session('updated') }}</span>
            </div>
        @endif

        <form method="GET" action="{{ route('show.users') }}">
            <label for="role">Filter by role:</label>
            <select name="role" id="role">
                <option value="">All</option>
                <option value="1" {{ request('role') == 1 ? 'selected' : '' }}>Admins</option>
                <option value="2" {{ request('role') == 2 ? 'selected' : '' }}>Artisans</option>
                <option value="3" {{ request('role') == 3 ? 'selected' : '' }}>Users</option>
            </select>
            <button type="submit">Filter</button>
        </form>

        <table class="table align-middle mb-0 bg-white table-striped table-bordered ">
            <thead class="bg-dark text-light">
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>email</th>
                <th>role</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id}}</td>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->email}}</td>
                    <td>
                        <span class="badge badge-primary rounded-pill d-inline">{{ $user->role->name }}</span>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('delete.user', $user) }}">
                            <a href="{{ route('edit.user', $user) }}"
                               class="btn btn-outline-success" data-mdb-ripple-color="dark">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger" data-mdb-ripple-color="dark">Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</main>
<!--Main layout-->

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>
</html>
