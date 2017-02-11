
@include('partials.header')

<div class="template-page-wrapper">

    @include('partials.sidebar')

    <div class="templatemo-content-wrapper">

        <div class="templatemo-content">

            @yield('breadcrumbs')

            @yield('content')

        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('logout') }}" class="btn btn-primary">Yes</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    <footer class="templatemo-footer">
        <div class="templatemo-copyright">
            <p>Copyright &copy; 2084 Your Company Name</p>
        </div>
    </footer>
</div>

<script src="{!! url('templatemo') !!}/js/jquery.min.js"></script>
<script src="{!! url('templatemo') !!}/js/bootstrap.min.js"></script>
<script src="{!! url('templatemo') !!}/js/Chart.min.js"></script>
<script src="{!! url('templatemo') !!}/js/templatemo_script.js"></script>

@stack('js')

</body>
</html>