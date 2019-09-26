<aside class="main-sidebar">Admin
    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name}}</p>
            </div>
        </div>

        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>

        <ul class="sidebar-menu">
            <li class="active"><a href="/"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
            <li><a href="{{ url('employee-management') }}"><i class="fa fa-link"></i> <span>Employee Management</span></a></li>
            <li><a href="{{ url('system-management') }}"><i class="fa fa-link"></i> <span>System Management</span></a></li>

            <li class="treeview">
                <a href="#"><i class="fa fa-link"></i> <span>System Management</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('system-management/department') }}">Companies</a></li>
                    <li><a href="{{ url('system-management/department') }}">Department</a></li>
                    <li><a href="{{ url('system-management/department') }}">Skill</a></li>
                    <li><a href="{{ url('system-management/country') }}">Country</a></li>
                    <li><a href="{{ url('system-management/city') }}">City</a></li>
                </ul>
            </li>
            <li><a href=""><i class="fa fa-link"></i> <span>User management</span></a></li>
        </ul>

    </section>
</aside>
