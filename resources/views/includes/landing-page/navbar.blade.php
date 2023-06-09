{{--<nav class="navbar navbar-expand-lg bg-dark navbar-dark" >--}}
{{--    <!-- Container wrapper -->--}}
{{--    <div class="container">--}}
{{--        <!-- Navbar brand -->--}}
{{--        <a class="navbar-brand me-2" href="https://mdbgo.com/">--}}
{{--            <img src="{{ asset('image/logo/icon/al-artisan-icon-white.png') }}" height="36" alt="MDB Logo" loading="lazy" style="margin-top: -1px;"/>--}}
{{--        </a>--}}

{{--        <!-- Toggle button -->--}}
{{--        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <i class="fas fa-bars"></i>--}}
{{--        </button>--}}

{{--        <!-- Collapsible wrapper -->--}}
{{--        <div class="collapse navbar-collapse" id="navbarButtonsExample">--}}
{{--            <!-- Left links -->--}}
{{--            <ul class="navbar-nav me-auto mb-2 mb-lg-0">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Artisans</a>--}}
{{--                </li>--}}
{{--                <!-- Navbar dropdown -->--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">Categories</a>--}}
{{--                    <!-- Dropdown menu -->--}}
{{--                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="#">Lighting</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="#">Rugs</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <!-- Navbar dropdown -->--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">Info</a>--}}
{{--                    <!-- Dropdown menu -->--}}
{{--                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="#">About Us</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="#">FAQ</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a class="dropdown-item" href="#">Contact</a>--}}
{{--                        </li>--}}

{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item dropdown">--}}
{{--                    <a href="{{ route('cart.show') }}">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">--}}
{{--                            <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>--}}
{{--                        </svg>--}}
{{--                        Cart</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <!-- Left links -->--}}
{{--            <div class="d-flex align-items-center">--}}
{{--                @auth--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">--}}
{{--                            <img src="{{ asset('image/youness-ahasla.png') }}" class="rounded-circle" height="22" alt="Avatar" loading="lazy"/>--}}
{{--                        </a>--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a class="dropdown-item" href="{{ route('profile.page') }}">My profile</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                @else--}}
{{--                    <li>--}}
{{--                        <a href="{{ route('login.page') }}" type="button" class="btn btn-link px-3 me-2">--}}
{{--                            Login--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="{{ route('register.page') }}" type="button" class="btn btn-primary me-3">--}}
{{--                            Register--}}
{{--                        </a>--}}
{{--                    </li>--}}

{{--                @endauth--}}


{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Collapsible wrapper -->--}}
{{--    </div>--}}
{{--    <!-- Container wrapper -->--}}
{{--</nav>--}}

<!-- Navigation -->
<header class="row container">
    <a href="#" class="logo row" >
        <img src="{{asset('image/logo/icon/al-artisan-icon-dark.png')}}" alt="">
        <h1>AL Artisan</h1>
    </a>
    <div class="toggleMenu" onclick="toggleMenu();"></div>
    <nav class="navigation row">
        <ul class="row">
            <li><a href="#">Artisans</a></li>
            <li><a href="#">Categoires</a></li>
            <li>
                <a href="{{ route('cart.show') }}">
                    Cart
{{--                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">--}}
{{--                        <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>--}}
{{--                    </svg>--}}
                </a>
            </li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact</a></li>
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink">
                    <img src="{{ asset('image/youness-ahasla.png') }}" class="rounded-circle" height="22" alt="Avatar" loading="lazy"/>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="{{ route('profile.page') }}">My profile</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                    </li>
                </ul>
            </li>
            @else
            <li>
                <a href="{{ route('login.page') }}" type="button">
                    Login
                </a>
            </li>
            <li>
                <a href="{{ route('register.page') }}">Sign up</a>
                @endauth
            </li>
        </ul>
    </nav>
</header>

<style>
    .nav-item {
        position: relative;
    }

    .dropdown-menu {
        position: absolute;
        z-index: 1;
        display: none;
        margin-top: 8px;
        padding: 0;
        background-color: black;
        color: black;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .dropdown-menu li {
        list-style: none;
    }

    .nav-item:hover .dropdown-menu {
        display: block;
    }

    .dropdown-item {
        display: block;
        padding: 8px 16px;
        text-decoration: none;
        color: red;
        font-size: 14px;
        font-weight: 500;
        text-align: left;
    }

    .dropdown-item:hover {
        background-color: #f8f9fa;
        color: #212529;
    }
</style>
<!-- End Navigation -->
