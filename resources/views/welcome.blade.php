<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Brands</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                </ul>
                @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search  By Brand"
                        aria-label="Search  By Brand">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    @yield('content')
    <div class="container mt-5">
        <div class="col-sm-9">
            <div class="col-sm-2" style="float: left;">
                <h1>Brands</h1>
            </div>
            <div class="col-sm-4">
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item" style="border: none!important;">A</li>
                    <li class="list-group-item" style="border: none!important;">B</li>
                    <li class="list-group-item" style="border: none!important;">C</li>
                    <li class="list-group-item" style="border: none!important;">D</li>
                    <li class="list-group-item" style="border: none!important;">E</li>
                    <li class="list-group-item" style="border: none!important;">F</li>
                    <li class="list-group-item" style="border: none!important;">G</li>
                    <li class="list-group-item" style="border: none!important;">H</li>
                    <li class="list-group-item" style="border: none!important;">I</li>
                    <li class="list-group-item" style="border: none!important;">J</li>
                    <li class="list-group-item" style="border: none!important;">K</li>
                    <li class="list-group-item" style="border: none!important;">L</li>
                    <li class="list-group-item" style="border: none!important;">M</li>
                    <li class="list-group-item" style="border: none!important;">N</li>
                    <li class="list-group-item" style="border: none!important;">O</li>
                    <li class="list-group-item" style="border: none!important;">P</li>
                    <li class="list-group-item" style="border: none!important;">Q</li>
                    <li class="list-group-item" style="border: none!important;">R</li>
                    <li class="list-group-item" style="border: none!important;">S</li>
                    <li class="list-group-item" style="border: none!important;">T</li>
                    <li class="list-group-item" style="border: none!important;">U</li>
                    <li class="list-group-item" style="border: none!important;">V</li>
                    <li class="list-group-item" style="border: none!important;">W</li>
                    <li class="list-group-item" style="border: none!important;">X</li>
                    <li class="list-group-item" style="border: none!important;">Y</li>
                    <li class="list-group-item" style="border: none!important;">Z</li>
                    <li class="list-group-item" style="border: none!important;">#</li>
                </ul>
            </div>
        </div>
    </div>

    <section>
        <div class="container py-5">

            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(1).webp"
                            class="w-100" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                                <div class="d-flex justify-content-start align-items-start h-100">
                                    <h5><span class="badge bg-body-tertiary pt-2 ms-3 mt-3 text-dark"></span></h5>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(2).webp"
                            class="w-100" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                                <div class="d-flex justify-content-start align-items-start h-100">
                                    <h5><span class="badge bg-body-tertiary pt-2 ms-3 mt-3 text-dark"></span></h5>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(3).webp"
                            class="w-100" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                                <div class="d-flex justify-content-start align-items-start h-100">
                                    <h5><span class="badge bg-body-tertiary pt-2 ms-3 mt-3 text-dark"></span></h5>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="bg-image hover-zoom ripple shadow-1-strong rounded ripple-surface">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(4).webp"
                            class="w-100" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                                <div class="d-flex justify-content-start align-items-start h-100">
                                    <h5><span class="badge bg-body-tertiary pt-2 ms-3 mt-3 text-dark"></span></h5>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(5).webp"
                            class="w-100" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                                <div class="d-flex justify-content-start align-items-start h-100">
                                    <h5><span class="badge bg-body-tertiary pt-2 ms-3 mt-3 text-dark"></span></h5>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(6).webp"
                            class="w-100" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                                <div class="d-flex justify-content-start align-items-start h-100">
                                    <h5><span class="badge bg-body-tertiary pt-2 ms-3 mt-3 text-dark"></span></h5>
                                </div>
                            </div>
                            <div class="hover-overlay">
                                <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
