<div class="navbar-collapse collapse templatemo-sidebar">
    <ul class="templatemo-sidebar-menu">
        <li>
            <form class="navbar-form">
                <input type="text" class="form-control" id="templatemo_search_box" placeholder="Search...">
                <span class="btn btn-default">Go</span>
            </form>
        </li>
        <li class="active"><a href="{{ url('/') }}"><i class="fa fa-home"></i>Dashboard</a></li>
        @if(session('jenis_user') == 'mahasiswa')
        <li><a href="{{ url('filterkrs') }}"><i class="fa fa-users"></i>Manage KRS</a></li>
        @endif
        @if(session('jenis_user') == 'dosen')
        <li><a href="{{ url('approve') }}"><i class="fa fa-users"></i>Approval KRS</a></li>
        @endif
        <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>
    </ul>
</div><!--/.navbar-collapse -->
