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
        <a href="{{ route('create.product') }}" type="button" class="btn btn-primary mb-4">Add Product</a>

        <table class="table align-middle mb-0 bg-white table-striped table-bordered ">
            <thead class="bg-dark text-light">
            <tr>
                <th>ID</th>
                <th>product</th>
                <th>description</th>
                <th>price</th>
                <th>stock</th>
                <th>Category</th>
                <th>Subcategory</th>
                <th>Artisan</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($handicrafts as $handicraft)
                <tr>
                    <td>{{ $handicraft->id }}</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('image/'.$handicraft->image) }}" alt=""
                                 style="width: 45px; height: 45px"/>
                            <div class="ms-3">
                                <p class="fw-bold mb-1">{{ $handicraft->title }}</p>
                            </div>
                        </div>
                    </td>
                    <td>{{ $handicraft->description }}</td>
                    <td>{{ $handicraft->price }}</td>
                    <td><span class="badge badge-primary rounded-pill d-inline">{{ $handicraft->stock }}</span></td>
                    <td>{{ $handicraft->subcategory->category->name }}</td>
                    <td>{{ $handicraft->subcategory->name }}</td>
                    <td>{{ $handicraft->user->name }}</td>

                    <td>
                        <form method="POST" action="{{ route('delete.product', ['handicraft' => $handicraft]) }}">
                            <a href="{{ route('edit.product', ['handicraft' => $handicraft]) }}"
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
