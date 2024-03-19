<x-layout>
    <div class="row">
        <div class="col-md">
            <img src="{{ asset('images/' .$product['image']) }}" alt="" class="img-fluid">
        </div>
        <div class="col-md">
            <h1>
                {{ $product['name'] }}
            </h1>
            <p>
                {{ $product['price'] }}
            </p>
            <div style="font-size: 12px">
                {!! $product['description'] !!}
            </div>
        </div>
        <div class="col-md">
            <div class="d-grid gap-2 mt-5">
                <a href="#" class="btn btn-danger">Buy now</a>
                <a href="#" class="btn btn-outline-primary">Add to Cart</a>
            </div>
        </div>
    </div>
</x-layout>