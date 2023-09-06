<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Bao gồm CSS của Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title', 'Admin')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('admin.home.index') }}">Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('admin.home.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.store.index') }}">Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">View client</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Go back to the home
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li> --}}
                </ul>
                <form action="{{ route('search') }}" method="get">
                    <input type="text" name="SearchValue" id="SearchInput">
                    <button type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>

                {{-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> --}}
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top: 45px">
        @yield('content')
    </div>

    {{-- <div class="d-flex">
        <a href="#top" class="btn scroll-to-top text-white "
            style="background-color: black; width: 50px;" role="button" title="Scroll to Top">
            <i class="fa fa-arrow-up text-white-50"></i>
        </a>
    </div>
    <footer class="container-fluid" style="background-color: black">
    </footer>
</body> --}}
    <style>
        .custom-container {
            position: relative;
            --size-button: 40px;
            color: white;
        }

        .custom-input {
            padding-left: var(--size-button);
            height: var(--size-button);
            font-size: 15px;
            border: none;
            color: #fff;
            outline: none;
            width: var(--size-button);
            transition: all ease 0.3s;
            background-color: #191A1E;
            box-shadow: 1.5px 1.5px 3px #0e0e0e, -1.5px -1.5px 3px rgb(95 94 94 / 25%), inset 0px 0px 0px #0e0e0e, inset 0px -0px 0px #5f5e5e;
            border-radius: 50px;
            cursor: pointer;
        }

        .custom-input:focus,
        .custom-input:not(:invalid) {
            width: 200px;
            cursor: text;
            box-shadow: 0px 0px 0px #0e0e0e, 0px 0px 0px rgb(95 94 94 / 25%), inset 1.5px 1.5px 3px #0e0e0e, inset -1.5px -1.5px 3px #5f5e5e;
        }

        .custom-input:focus+.custom-icon,
        .custom-input:not(:invalid)+.custom-icon {
            pointer-events: all;
            cursor: pointer;
        }

        .custom-container .custom-icon {
            position: absolute;
            width: var(--size-button);
            height: var(--size-button);
            top: 0;
            left: 0;
            padding: 8px;
            pointer-events: none;
        }

        .custom-container .custom-icon svg {
            width: 100%;
            height: 100%;
        }
    </style>

</html>
