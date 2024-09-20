<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Cendana Project</title>

    {{-- Bootsrap Css Import --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            height: 100vh;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/kategori') }}">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/item') }}">Items</a>
                    </li>
                </ul>
                <a class="nav-link btn btn-primary text-white" href="{{ url('/') }}">SignOut</a>

            </div>
        </div>
    </nav>

    @yield('content')
</body>

</html>
