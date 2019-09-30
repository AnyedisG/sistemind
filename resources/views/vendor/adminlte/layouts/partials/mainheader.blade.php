{{--El nav (notificaciones, cerrar sesion) en el home--}}
<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Stm</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>{{ config('app.name') }}</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#"
            class="sidebar-toggle"
            data-toggle="offcanvas"
            role="button">
                <span class="sr-only">
                    {{ trans('message.togglenav') }}
                </span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <!--navbar class-->
            <ul class="nav navbar-nav">

                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#"
                        class="dropdown-toggle"
                        data-toggle="dropdown">
                            <i class="fa fa-bell-o">
                            </i>
                            <span class="label label-warning">
                                10
                            </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">
                            {{ trans('message.notifications') }}
                        </li>
                        <li>
                            <!-- Inner Menu: contains the notifications -->
                            <ul class="menu">
                                <li><!-- start notification -->
                                    <a href="#">
                                        <i class="fa fa-users text-aqua">
                                        </i>
                                        {{ trans('message.newmembers') }}
                                    </a>
                                </li><!-- end notification -->
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#">
                                {{ trans('message.viewall') }}
                            </a>
                        </li>
                    </ul>
                </li>

                @if (Auth::guest())
                    <li><a href="{{ url('/register') }}">{{ trans('message.register') }}</a></li>
                    <li><a href="{{ url('/login') }}">{{ trans('message.login') }}</a></li>
                @else

                    <!-- User Account log uot -->
                    <li class="dropdown user user-menu">

                                <a class="col-xs-13"
                                 href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                    >
                                        <img src="{{ Gravatar::get($user->email) }}"
                                            class="user-image"
                                            alt="User Image"
                                            />
                                        {{ trans('message.signout') }}

                                        <form id="logout-form"
                                            action="{{ url('/logout') }}"
                                            method="POST"
                                            style="display: none;"
                                            >
                                                {{ csrf_field() }}
                                                    <input type="submit"
                                                        value="logout"
                                                        style="display: none;"
                                                    >
                                        </form>
                                </a>

                    </li>
                @endif

            </ul>
        </div>
    </nav>
</header>
