<x-layout>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('/images/'. $product['image']) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ Route("products.show", $product['id'])  }}">
                                    {{ $product['name'] }}
                                </a>
                            </h5>
                            <p>
                                {{ $product['price'] }}
                            </p>
                            <p class="card-text " style="font-size: 16px">
                                {{  $product['description'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>