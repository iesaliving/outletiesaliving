<header id="header-custom">

    <nav id="header" class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{ URL::to('/')}}"><img  src="{{ asset('img/logo-header.png')   }}" alt="Logo Wizerlink" ></a>

        <button class="navbar-toggler" type="button">
            <a class="menu-trigger" href="#"><i class="fa fa-bars fa-2x" style="color: #212832;"></i></a>
        </button>

        <div id="menu-container" class="collapse navbar-collapse" id="navbarSupportedContentLG">
            <ul id="menu" class="navbar-nav mr-auto ">
                <li id="cerrar-menu">
                    <a class="menu-trigger" href="#"><i class="fa fa-times fa-2x" style="color: #212832;"></i></a>
                </li>
                <li id="a-home" class="nav-item">
                    <a class="nav-link border-left" href="{{ URL::to('/') }}">Home</a>
                </li>
                <li  class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown">
                      Marcas
                    </a>
                    <div id="menu-dropbox" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="{{ URL::to('/sub-zero')}}">Sub-Zero</a>
                      <a class="dropdown-item" href="{{ URL::to('/wolf')}}">Wolf</a>
                      <a class="dropdown-item" href="{{ URL::to('/cove')}}">Cove</a>
                      <a class="dropdown-item" href="{{ URL::to('/asko')}}">Asko</a>
                      <a class="dropdown-item" href="{{ URL::to('/dexa')}}">Dexa</a>
                      <a class="dropdown-item" href="{{ URL::to('/scotsman')}}">Scotsman</a>
                      <a class="dropdown-item" href="{{ URL::to('/cocina-exterior')}}">Cocina Exterior</a>    
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link border-left" href="{{ URL::to('/servicios') }}">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border-left" href="{{ URL::to('/showroom') }}">Showrooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border-left" href="{{ URL::to('/nosotros') }}">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border-left" href="{{ URL::to('/faq') }}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border-left" href="{{ URL::to('/contacto') }}">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border-left" rel="nofollow" target="_blank" href="http://outlet.lafamiliaperfecta.com/">Outlet</a>
                </li>
            </ul>
            
        </div>
    </nav>
</header>

