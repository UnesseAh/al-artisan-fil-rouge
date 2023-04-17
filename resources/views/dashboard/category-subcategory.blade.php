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
            @if(session('added'))
                <div class="d-flex align-items-center alert alert-success p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                        <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                        <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                    </svg>
                    <span class="px-2">{{ session('added') }}</span>

                </div>
            @elseif(session('deleted'))
                <div class="d-flex align-items-center alert alert-danger p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-check2-circle" viewBox="0 0 16 16">
                        <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                        <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                    </svg>
                    <span class="px-2">{{ session('deleted') }}</span>
                </div>
            @elseif(session('updated'))
                <div class="d-flex align-items-center alert alert-warning p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-check2-circle" viewBox="0 0 16 16">
                        <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                        <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                    </svg>
                    <span class="px-2">{{ session('updated') }}</span>
                </div>
            @endif
            <p class="lead">
                Create Category :
            </p>
            <div >
                <div class="note note-primary mb-3">
                    <strong>Category :</strong>
                </div>
                <form method="Post" action="{{ route('store.category') }}" class="pb-3">
                    @csrf
                    <div class="input-group" >
                        <div class="form-outline">
                            <input name="name" type="search" id="form1" class="form-control" />
                            <label class="form-label" for="form1">Category</label>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Add
                        </button>
                    </div>
                    @if($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
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
                                    <form method="post" action="{{ route('delete.category', ['category'=>$category]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('edit.category', ['category' => $category]) }}" class="btn btn-outline-success" data-mdb-ripple-color="dark">
                                            Edit
                                        </a>
                                        <button type="submit"  class="btn btn-outline-danger" data-mdb-ripple-color="dark">delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <span class="d-block p-1 bg-primary rounded text-white  mt-4 mb-4"></span>

        <div>
            <div class="mb-3">
                <p class="lead">
                    Create Subcategory :
                </p>
                <form method="POST" action="{{ route('store.subcategory') }}">
                    @csrf
                <div class="note note-success mb-3">
                    <strong>Select Category :</strong>
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
                            <strong>Add Subcategory :</strong>
                        </div>
                        <div class="input-group" >
                            <div class="form-outline">
                                <input name="name" type="search" id="subcategory" class="form-control" />
                                <label class="form-label" for="subcategory"></label>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Add
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
                <div>
                    <p><a class="btn btn-outline-info btn-block" href="{{ route('dashboard') }}">Back to Dashboard</a></p>
                </div>
            </div>
        </div>


    </div>
</main>
<!--Main layout-->

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>
</html>

