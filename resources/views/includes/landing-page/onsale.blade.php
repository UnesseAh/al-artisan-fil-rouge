<div class="mt-5" style="outline: 2px solid red">
    <h3 class="mb-4 text-center">On Sale</h3>
    <div class="row row-cols-1 row-cols-md-4 g-4" >
        @foreach($handicrafts as $handicraft)
            <a href="{{ route('show.product', $handicraft) }}" style="outline: 2px solid green">
                <div class="col">
                    <div class="card">
                        <img src="{{asset('image/'.$handicraft->image)}}" class="card-img-top" alt="Hollywood Sign on The Hill"/>
                        <div class="card-body">
                            <h5 class="card-title">{{ $handicraft->title }}</h5>
                            <p class="card-text">
                                {{$handicraft->price}}
                            </p>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
