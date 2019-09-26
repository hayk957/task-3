<header class="main-header">

    <a href="index2.html" class="logo">
        <span class="logo-mini"><b>E</b>M</span>
        <span class="logo-lg">{{ config('app.name', 'EmployeeManagement') }}</span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
                            <p>
                                Hello {{ Auth::user()->name }}
                            </p>
                        </li>
                        <li class="user-footer">
                            @if (Auth::guest())
                                <div class="pull-left">
                                    <a href="{{ route('login') }}" class="btn btn-default btn-flat">Login</a>
                                </div>
                            @else
                                <div class="pull-left">
                                    <a href="{{ url('profile') }}" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </div>
                            @endif
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
