<div class="collapse navbar-collapse" id="app-navbar-collapse">
    <ul class="nav navbar-top-links navbar-right">
        <li style="margin-right: 50px; color: #fff;">Welcome, {{ Auth::user()->name }}</li>
        <li class="dropdown" id="link_profile">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <img src="{{Auth::user()->url_avatar}}" id="profile_avatar"><i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="{{ url('/admin/profile', Auth::user()->id) }}"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{ url('/logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
</div>