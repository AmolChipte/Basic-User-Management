<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">
</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <h1 class="sitename">BASIC USER MANAGEMENT</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li>
                        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('users') }}" class="{{ request()->routeIs('users') ? 'active' : '' }}">List of Users</a>
                    </li>
                    <li>
                        <a href="{{ route('addUser') }}" class="{{ request()->routeIs('addUser') ? 'active' : '' }}">Add New User</a>
                    </li>

                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>

    <footer id="footer" class="footer dark-background">
        <div class="container copyright text-center">
            <p>© <span></span> <strong class="px-1 sitename">BASIC USER MANAGEMENT</strong> <span>This is a Dummy Project.</span></p>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js')}}"></script>
</body>

</html>