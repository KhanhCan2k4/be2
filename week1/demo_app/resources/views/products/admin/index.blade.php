<x-admin-layout>
    <h1>Product Management</h1>

    <a href="{{ route('products.create') }}" class="btn btn-success">Add new product</a>

    @if ($message = Session::get('success'))
        <span class="alert alert-success">{{ $message }}</span>
    @endif

    <table class="table">
        <thead class="fw-bold">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Price</td>
                <td colspan="2" class="text-center">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td>
                        <form onsubmit="return confirm('Do you want to remove this product?')" action="{{ route("products.destroy", $product['id']) }}" method="POST">
                            @csrf
                            @method("delete")
                            <button type="submit" class="btn btn-danger">
                                <i class="bi bi-trash3-fill"></i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route("products.edit", $product['id']) }}" class="btn btn-primary">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-admin-layout>
