<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html"class="logo d-flex align-items-center nav-link scrollto">
            <img src="{{ asset('assets/img/66.png')}}" alt="">
            <span>PeduliDiri</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ set_active('home')}}" href="/home">Home</a></li>
                @if(Auth::user()->role == "admin")
                <li><a class="nav-link scrollto" href="/datauser">Admin</a></li>
                @endif
                @if(Auth::user()->role == "user")


                
                <li><a class="nav-link scrollto {{ set_active('perjalanan')}}" href="/perjalanan">Perjalanan</a></li>
                @endif
                <li class="dropdown"><a href="#" class="nav-link scrollto"><span>{{ Auth::user()->name }}</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/profil" class="nav-link scrollto">Profile</a></li>
                        <li><a href="/logout" class="nav-link scrollto">Log Out</a></li>

                    </ul>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
