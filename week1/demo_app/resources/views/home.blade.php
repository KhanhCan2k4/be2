<x-layout>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card" style="min-height: 690px">
                        <img src="{{ asset('images/'. $product['image']) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('products.show', [$product['id']] ) }}">
                                    {{ $product['name'] }}
                                </a>
                            </h5>
                            <p>
                                <strong>$</strong>{{ $product['price'] }}
                            </p>
                            <p class="card-text " style="font-size: 16px">
                                {!!  $product['description'] !!}
                            </p>

                            @foreach ($product->categories as $category)
                            <h5 class="badge text-bg-info">{{ $category['name'] }}</h5>
                            @endforeach
                            <hr>

                            <a class="btn btn-warning" href="{{ route('products.show', [$product['id']] ) }}">View</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>