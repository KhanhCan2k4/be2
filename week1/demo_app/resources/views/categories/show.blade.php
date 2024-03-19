<x-layout>
    <x:slot:activeLink>
        {{ $activeLink }}
    </x:slot:activeLink>

    <div class="container">
        <h1>{{ $category->name }}</h1>
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
                            @php 
                                $product['description'] = trim(strip_tags($product['description']));
                                
                                if (strlen($product['description'] ) > 100) {
                                    # code...
                                    $product['description']  = mb_substr($product['description'] , 0, mb_strpos($product['description'] , ' ', 100));
                                }
                            @endphp
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

        <div>
            {{ $products->links() }}
        </div>
    </div>
</x-layout>