<div class="navbar-collapse collapse templatemo-sidebar">
    <ul class="templatemo-sidebar-menu">
        <li>
            <form class="navbar-form">
                <input type="text" class="form-control" id="templatemo_search_box" placeholder="Search...">
                <span class="btn btn-default">Go</span>
            </form>
        </li>
        <li class="active"><a href="#"><i class="fa fa-home"></i>Dashboard</a></li>

        <li><a href="{{ url(route('dosen.index')) }}"><i class="fa fa-cubes"></i>Manage Dosen</a></li>
        <li><a href=""><i class="fa fa-map-marker"></i>Manage Absensi</a></li>
        <li><a href=""><i class="fa fa-users"></i>Manage KRS</a></li>
        <li><a href=""><i class="fa fa-cog"></i>Preferences</a></li>
        <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
    </ul>
</div><!--/.navbar-collapse -->