<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Jorge Villasmil"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('global.site_title') }}</title>
  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/admin_custom.css') }}" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="node_modules/@coreui/coreui/dist/css/coreui.min.css"> -->
    @yield('styles')
</head>


<body {{ Session::has('notification') ? 'data-notification' : '' }} 
data-notification-type="{{  Session::has('notification') ? Session::get('notification')['alert_type'] : '' }}" 
data-notification-message="{{ Session::has('notification') ? json_encode(Session::get('notification')['message']) : '' }}" class="app header-fixed sidebar-fixed aside-menu-fixed pace-done sidebar-lg-show">

    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
       
        <a class="navbar-brand" href="#">
            <span class="navbar-brand-full"><img class="rounded mx-auto d-block img-fluid w-50" src="{{ asset('img/logo-header.png')}}"></span>
            <span class="navbar-brand-minimized"><img class="rounded mx-auto d-block img-fluid w-50" src="{{ asset('img/logo-header.png')}}"></span>
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>

          <ul class="nav navbar-nav d-md-down-none">
               <li class="breadcrumb-item"> <a href="/home">Home</a> </li>
            @yield('breadcrumb')
                    
          </li>
        </ul>

        <ul class="nav navbar-nav ml-auto">

           
            @if(count(config('panel.available_languages', [])) > 1)
                <li class="nav-item dropdown d-md-down-none">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        @foreach(config('panel.available_languages') as $langLocale => $langName)
                            <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
                        @endforeach
                    </div>
                </li>
            @endif

             <li class="nav-item dropdown">
                      <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <img class="img-avatar" src="{{ asset('img/user.png') }}" alt="{{ Auth::user()->name }}"> 
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header text-center">
                          <strong>{{ Auth::user()->name }}</strong>
                        </div>

                        <a class="dropdown-item" href="{{ route('admin.users.password', Auth::user()->id) }}">
                             <span class="fa-passwd-reset fa-stack">
                              <i class="fa fa-undo fa-stack-2x"></i>
                              <i class="fa fa-lock fa-stack-1x"></i>
                            </span> {{ trans('global.change_password') }}
                        </a>
                       
                        <a class="dropdown-item" href="#"  onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                          <i class="nav-icon fa fa-sign-out fa-2x"></i>  {{ trans('global.logout') }}
                           <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">@csrf</form>
                       </a>


                      </div>
              </li>
                    
        </ul>
    </header>

    <div class="app-body">
        @include('partials.menu')
        <main class="main">


            <div style="padding-top: 20px" class="container-fluid">

                @yield('content')

            </div>


        </main>
        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
  
  
    <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
    
    @yield('scripts')
</body>

</html>
