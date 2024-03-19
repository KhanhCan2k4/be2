<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Document' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{ $style ?? "" }}
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link phone-active-" aria-current="page" href="{{ Route('home') }}">Home</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="{{ Route('contact') }}">Contact</a>
                </li>

                @foreach($categories as $category)
                <li class="nav-item">
                    <a class="nav-link {{ isset($activeLink) ? (($activeLink."" == $category->id."") ? "active" : "") :"" }}" href="{{ Route("categories.show", $category->id) }}">{{ $category['name'] }}</a>
                </li>
                @endforeach
                
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
    <h1>{{ $slot }}</h1>
</body>
</html>
