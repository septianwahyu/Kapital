<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('template/css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        @yield('css')
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{url('/')}}">Recruitment Assistant</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                @if (auth()->user())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="d-flex align-items-center px-3" href="{{url('/profile')}}">Hello, {{ auth()->user()->name }}</a>
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                                <form action="{{ route('proseslogout') }}" method="POST">
                                    @csrf
                                    <button class="btn btn-link" type="submit">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <a href="{{ url('login') }}" class="btn btn-info">Login</a>
                @endif
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="{{url('/konsultasi')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-calculator"></i></div>
                                Konsultasi
                            </a>
                            <a class="nav-link" href="{{url('/penjelasan')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Penjelasan
                            </a>
                            <a class="nav-link" href="{{url('/data')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                                Data
                            </a>
                            <a class="nav-link" href="{{url('/howtouse')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                How to use
                            </a>
                            <a class="nav-link" href="{{url('/about')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-info-circle"></i></div>
                                About
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Recruitment Assistant 2022</div>
                            {{-- <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div> --}}
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('template/js/scripts.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('template/js/datatables-simple-demo.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        @yield('script')
    </body>
</html>
