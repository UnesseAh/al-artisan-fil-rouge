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

<main style="margin-top: 58px;">
    <div class="container pt-4 pb-2">
        <div>
            <div class="d-flex justify-content-start align-items-center" >
                <div class="note note-primary mb-3">
                    <strong>Category :</strong>
                </div>
                <form method="Post" action="{{ route('store.category') }}" class="pb-3">
                    @csrf
                    <div class="input-group" >
                        <div class="form-outline">
                            <input name="name" type="search" id="form1" class="form-control" />
                            <label class="form-label" for="form1"></label>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Add New Category
                        </button>
                    </div>
                </form>
            </div>

            <div>
                <table class="table align-middle mb-0 bg-white table-striped table-bordered ">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <form method="post" action="{{ route('delete.category', ['id'=>$category->id]) }}">
                                        <a href="{{ route('edit.category', ['id'=>$category->id]) }}" class="btn btn-outline-success" data-mdb-ripple-color="dark">
                                            Edit
                                        </a>

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"  class="btn btn-outline-danger" data-mdb-ripple-color="dark">delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div>
            <div class="mb-3">
                <form method="POST" action="{{ route('store.subcategory') }}">
                    @csrf
                <div class="note note-success mb-3">
                    <strong>Choose Category :</strong>
                </div>
                <div>
                    <select  id="subcategory" name="category_id" class="form-select">
                        <option selected disabled>Choose a category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                    <div class="pt-2">
                        <div class="note note-success mb-3">
                            <strong>Subcategory :</strong>
                        </div>
                        <div class="input-group" >
                            <div class="form-outline">
                                <input name="name" type="search" id="subcategory" class="form-control" />
                                <label class="form-label" for="subcategory"></label>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Add New Subcategory
                            </button>
                        </div>
                    </div>


                </form>
            </div>



            <div>
                <table class="table align-middle mb-0 bg-white table-striped table-bordered ">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($subcategories as $subcategory)
                        <tr>
                            <td>{{ $subcategory->id }}</td>
                            <td>{{ $subcategory->name }}</td>
                            <td>
                                <form method="post" action="{{ route('delete.subcategory', ['subcategory'=>$subcategory->id]) }}">
                                <a href="{{ route('edit.subcategory', ['id'=>$subcategory->id]) }}"  class="btn btn-outline-success" data-mdb-ripple-color="dark">
                                    Edit
                                </a>

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" data-mdb-ripple-color="dark">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <h2><a href="{{ route('dashboard') }}">Back</a></h2>
            </div>
        </div>


    </div>
</main>
<!--Main layout-->

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>
</html>

