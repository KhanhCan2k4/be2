<x-admin-layout>
    <h1>Add new Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
            @error('name')
                <div class="mt-1 alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" min="0" step="0.01" class="form-control" id="price" name="price">
            @error('price')
                <div class="mt-1 alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea rows="4" type="text" class="form-control" id="description" name="description"></textarea>
            @error('description')
                <div class="mt-1 alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="text" class="form-control" id="photo" name="photo">
            @error('photo')
                <div class="mt-1 alert alert-danger">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <div class="mb-3 ">
            <label for="cates" class="form-label">Categories</label>
            <br />
            @foreach ($categories as $category)
                <span id="cates" class="btn btn-info">
                    <input type="checkbox" id="{{ 'cate' . $category['id'] }}" name="categories[]" class="btn"
                        value="{{ $category['id'] }}">
                    <label for="{{ 'cate' . $category['id'] }}" class="form-label">{{ $category['name'] }}</label>
                </span>
                &emsp;
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary">ADD</button>
    </form>
</x-admin-layout>
