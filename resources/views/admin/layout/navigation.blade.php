<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ url('/back') }}"><img src=" {{ asset('public/other') }}/{{ $sharedData['admin_logo'] }} " alt="Logo"></a>
            <a class="navbar-brand hidden" href="{{ url('/back') }}"><img src=" {{ asset('public/other') }}/{{ $sharedData['favicon'] }} " alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ url('/back') }}"> <i class="menu-icon fa fa-dashboard"></i>Main page </a>
                </li>

                @php $user = auth()->user();
                @endphp

                <li>
                    <a href="{{ url('/back/user') }}"> <i class="menu-icon fa fa-address-book-o"></i>Users </a>
                </li>

                <li>
                    <a href="{{ url('/back/category') }}"> <i class="menu-icon fa fa-folder-open-o"></i>Categories </a>
                </li>

                <li>
                    <a href="{{ url('/back/cars') }}"> <i class="menu-icon fa fa-automobile"></i>Cars </a>
                </li>

                <li>
                    <a href="{{ url('/back/settings') }}"> <i class="menu-icon fa fa-bolt"></i>System parameters </a>
                </li>

                <div class="col-md-11" style="color: #708090; text-align: center; left: 150px; position: fixed; bottom: 0px; ">
                  © Benas Klimašauskas 2021
                </div>

        </div><!-- /.navbar-collapse -->
    </nav>

</aside><!-- /#left-panel -->
