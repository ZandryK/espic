<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    @yield('style')

    <title>ESC-ESPIC</title>
</head>
<body>
    <div class="wrapper">
    {{-- SIDEBAR --}}
    <section id="sidebar">
        <a href="" class="brand pl-2">
            <span class="text logo"><img src="{{ asset('assets/images/logo/esc.png') }}" alt="" srcset="" style="width: 160px; height: 50px;"></span>
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
                    <span class="text">Thème</span>
                </a>
            </li>
            @isset(auth()->user()->usergroups)
                @if (auth()->user()->usergroups->count() >=2 )
                <li>
                    <a href="{{ route('change.compte', ['session'=>session()->get('usr_grp')]) }}">
                        <i class="fa fa-user-plus"></i>
                        <span class="text">Changer de compte</span>
                    </a>
                </li>
                @endif
            @endisset
            
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
            <div class="container-fluid">
                <button class="btn btn-outline-dark btn-toolbars"><i class="fa fa-bars"></i></button>
                @if (request()->url() != route('Home'))
                    <div class="search">
                        <input type="text" name="" id="myInput" class="form-control" oninput="myFunction()">
                        <span class="bg-info">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                @endif
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fa fa-user-circle"></i>
                            @isset(auth()->user()->name)
                                <span class="text">{{auth()->user()->name}}</span>
                            @endisset
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
    <script src="{{ asset('assets/js/datatables.min.js') }}"></script>
    @include('sweetalert::alert')
    <script src="{{ asset('assets/js/admin.js') }}"></script>
    <script src="{{ asset('assets/js/admin/search.js') }}"></script>
    @yield('script')
</body>
</html>
