<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <title>@yield('title', 'Admin')</title>
</head>

<body>
    <div class="row g-0">
        <!-- sidebar -->
        <div class="p-3 col-4 fixed text-white bg-dark">
            <a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
                <span class="fs-4">Admin Panel</span>
            </a>
            <hr>
            <ul class="nav flex-column">
                <li><a href="{{ route('admin.home.index') }}"  class="nav-link text-white">Admin - Home</a></li>
                <li><a href="#"  class="nav-link text-white">Admin - Products</a></li>
                <li><a href="{{ route('home.AboutPage') }}"  class="mt-2 btn bg-primary text-white">Go back to the home page</a></li>
            </ul>
        </div>

        <div class="col content-grey">
            <nav class="p-3 shadow text-end">
                <span class="profile-font">Admin</span>
                <img class="img-profile rounded-circle" src="#">
            </nav>
            <div class="g-0 m-5">
                @yield('content')
            </div>
        </div>
    </div>
    <footer class="container-fluid" style="background-color: black">
        <div class="row">
            <div class="col-12 text-white-50 text-center align-self-center">
                &copy; Oranty Shinkai &nbsp; Author: Nguyễn Phúc Thịnh
                <div class="d-flex">
                    <a href="#top" class="btn scroll-to-top text-white "
                        style="background-color: black; width: 100%;" role="button" title="Scroll to Top">
                        <i class="fa fa-arrow-up text-white-50"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
