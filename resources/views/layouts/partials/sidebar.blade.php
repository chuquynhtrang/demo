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
            @if (Auth::user()->isAdmin())
                <li>
                    <a href="{{ url('/admin') }}"><i class="fa fa-area-chart fa-fw"></i>&nbsp;&nbsp;Thống kê</a>
                </li>
                <li>
                    <a href="{{ url('/admin/subjects') }}"><i class="fa fa-bookmark fa-fw"></i>&nbsp;&nbsp;Quản lý bộ môn</a>
                </li>
                <li>
                    <a href="{{ url('/admin/groups') }}"><i class="fa fa-building fa-fw"></i>&nbsp;&nbsp;Quản lý lớp học</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-user-circle fa-fw"></i>&nbsp;&nbsp;Quản lý người dùng<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('admin/users/0') }}">Sinh viên</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/users/2') }}">Giảng viên</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/users/1') }}">Admin</a>
                        </li>
                        <li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="{{ url('#') }}"><i class="fa fa-book fa-fw"></i>&nbsp;&nbsp;Quản lý đề tài</a>
                </li>
                <li>
                    <a href="{{ url('/admin/councils') }}"><i class="fa fa-users fa-fw"></i>&nbsp;&nbsp;Quản lý hội đồng bảo vệ</a>
                </li>
            @elseif (Auth::user()->isStaff())
            @else
                <li>
                    <a href="{{ url('#') }}"><i class="fa fa-area-chart fa-fw"></i>&nbsp;&nbsp;Đăng kí đề tài</a>
                </li>
                <li>
                    <a href="{{ url('#') }}"><i class="fa fa-bookmark fa-fw"></i>&nbsp;&nbsp;Danh sách sinh viên</a>
                </li>
                <li>
                    <a href="{{ url('#') }}"><i class="fa fa-building fa-fw"></i>&nbsp;&nbsp;Hội đồng bảo vệ</a>
                </li>
            @endif
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->