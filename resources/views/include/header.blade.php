<header class="header navbar navbar-expand-sm">
    <ul class="navbar-item flex-row ml-md-0 ml-auto pl-3">
        <li class="nav-item align-self-center search-animated">
            <i class="las la-search toggle-search"></i>
            <form class="form-inline search-full form-inline search" action="{{ url('/pages/search-result') }}" role="search">
                <div class="search-bar">
                    <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder=" {{__('Search here')}}">
                </div>
            </form>
        </li>
    </ul>
    <ul class="navbar-item flex-row ml-md-auto">
        <!-- Using Switch option -->
        <!--<li class="nav-item dropdown fullscreen-dropdown">
            <div class="switch-container mb-0 pl-0">
                <label class="switch">
                    <input id="theme-switch" type="checkbox">
                    <span class="slider round primary-switch"></span>
                </label>
                <p class="ml-3 text-dark">Dark</p>
            </div>
        </li>-->
        <li class="nav-item dropdown fullscreen-dropdown">
            <a class="nav-link night-light-mode"  href="javascript:void(0);">
                <i class="las la-moon"id="darkModeIcon"></i>
            </a>
        </li>
        <li class="nav-item dropdown fullscreen-dropdown d-none d-lg-flex">
            <a class="nav-link full-screen-mode" href="javascript:void(0);">
                <i class="las la-compress" id="fullScreenIcon"></i>
            </a>
        </li>
        <li class="nav-item dropdown language-dropdown">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="las la-language"></i>
            </a>
            <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                <a class="dropdown-item d-flex" href="javascript:void(0);">
                    <img src="{{ url('assets/img/flag/usa-flag.png') }}" class="flag-width" alt="flag">
                    <span class="align-self-center"> {{ __('English') }}</span>
                </a>
                <a class="dropdown-item d-flex" href="javascript:void(0);">
                    <img src="{{ url('assets/img/flag/spain-flag.png') }}" class="flag-width" alt="flag">
                    <span class="align-self-center">&nbsp;{{ __('Spanish') }}</span>
                </a>
                <a class="dropdown-item d-flex" href="javascript:void(0);">
                    <img src="{{ url('assets/img/flag/france-flag.png') }}" class="flag-width" alt="flag">
                    <span class="align-self-center">&nbsp;{{ __('French') }}</span>
                </a>
                <a class="dropdown-item d-flex" href="javascript:void(0);">
                    <img src="{{ url('assets/img/flag/saudi-arabia-flag.png') }}" class="flag-width" alt="flag">
                    <span class="align-self-center">&nbsp;{{ __('Arabic') }}</span>
                </a>
            </div>
        </li>
        <li class="nav-item dropdown notification-dropdown">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle position-relative" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="las la-bell"></i>
                <div class="blink">
                    <div class="circle"></div>
                </div>
            </a>
            <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                <div class="nav-drop is-notification-dropdown" >
                    <div class="inner">
                        <div class="nav-drop-header">
                            <span class="text-black font-12 strong">{{ __('5 Notifications') }}</span>
                            <a class="text-muted font-12" href="#">
                                {{ __('Clear All') }}
                            </a>
                        </div>
                        <div class="nav-drop-body account-items pb-0">
                            <a class="account-item" href="{{ url('/apps/ecommerce/orders') }}">
                                <div class="media align-center">
                                    <div class="icon-wrap">
                                        <i class="las la-box font-20"></i>
                                    </div>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong">{{ __('2 New orders placed') }}</h6>
                                        <p class="m-0 mt-1 font-10 text-muted"> {{__('10 sec ago')}}</p>
                                    </div>
                                </div>
                            </a>
                            <a class="account-item" href="javascript:void(0)">
                                <div class="media align-center">
                                    <div class="icon-wrap">
                                        <i class="las la-user-plus font-20"></i>
                                    </div>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong"> {{ __('New User registered') }}</h6>
                                        <p class="m-0 mt-1 font-10 text-muted"> {{ __('5 minute ago') }}</p>
                                    </div>
                                </div>
                            </a>
                            <a class="account-item" href="{{ url('/apps/tickets/list') }}">
                                <div class="media align-center">
                                    <div class="icon-wrap">
                                        <i class="las la-grin-beam font-20"></i>
                                    </div>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong">{{ __('21 Queries solved') }}</h6>
                                        <p class="m-0 mt-1 font-10 text-muted"> {{ __('1 hour ago') }}</p>
                                    </div>
                                </div>
                            </a>
                            <a class="account-item" href="javascript:void(0)">
                                <div class="media align-center">
                                    <div class="icon-wrap">
                                        <i class="las la-cloud-download-alt font-20"></i>
                                    </div>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong"> {{ __('New update available') }}</h6>
                                        <p class="m-0 mt-1 font-10 text-muted"> {{ __('1 day ago') }}</p>
                                    </div>
                                </div>
                            </a>
                            <hr class="account-divider">
                            <div class="text-center">
                                <a class="text-primary strong font-13" href="{{ url('/pages/notifications') }}"> {{__('View All')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown user-profile-dropdown">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <img src="{{ url('assets/img/profile-1.jpg') }}" alt="avatar">
            </a>
            <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                <div class="nav-drop is-account-dropdown" >
                    <div class="inner">
                        <div class="nav-drop-header">
                            <span class="text-primary font-15">{{ __('Welcome') }} Admin !</span>
                        </div>
                        <div class="nav-drop-body account-items pb-0">
                            <a id="profile-link"  class="account-item" href="{{ url('/pages/profile') }}">
                                <div class="media align-center">
                                    <div class="media-left">
                                        <div class="image">
                                            <img class="rounded-circle avatar-xs" src="{{ url('assets/img/profile-1.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong">Siam Khan</h6>
                                        <small>siamkhan8@gmail.com</small>
                                    </div>
                                    <div class="media-right">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </a>
                            <a class="account-item" href="{{ url('/pages/profile') }}">
                                <div class="media align-center">
                                    <div class="icon-wrap">
                                        <i class="las la-user font-20"></i>
                                    </div>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong"> {{ __('My Account') }}</h6>
                                    </div>
                                </div>
                            </a>
                            <a class="account-item" href="{{ url('/pages/timeline') }}">
                                <div class="media align-center">
                                    <div class="icon-wrap">
                                        <i class="las la-briefcase font-20"></i>
                                    </div>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong">{{ __('My Activity') }}</h6>
                                    </div>
                                </div>
                            </a>
                            <a class="account-item settings">
                                <div class="media align-center">
                                    <div class="icon-wrap">
                                        <i class="las la-cog font-20"></i>
                                    </div>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong">{{ __('Settings') }}</h6>
                                    </div>
                                </div>
                            </a>
                            <a class="account-item" href="{{ url('/authentications/style3/locked') }}">
                                <div class="media align-center">
                                    <div class="icon-wrap">
                                        <i class="las la-lock font-20"></i>
                                    </div>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong">{{ __('Lock Screen') }}</h6>
                                    </div>
                                </div>
                            </a>
                            <hr class="account-divider">
                            <a class="account-item" href="{{ url('/authentications/style3/login') }}">
                                <div class="media align-center">
                                    <div class="icon-wrap">
                                        <i class="las la-sign-out-alt font-20"></i>
                                    </div>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong ">{{ __('Logout') }}</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <ul class="navbar-item flex-row">
        <li class="nav-item dropdown header-setting">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle rightbarCollapse" data-placement="bottom">
                <i class="las la-sliders-h"></i>
            </a>
        </li>
    </ul>
</header>
