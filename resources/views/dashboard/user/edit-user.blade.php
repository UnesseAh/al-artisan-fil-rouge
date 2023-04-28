

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
                        <form method="POST" action="{{ route('update.user', $user) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-outline mb-2">
                                <input name="name" value="{{ $user->name }}" type="text" id="name" class="form-control" />
                                <label class="form-label" for="name">Customer</label>
                                <p>{{ $user->role_id }}</p>
                            </div>
                            @if($errors->has('name'))
                                <p class="text-danger small mb-2">{{ $errors->first('name') }}</p>
                            @endif

                            <div class="form-outline mb-2">
                                <input name="email" value="{{ $user->email }}" type="text" id="email" class="form-control" />
                                <label class="form-label" for="email">Email</label>
                            </div>
                            @if($errors->has('shipping_address'))
                                <p class="text-danger small mb-2">{{ $errors->first('shipping_address') }}</p>
                            @endif


                            <div class="mb-2">
                                <select id="state" name="state_id" class="form-select">
                                    <option selected disabled>Choose role</option>
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}" @if($role->id === $user->role_id) selected @endif >{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if($errors->has('role_id'))
                                <p class="text-danger small mb-2">{{ $errors->first('role_id') }}</p>
                            @endif

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Update Order
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
