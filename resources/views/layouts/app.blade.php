<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- bootstrap min css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- fontawesome min css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- csses -->
    <link rel="stylesheet" href="{{ url('style.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

    <!-- header start -->
    <header>
      <div class="header-up">
        <nav class="container py-3">
          <div class="d-flex justify-content-between align-items-center">
            <a href="/home" class="text-decoration-none"><h1 class="h3 text-light-dark"><i class="fa-solid fa-book text-success"></i> Bookly</h1></a>

            <form id="headerSearchForm" class="input-group w-50">
              <input type="text" class="form-control" placeholder="Search a book" id="header-search" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
              <button type="submit" class="input-group-text bg-white" id="basic-addon2"><i class="fas fa-search"></i></button>
            </form>

            <div class="">
              <ul class="header-up-icons d-flex gap-3 text-light-dark fs-4 list-unstyled mb-0">
                <li class="nav-item me-3">
                  <a class="nav-link" href="/admin"><i class="fa-solid fa-user-gear"></i></a>
                </li>
                <li class="nav-item d-md-none d-inline-block">
                  <a class="nav-link" href="#"> <i onclick="toggleHeaderSearchBox()" class="fas fa-search"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-solid fa-heart"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                </li>
                <li class="nav-item  m-0 p-0">
                  <a class="nav-link m-0 p-0" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    @guest
                        <i onclick="openLoginCard()" class="fas fa-user"></i>
                    @else
                        <span style="font-size: 18px;">
                            {{ Auth::user()->name }}
                        </span>
                    @endguest
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        @guest
                            @if (Route::has('login'))
                                <li>
                                    <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li>
                                    <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>

      <div class="header-down bg-success d-sm-block d-none">
        <div class="d-flex justify-content-center gap-4 py-2 flex-wrap">
          <a href="/home" class="text-decoration-none fs-5 text-white">Home</a>
          <a href="#home" class="text-decoration-none fs-5 text-white">Featured</a>
          <a href="#home" class="text-decoration-none fs-5 text-white">Arrivals</a>
          <a href="#home" class="text-decoration-none fs-5 text-white">Rewiews</a>
          <a href="#home" class="text-decoration-none fs-5 text-white">Blogs</a>
        </div>
      </div>
      <!-- login card finish -->
    </header>
    <!-- header finish -->


    <!-- main start -->
    <main style="min-height: 53vh;">
        @yield('content')
    </main>
    <!-- main finish -->

    <!-- footer start -->
    <footer class="container">
      <div class="row text-lg-start text-center mb-3">

        <div class="col-lg-3 col-md-6">
          <h1 class="h3 mb-3">Our Locations</h1>

          <ul class="list-unstyled">
            <li style="font-size: 18px;"><a href="" class="text-decoration-none text-gray"><i class="fa-solid fa-location-dot"></i> <span>India</span></a></li>
            <li style="font-size: 18px;"><a href="" class="text-decoration-none text-gray"><i class="fa-solid fa-location-dot"></i> <span>USA</span></a></li>
            <li style="font-size: 18px;"><a href="" class="text-decoration-none text-gray"><i class="fa-solid fa-location-dot"></i> <span>Russia</span></a></li>
            <li style="font-size: 18px;"><a href="" class="text-decoration-none text-gray"><i class="fa-solid fa-location-dot"></i> <span>France</span></a></li>
            <li style="font-size: 18px;"><a href="" class="text-decoration-none text-gray"><i class="fa-solid fa-location-dot"></i> <span>Japan</span></a></li>
            <li style="font-size: 18px;"><a href="" class="text-decoration-none text-gray"><i class="fa-solid fa-location-dot"></i> <span>Africa</span></a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6">
          <h1 class="h3 mb-3">Quick Links</h1>

          <ul class="list-unstyled">
            <li style="font-size: 18px;"><a href="" class="text-decoration-none text-gray"><i class="fa-solid fa-arrow-right"></i> <span>Home</span></a></li>
            <li style="font-size: 18px;"><a href="" class="text-decoration-none text-gray"><i class="fa-solid fa-arrow-right"></i> <span>Featured</span></a></li>
            <li style="font-size: 18px;"><a href="" class="text-decoration-none text-gray"><i class="fa-solid fa-arrow-right"></i> <span>Arrivals</span></a></li>
            <li style="font-size: 18px;"><a href="" class="text-decoration-none text-gray"><i class="fa-solid fa-arrow-right"></i> <span>Reviews</span></a></li>
            <li style="font-size: 18px;"><a href="" class="text-decoration-none text-gray"><i class="fa-solid fa-arrow-right"></i> <span>Blogs</span></a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6">
          <h1 class="h3 mb-3">Extra Links</h1>

          <ul class="list-unstyled">
            <li style="font-size: 18px;"><a href="" class="text-decoration-none text-gray"><i class="fa-solid fa-arrow-right"></i> <span>Account Info</span></a></li>
            <li style="font-size: 18px;"><a href="" class="text-decoration-none text-gray"><i class="fa-solid fa-arrow-right"></i> <span>Ordered Items</span></a></li>
            <li style="font-size: 18px;"><a href="" class="text-decoration-none text-gray"><i class="fa-solid fa-arrow-right"></i> <span>Privacy Policy</span></a></li>
            <li style="font-size: 18px;"><a href="" class="text-decoration-none text-gray"><i class="fa-solid fa-arrow-right"></i> <span>Payment Method</span></a></li>
            <li style="font-size: 18px;"><a href="" class="text-decoration-none text-gray"><i class="fa-solid fa-arrow-right"></i> <span>Our Services</span></a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6">
          <h1 class="h3 mb-3">Contact Info</h1>

          <ul class="list-unstyled">
            <li style="font-size: 18px;"><a href="" class="text-decoration-none text-gray"><i class="fa-solid fa-phone-flip"></i> <span>0 532 488 37 72</span></a></li>
            <li style="font-size: 16px;"><a href="" class="text-decoration-none text-gray"><i class="fa-solid fa-envelope"></i> <span>canoguzorhan066@gmail.com</span></a></li>
          </ul>
        </div>
      </div>

      <div class="d-flex gap-3 justify-content-center flex-wrap mb-5">
        <button style="width:40px; height:40px;" class="btn btn-success rounded-circle d-flex align-items-center justify-content-center"><i class="fa-brands fa-facebook-f fs-5"></i></button>
        <button style="width:40px; height:40px;" class="btn btn-success rounded-circle d-flex align-items-center justify-content-center"><i class="fa-brands fa-twitter fs-5"></i></button>
        <button style="width:40px; height:40px;" class="btn btn-success rounded-circle d-flex align-items-center justify-content-center"><i class="fa-brands fa-instagram fs-5"></i></button>
        <button style="width:40px; height:40px;" class="btn btn-success rounded-circle d-flex align-items-center justify-content-center"><i class="fa-brands fa-linkedin fs-5"></i></button>
        <button style="width:40px; height:40px;" class="btn btn-success rounded-circle d-flex align-items-center justify-content-center"><i class="fa-brands fa-pinterest-p fs-5"></i></button>
      </div>

    </footer>
    <!-- footer finish -->

    <script src="{{ url('script.js') }}"></script>

</body>
</html>
