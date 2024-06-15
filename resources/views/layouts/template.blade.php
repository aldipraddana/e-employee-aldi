<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $activeMenu.' - '.config('app.name') }}</title>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
    @yield('plugin')
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#"><b>E-Employee</b></a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">E-Employee Aldi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link {{ $activeMenu == "Monitoring Karyawan" ? "active" : "" }} mx-lg-2" href="/">Monitoring Karyawan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $activeMenu == "Input Karyawan" ? "active" : "" }} mx-lg-2" href="{{ route('input') }}">Input Karyawan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $activeMenu == "Bantuan" ? "active" : "" }} mx-lg-2" href="{{ route('help') }}">Bantuan</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="#" class="logout-button">Logout</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    {{-- section --}}
    <section class="main-section">
        @yield('section')
    </section>

    {{-- footer --}}
    <footer class="py-2">
        <div class="container-fluid">
            © 2024 <b>E-Employee</b> | by : Aldi Pradana
        </div>
    </footer>
</body>

</html>
