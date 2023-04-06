@include('includes.dashboard.head')


<body>
@include('includes.dashboard.navbar')

    <a type="submit" class="btn btn-primary" href="{{ route('create.product') }}">Add Product</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">image</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">price</th>
            <th scope="col">category</th>
            <th scope="col">action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th>1</th>
            <td>image.jpg</td>
            <td>this is a title</td>
            <td>this is a not very long description</td>
            <td>69.69</td>
            <td>zarbiya</td>
            <td>
                <button type="button" class="btn btn-primary">View</button>
                <button  type="button" class="btn btn-success">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr><tr>
            <th>1</th>
            <td>image.jpg</td>
            <td>this is a title</td>
            <td>this is a not very long description</td>
            <td>69.69</td>
            <td>zarbiya</td>
            <td>
                <button type="button" class="btn btn-primary">View</button>
                <button  type="button" class="btn btn-success">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        </tbody>
    </table>
@include('includes.dashboard.sidebar')


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</body>
</html>


{{--@if(session('message'))--}}
{{--    <span>{{ session('message') }}</span>--}}
{{--@endif--}}


{{--<p><a href="{{ route('forget.password.show') }}">Change password</a></p>--}}
