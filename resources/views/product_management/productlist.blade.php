{{--
@section('content')

    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">All Products</div>
            <div class="card-body" id="AllProducts">

                @forelse ($products as $item)
                <div class="media mb-4">
                    <img src="/storage/app/public/images/{{$item->product_image}}" alt="" class="d-flex align-self-start rounded mr-3" height="64">
                    <div class="media-body">
                        <h5 class="mt-0 font-16">{{$item->product_name}}</h5>
                        <div class="btn-group">
                            <button class="btn btn-sm btn-primary">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
                @empty
                    <code>No product found</code>
                @endforelse

            </div>
        </div>

@endsection --}}


@forelse ($products as $item)
                <div class="media mb-4">
                    <img src="/storage/files/{{$item->product_image}}" alt="" class="d-flex align-self-start rounded mr-3" height="90">
                    <div class="media-body">
                        <h4 class="mt-0 font-16">{{$item->product_name}}</h4>
                        <h4 class="mt-0 font-16">Rs.{{$item->product_price}}/=</h4>
                        <h4 class="mt-0 font-16">{{$item->product_desc}}</h4>

                    </div>
                </div>
                @empty
                    <code>No product found</code>
                @endforelse









{{-- {{ $products }} --}}


