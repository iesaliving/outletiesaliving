<header id="header-custom">

    <nav id="header" class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{ URL::to('/')}}"><img  src="{{ URL::asset('img/logo-header.png')   }}" alt="Logo Wizerlink" ></a>

        <button class="navbar-toggler" type="button">
            <a class="nav-link menu-trigger" href="#"><i class="fa fa-th fa-2x" style="color: #498ac0;"></i></a>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContentLG">
            <ul id="menu" class="navbar-nav mr-auto ">
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
                      <a class="dropdown-item" href="{{ URL::to('/cocina-exterior')}}">Cocina Para Exteriores</a>    
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link border-left" href="{{ URL::to('/servicios') }}">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border-left" href="{{ URL::to('/showroom') }}">Showrooms</a>
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


            <div class="modal right fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-full" role="document">
                    <div class="modal-content">

                        <button  id="prev-menu-btn" type="button" class="btn"  data-dismiss="modal"><i class="fa fa-2x fa-arrow-left"></i></button>
                        <button  id="close-menu-btn" type="button" class="btn" data-dismiss="modal"><i class="fa fa-2x fa-times"></i></button>
                        <div class="modal-body topmargin-lg" style="" >
                            <a href="{{ URL::to('/')}}"><h2>Home</h2></a>
                            <a href="{{ URL::to('servicios')}}"><h2>Servicios</h2></a>
                            <a href="{{ URL::to('talentos')}}"><h2>Empleo</h2></a>
                           <!--  <h2>Blog</h2> -->
                            <a href="{{ URL::to('/contacto') }}"><h2>Contacto</h2></a>
                            <a href="{{ URL::to('/blog') }}"><h2>Blog</h2></a> 
                            <div id="link-bot" class="topmargin">
                                <a href="{{ URL::to('/contacto') }}">Are you lost? take me to you leader!</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
