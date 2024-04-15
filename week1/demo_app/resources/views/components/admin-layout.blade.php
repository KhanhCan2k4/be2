<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="row" style="min-height: 800px;">
        <div class="col-md-3">
            <div class="d-flex flex-column p-3 text-white bg-dark" style="width: 100%; height: 100%;">
                <a href="/"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-4">Admin</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="{{ Route('home.admin') }}"
                            class="nav-link text-white {{ request()->is('*admin') ? 'active' : '' }}"
                            aria-current="page">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#home"></use>
                            </svg>
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="{{ Route('products.index') }}"
                            class="nav-link text-white {{ request()->is('*products*') ? 'active' : '' }}">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#grid"></use>
                            </svg>
                            Products
                        </a>
                    </li>

                    <li>
                        <a href="{{ Route('categories.index') }}"
                            class="nav-link text-white {{ request()->is('*categories*') ? 'active' : '' }}">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#grid"></use>
                            </svg>
                            Categories
                        </a>
                    </li>

                </ul>
                <hr>
            </div>
        </div>

        <div class="col-md-9">
            {{ $slot ?? '' }}
        </div>
    </div>
</body>

</html>
