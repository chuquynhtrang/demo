<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
             <li>
                <a href="{{ action('HomeController@index') }}"><i class="fa fa-area-chart fa-fw"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{ url('/subjects') }}"><i class="fa fa-bookmark fa-fw"></i>Subjects Managerment</a>
            </li>
            <li>
                <a href=" {{ url('/groups') }}"><i class="fa fa-building fa-fw"></i>Classes Managerment</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-user-circle fa-fw"></i>User Managerment<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Students</a>
                    </li>
                    <li>
                        <a href="#">Teacher</a>
                    </li>
                    <li>
                        <a href="#">Admin</a>
                    </li>
                    <li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i>Councils Managerment</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->