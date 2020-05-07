<div class="sidebar">
    <nav class="sidebar-nav ps ps--active-y">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ url('/home') }}" class="nav-link">
                    <i class="nav-icon fa fa-tachometer">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @canany(['user_management_access', 'user_access','permission_access','role_access'])
            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle">
                    <i class="fa fa-users nav-icon">

                    </i>
                    {{ trans('global.userManagement.title') }}
                </a>
                <ul class="nav-dropdown-items">
                    <!-- <li class="nav-item">
                        <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                            <i class="fa fa-unlock-alt nav-icon">

                            </i>
                            {{ trans('global.permission.title') }}
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a href="{{ route('admin.roles.index') }}" class="nav-link ml-3 {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                            <i class="fa fa-briefcase nav-icon">

                            </i>
                            {{ trans('global.role.title') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.users.index') }}" class="nav-link ml-3 {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                            <i class="fa fa-user nav-icon">

                            </i>
                            {{ trans('global.user.title') }}
                        </a>
                    </li>
                </ul>
            </li>
             @endcanany

             @canany(['admin_zoho','user_zoho'])
             <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle">
                    <i class="fa fa-bar-chart nav-icon">

                    </i>
                   Administrador Zoho
                </a>
                <ul class="nav-dropdown-items">
                    <!-- <li class="nav-item">
                        <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                            <i class="fa fa-unlock-alt nav-icon">

                            </i>
                            {{ trans('global.permission.title') }}
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a href="{{ route('admin.leads.index') }}" class="nav-link ml-3 {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                            <i class="fa fa-trophy nav-icon">

                            </i>
                            Leads
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.deals.index') }}" class="nav-link ml-3 {{ request()->is('admin/deals') || request()->is('admin/deals/*') ? 'active' : '' }}">
                            <i class="fa fa-money nav-icon">

                            </i>
                            Prospectos
                        </a>
                    </li>
                </ul>
            </li>
            @endcanany

            @canany(['web_administrator', 'contact_access','service_access'])
            <li class="nav-item">
                <a href="{{ route('admin.home_page.index') }}" class="nav-link {{ request()->is('admin/home_page','admin/home_page/*') ? 'active' : '' }}" >
                   <i class="nav-icon fa fa-home"></i>
                    Home
                </a>
            </li>

             <li class="nav-item">
                <a href="{{ route('admin.testimonies.index') }}" class="nav-link {{ request()->is('admin/testimonies','admin/testimonies/*') ? 'active' : '' }}" >
                   <i class="nav-icon fa fa-comments"></i>
                    Testimonios
                </a>
            </li>

              <li class="nav-item">
                <a href="{{ route('admin.brand.index') }}" class="nav-link {{ request()->is('admin/brand','admin/brand/*') ? 'active' : '' }}" >
                   <i class="nav-icon fa fa-tags"></i>
                    Marcas
                </a>
            </li>

             <li class="nav-item">
                <a href="{{ route('admin.showroom.index') }}" class="nav-link {{ request()->is('admin/showroom','admin/showroom/*') ? 'active' : '' }}" >
                   <i class="nav-icon fa fa-eye"></i>
                    Showroom
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.showroom.page') }}" class="nav-link {{ request()->is('admin/showroom_page','admin/showroom_page/*') ? 'active' : '' }}" >
                   <i class="nav-icon fa fa-file"></i>
                    Showroom page
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.about_us.index') }}" class="nav-link {{ request()->is('admin/about_us','admin/about_us/*') ? 'active' : '' }}" >
                   <i class="nav-icon fa fa-circle-o"></i>
                    Nosotros
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.faq.index') }}" class="nav-link {{ request()->is('admin/faq','admin/faq/*') ? 'active' : '' }}" >
                   <i class="nav-icon fa fa-cog"></i>
                    Faq
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.notice_privacy.index') }}" class="nav-link {{ request()->is('admin/notice_privacy','admin/notice_privacy/*') ? 'active' : '' }}" >
                   <i class="nav-icon fa fa-circle-o"></i>
                    Aviso Privacidad
                </a>
            </li>

            @endcanany

            @can('service_access')
            <li class="nav-item">
                <a href="{{ route('admin.services.index') }}" class="nav-link {{ request()->is('admin/services','admin/services/*') ? 'active' : '' }}" >
                   <i class="nav-icon fa fa-wrench"></i>
                    Servicios
                </a>
            </li>
            @endcan


            @can('contact_access')
             <li class="nav-item">
                <a href="{{ route('admin.contacts.index') }}" class="nav-link {{ request()->is('admin/contacts','admin/contacts/*') ? 'active' : '' }}" >
                   <i class="nav-icon fa fa-weixin"></i>
                    {{ trans('global.contacts') }}
                </a>
            </li>
            @endcan



            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fa fa-sign-out">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 869px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 415px;"></div>
        </div>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
