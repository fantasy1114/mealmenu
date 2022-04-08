<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item">
                    <a class="nav-link menu-toggle" href="javascript:void(0);">
                        <i class="ficon" data-feather="menu"></i>
                    </a>
                </li>
            </ul>

        </div>
        <ul class="nav navbar-nav align-items-center ml-auto">
            <li class="nav-item dropdown dropdown-language">
                <a class="nav-link dropdown-toggle" id="dropdown-flag"
                    href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                        class="flag-icon flag-icon-us"></i>
                        <span class="selected-language">English</span></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag"><a
                        class="dropdown-item" href="javascript:void(0);" data-language="en"><i
                            class="flag-icon flag-icon-us"></i> English</a>
                            {{-- <a class="dropdown-item"
                        href="javascript:void(0);" data-language="fr"><i class="flag-icon flag-icon-fr"></i>
                        French</a><a class="dropdown-item" href="javascript:void(0);" data-language="de"><i
                            class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item"
                        href="javascript:void(0);" data-language="pt"><i class="flag-icon flag-icon-pt"></i>
                        Portuguese</a> --}}
                    </div>
            </li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>

            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                    id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none">
                        <span class="user-name font-weight-bolder">{{Auth::user()->name}}</span>
                        <span class="user-status">Admin</span>
                    </div>
                    <span class="avatar">
                        <img class="round" src="{{Auth::user()->user_img}}" alt="avatar" height="40" width="40">
                        <span class="avatar-status-online"></span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="{{route('setting.page')}}">
                        <i class="mr-50" data-feather="settings"></i>
                        Settings
                    </a>
                    <a class="dropdown-item" href="{{route('logout')}}">
                        <i class="mr-50" data-feather="power"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>