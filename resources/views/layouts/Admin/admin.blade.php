<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('src/img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('src/css/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/r-2.2.9/datatables.min.css"/>
    <script type="module" src="{{ asset('src/js/core.js') }}"></script>
    <link rel="modulepreload" href="{{ asset('src/js/swiper.bundle.min.js') }}">
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    @yield('page')
    <menu class="fixed container menu" id="home">
        <nav class="sidenav-active main-menu animate__animated animate__bounceInDown " id="menu">
            <label class="show-menu" for="show-menu">
                <div class="topbar"><span class="logo menu-logo mobile-logo dark-logo"><a href="index.html"><img
                                src="{{ asset('src/img/logo.png') }}" alt="#{logoMenu}" /></a></span>
                    <div class="lines"></div>
                </div>
            </label>
            <input id="show-menu" type="checkbox" />
            <ul id="menu">
                <li class="undefined logo menu-logo "><a href="index.html"><img src="{{ asset('src/img/logo.png') }}"
                            alt="#{logoMenu}" /><img class="logo-small court" src="{{ asset('src/img/court justice.jpg') }}"
                            alt="#{logoMenu}" /></a></li>
                <div class="undefined menu-links " id="menu_links">
                    <li class="button no-margin"><a class="btn btn-sm btn-" href="#"><i class="fas fa-search"></i></a>
                    </li>
                    <li class="button no-margin"><a class="btn btn-sm btn-" href="/Chat"><i
                                class="fab fa-rocketchat"></i></a>
                    </li>
                    <li class="button no-margin"><a class="btn btn-sm btn-" href="#"><i
                                class="fas fa-calendar-alt"></i></a>
                    </li>

                    <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </ul>
        </nav>
    </menu>
    <div class="sidebar active" id="sidenav">
        <div class="logo_content">
            <div class="logo">
                <div class="logo_name">Menu</div>
            </div><i class="fas fa-bars" id="btn"></i>
        </div>
        <ul class="nav_list">
            <li><a class="@if ($page == 'dashboard') active @endif" href="/admin/Dashboard"><i class="fas fa-gauge"></i><span
                        class="links_name">Dashboard</span></a><span class="tooltip">Dashboard</span></li>
            <li><a class="@if ($page == 'users') active @endif" href="/admin/Users"><i class="fas fa-user"></i><span class="links_name">Users</span></a><span class="tooltip">Users</span></li>
            <li><a class="@if ($page == 'news') active @endif" href="{{ route('news') }}"><i class="fa-solid fa-newspaper"></i><span class="links_name">News</span></a><span class="tooltip">News</span></li>
            {{-- <li><a class="@if ($page == 'roles') active @endif" href="/admin/Roles"><i class="fa-solid fa-users"></i><span class="links_name">Roles</span></a><span class="tooltip">Roles</span></li> --}}
            <li><a class="@if ($page == 'courses') active @endif" href="{{ route('courses') }}"><i class="fas fa-laptop-file"></i><span class="links_name">Courses</span></a><span class="tooltip">Courses</span></li>
        </ul>
    </div>
    @yield('content')
</body>
<script src="{{ asset('src/js/jquery.min.js') }}"> </script>
<script src="{{ asset('src/js/index.js') }}"> </script>
<script src="{{ asset('src/js/aos.js') }}"> </script>
<script>
  AOS.init({
      easing: 'ease-in-out-sine'
  });
</script>
@yield('js')
</html>
