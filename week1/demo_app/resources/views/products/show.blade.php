<x-layout>
    <div class="row">
        <div class="col-md">
            <img src="{{ asset('images/' . $product['image']) }}" alt="" class="img-fluid">
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
            <div class="d-grid gap-2 mt-5" style="font-size: 12px">
                @if ($message = Session::get('success'))
                    {{-- <span class="alert alert-success">{{ $message }}</span> --}}
                @endif

                @error('rate')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror

                @error('content')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror

                @foreach ($product->comments as $comment)
                    <span><b>User: </b><i>{{ $comment['user']['name'] ?? 'unknown' }}</i></span>
                    <span class="text-warning">
                        @for ($i = 1; $i <= $comment['rate']; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                        @endfor

                        @for ($i = $comment['rate'] + 1; $i <= 5; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-star" viewBox="0 0 16 16">
                                <path
                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                            </svg>
                        @endfor
                    </span>
                    <form onsubmit="return confirm('Do you want to remove?')"
                        action="{{ Route('comments.destroy', $comment['id']) }}" method="POST">
                        @csrf
                        @method('delete')
                        @if ($comment['user']['id'] == $user_id)
                            <input type="hidden" name="user_id" value="{{ $comment['user']['id'] }}">
                            <button type="submit" class="btn btn-outline-danger">Remove</button>
                        @endif
                    </form>
                    <p>{{ $comment['content'] }}</p>
                @endforeach
            </div>

            <div class="d-grid gap-2 mt-5" style="font-size: 12px">
                <form action="{{ Route('comments.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="productId" value="{{ $product['id'] }}">
                    <div class="mb-3">
                        <label for="rate">Rate:</label>
                        <input type="number" min="1" max="5" step="1" class="form-control"
                            name="rate">
                    </div>
                    <div class="mb-3">
                        <label for="content">Content:</label>
                        <textarea class="form-control" name="content"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="btn-submit">Submit</label>
                        <input type="submit" class="form-control btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
