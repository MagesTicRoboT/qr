<!-- Header -->
<header id="page-header" class="invisible" data-toggle="appear" data-class="animated fadeInDown">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="content-header-section">
            <!-- Logo -->
            <div class="content-header-item">
                <a class="link-effect font-w700 mr-5" href="/">
                    <i class="si si-fire text-primary"></i>
                    <span class="font-size-h4 text-dual-primary-dark">Qr</span><span
                        class="font-size-h4 text-primary">Generator</span>
                </a>
            </div>
            <div class="content-header-item">
                <a type="button" class="btn btn-rounded btn-dual-secondary" href=" {{ route('page.index') }} ">
                    <span class="d-none d-sm-inline-block">Home</span>
                </a>
                <a type="button" class="btn btn-rounded btn-dual-secondary" href=" {{ route('page.index') }} ">
                    <span class="d-none d-sm-inline-block">About</span>
                </a>
                <a type="button" class="btn btn-rounded btn-dual-secondary" href=" {{ route('page.index') }} ">
                    <span class="d-none d-sm-inline-block">Contact</span>
                </a>
            </div>

            <!-- END Logo -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="content-header-section">

            @guest
                <a class="btn btn-sm btn-hero btn-noborder btn-alt-primary px-20" href="{{ route('login') }}">
                    <i class="si si-rocket"></i> <span class="ml-5 d-none d-sm-inline-block">Login</span>
                </a>
                <a class="btn btn-sm btn-hero btn-noborder btn-alt-success px-20" href="{{ route('register') }}">
                    <i class="si si-bag"></i> <span class="ml-5 d-none d-sm-inline-block">Register</span>
                </a>
            @endguest
            @auth
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user d-sm-none"></i>
                        <span class="d-none d-sm-inline-block">{{ Auth::user()->user_name }}</span>
                        <i class="fa fa-angle-down ml-5"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right min-width-200"
                        aria-labelledby="page-header-user-dropdown">
                        <a class="dropdown-item"  href="{{route('user.profile', Auth::user())}}">Profile</a>
                        <a class="dropdown-item"  href="{{route('user.history', Auth::user())}}">History</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="si si-logout mr-5"></i> Log out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            @endauth
        </div>

        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->
</header>
<!-- END Header -->
