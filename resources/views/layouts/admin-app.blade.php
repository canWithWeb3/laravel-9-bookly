<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- fontawesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ url('admin.css') }}">

  </head>
  <body>
    <div class="d-flex">
        <div class="sidebar d-lg-block d-none bg-success">
            <div class="sidebar-brand d-flex justify-content-center py-2 border-bottom">
                <a href="/" class="text-decoration-none"><h1 class="h1 text-white">Bookly</h1></a>
            </div>

            <div class="sidebar-menu pt-4">
                <div class="list-group">
                    <a href="/admin" class="list-group-item list-group-item-action active" aria-current="true">Admin</a>
                    <a href="/admin/kategoriler" class="list-group-item list-group-item-action">Kategoriler</a>
                    <a href="/admin/kitaplar" class="list-group-item list-group-item-action">Kitaplar</a>
                    <a href="/admin/yayimcilar" class="list-group-item list-group-item-action">Yayımcılar</a>
                    <a href="/admin/yazarlar" class="list-group-item list-group-item-action">Yazarlar</a>
                </div>
            </div>
        </div>

        <div class="w-100">
            <nav class="navbar navbar-expand-sm navbar-light bg-white">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle d-flex align-items-center gap-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img width="28" src="{{ url('image/author-1.jpg') }}" alt="" class="rounded-circle">
                                    <span>{{ Auth::user()->name }}</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Profilim</a></li>
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
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <main style="min-height:93.8vh;" class="bg-light px-3 py-4">
                <div class="card">
                    <div class="card-body">
                        @yield("content")
                    </div>
                </div>
            </main>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
