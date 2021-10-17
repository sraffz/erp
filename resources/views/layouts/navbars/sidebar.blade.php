<div class="sidebar" data-color="rose" data-background-color="black"
    data-image="{{ asset('material') }}/img/login.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            {{ __('E-RP') }}
        </a>
    </div>

    <div class="sidebar-wrapper">
        {{-- For mobile view --}}
        <ul class="nav navbar-nav nav-mobile-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    {{ __('Halaman Utama') }}
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    {{ __('Akaun') }}
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Profil') }}</a>
                  {{-- <a class="dropdown-item" href="#">{{ __('Settings') }}</a> --}}
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                </div>
              </li>
        </ul>

        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Halaman Utama') }}</p>
                </a>
            </li>
            {{-- <li class="nav-item {{ $activePage == 'profile' || $activePage == 'user-management' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                    <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
                    <p>{{ __('Laravel Examples') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExample">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('profile.edit') }}">
                                <span class="sidebar-mini"> UP </span>
                                <span class="sidebar-normal">{{ __('User profile') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('user.index') }}">
                                <span class="sidebar-mini"> UM </span>
                                <span class="sidebar-normal"> {{ __('User Management') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}
            <li class="nav-item{{ $activePage == 'peribadi' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('page.index', 'peribadi')}}">
                    <i class="material-icons">groups</i>
                    <p>{{ __('Peribadi') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'perkhidmatan' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('page.index', 'perkhidmatan')}}">
                    <i class="material-icons">business_center</i>
                    <p>{{ __('Perkhidmatan') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'perubatan' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('page.index', 'perubatan')}}">
                    <i class="material-icons">medical_services</i>
                    <p>{{ __('Perubatan') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'bil-rawatan' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('page.index', 'bil-rawatan')}}">
                    <i class="material-icons">receipt</i>
                    <p>{{ __('Bil Rawatan') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'pengguna' || $activePage == 'pengguna-tidak-aktif' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('page.index', 'pengguna')}}">
                    <i class="material-icons">person</i>
                    <p>{{ __('Pengguna') }}</p>
                </a>
            </li>

            <li class="nav-item {{ $activePage == 'jabatan' || $activePage == 'jawatan' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#config" aria-expanded="false">
                    <i class="material-icons">settings</i>
                    <p>{{ __('Konfigurasi') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="config">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'jabatan' ? ' active' : '' }}">
                            <a class="nav-link" href="{{route('page.index', 'jabatan')}}">
                                <i class="material-icons">domain</i>
                                <p>{{ __('Jabatan') }}</p>
                            </a>
                        </li>
                        <li class="nav-item {{ $activePage == 'jawatan' ? ' active' : '' }}">
                            <a class="nav-link" href="{{route('page.index', 'jawatan')}}">
                                <i class="material-icons">engineering</i>
                                <p>{{ __('Jawatan') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="material-icons">exit_to_app</i>
                    <p>{{ __('Log Keluar') }}</p>
                </a>
            </li>








            {{-- <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('page.index', 'table') }}">
                    <i class="material-icons">content_paste</i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('page.index', 'typography') }}">
                    <i class="material-icons">library_books</i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('page.index', 'icons') }}">
                    <i class="material-icons">bubble_chart</i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('page.index', 'map') }}">
                    <i class="material-icons">location_ons</i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('page.index', 'notifications') }}">
                    <i class="material-icons">notifications</i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('page.index', 'language') }}">
                    <i class="material-icons">language</i>
                    <p>{{ __('RTL Support') }}</p>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
