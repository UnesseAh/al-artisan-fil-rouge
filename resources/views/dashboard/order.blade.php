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
    <h1>{{ $orders }}</h1>
    <div class="container pt-4">
{{--        <a href="" type="button" class="btn btn-primary mb-4">Add Product</a>--}}

        <table class="table align-middle mb-0 bg-white table-striped table-bordered ">
            <thead class="bg-dark text-light">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Subtotal</th>
                <th>Shipping Address</th>
                <th>Payment Method</th>
                <th>State</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id}}</td>
                    <td>{{ $order->user_id }}</td>
                    <td>{{ $order->subtotal }}</td>
                    <td>{{ $order->shipping_address }}</td>
                    <td>{{ $order->payment_method }}</td>
                    <td>
                        <span class="badge badge-primary rounded-pill d-inline">{{ $order->state_id }}</span>
                    </td>
                    <td>{{ $order->created_at->format('Y-m-d')}}</td>
                    <td>
                        <form method="POST" action="">
                            <a href=""
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
