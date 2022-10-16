<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    @yield('style')

    <title>ESC-ESPIC</title>
</head>
<body>
    <div class="wrapper">
    {{-- SIDEBAR --}}
    <section id="sidebar">
        <a href="" class="brand">
            <i class="fa fa-user-secret"></i>
            <span class="text logo">ESC-ESPIC</span>
        </a>
        <ul class="side-menu top">
            <li class="{{request()->url() == route('Home') ? 'active':''}}">
                <a href=" {{ route('Home') }} ">
                    <i class="fa fa-dashboard"></i>
                    <span class="text">Menu</span>
                </a>
            </li>
            <li class="{{request()->url() == route('user.profil') ? 'active':''}}">
                <a href="{{ route('user.profil') }}">
                    <i class="fa fa-user"></i>
                    <span class="text">Pofil</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-cog"></i>
                    <span class="text">Paramètre</span>
                </a>
            </li>
            @if (auth()->user()->usergroups->count() >=2 )
            <li>
                <a href="{{ route('change.compte', ['session'=>session()->get('usr_grp')]) }}">
                    <i class="fa fa-user-plus"></i>
                    <span class="text">Changer de compte</span>
                </a>
            </li>
            @endif
            @if (session()->get('usr_grp') == "Formateurs")
            <li>
                <a href="{{ route('view.video') }}">
                    <i class="fa fa-video-camera"></i>
                    <span class="text">Envoyer Cours</span>
                </a>
            </li>
            @endif

        </ul>
        <ul class="side-menu bottom">
            <li>
                <a href="{{ route('logout') }}">
                    <i class="fa fa-sign-out"></i>
                    <span>Deconnexion</span>
                </a>
            </li>
        </ul>
    </section>


    {{-- FIN SIDEBAR --}}

    {{-- contenu --}}
    <section id="content">
        <!-- navbar -->
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <button class="btn btn-outline-dark btn-toolbars"><i class="fa fa-bars"></i></button>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fa fa-user-circle"></i>
                            <span class="text">{{auth()->user()->name}}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- end-navbar -->
        <div class="container-fluid">
            <div class="content">
                @yield('adminBody')
            </div>
    {{-- fin contenu --}}
    </div>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    @include('sweetalert::alert')
    <script src="{{ asset('assets/js/admin.js') }}"></script>
    @yield('script')
</body>
</html>
