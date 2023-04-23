@include('includes.dashboard.head')

<section class="h-150 h-custom" style="background-color: white;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
                <div class="card rounded-3">
                    <img src="{{ asset('image/create-product-cover.jpg') }}"
                         class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                         alt="Sample photo">
                    <div class="card-body pb-3">
                        <form method="POST" action="{{route('store.product')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-outline mb-2">
                                <input name="title" value="{{ old('title') }}" type="text" id="title" class="form-control" />
                                <label class="form-label" for="title">Title</label>
                            </div>
                            @if($errors->has('title'))
                                <p class="text-danger small mb-2">{{ $errors->first('title') }}</p>
                            @endif

                            <!-- Description input -->
                            <div class="form-outline mb-2">
                                <textarea name="description"  class="form-control" id="description" rows="4">{{ old('description') }}</textarea>
                                <label class="form-label" for="description">Description</label>
                            </div>
                            @if($errors->has('description'))
                                <p class="text-danger small mb-2">{{ $errors->first('description') }}</p>
                            @endif


{{--                            <div class="mb-2">--}}
{{--                                <select id="category" name="category" class="form-select">--}}
{{--                                    <option selected disabled>Choose category</option>--}}
{{--                                    @foreach($categories as $category)--}}
{{--                                        <option value="{{$category->id}}">{{$category->name}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            @if($errors->has('category'))--}}
{{--                                <p class="text-danger small mb-2">{{ $errors->first('category') }}</p>--}}
{{--                            @endif--}}




                            <div class="mb-2">
                                <select id="subcategory" name="subcategory_id" class="form-select">
                                    <option selected disabled>Choose category</option>
                                    @foreach($subcategories as $subcategory)
                                        <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if($errors->has('subcategory_id'))
                                 <p class="text-danger small mb-2">{{ $errors->first('subcategory_id') }}</p>
                            @endif

                            <div class="form-outline mb-2">
                                    <input name="price" value="{{ old('price') }}" min="1" max="9999" type="number" id="price" class="form-control" placeholder="price">
                                    <label for="price" class="form-label">Price</label>
                            </div>
                            @if($errors->has('price'))
                                <p class="text-danger small mb-2">{{ $errors->first('price') }}</p>
                            @endif

                            <div class="form-outline mb-2">
                                    <input name="stock" value="{{ old('stock') }}" min="0" maxlength="1000" type="number" id="stock" class="form-control" placeholder="stock">
                                    <label for="stock" class="form-label">Stock</label>
                            </div>
                            @if($errors->has('stock'))
                                <p class="text-danger small mb-2">{{ $errors->first('stock') }}</p>
                            @endif


                            <div class="form-floating mb-2">
                                <input type="file" name="image" class="form-control" placeholder="image">
                                <label for="image" class="form-label">Image</label>
                            </div>
                            @if($errors->has('image'))
                                <p class="text-danger small mb-2">{{ $errors->first('image') }}</p>
                            @endif
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Add Handicraft
                            </button>
                        </form>
                        <div>
                            <p><a class="btn btn-outline-info btn-block" href="{{ route('dashboard') }}">Back to Dashboard</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
