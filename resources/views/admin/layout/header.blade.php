<header id="header" class="header">
    <div class="header-menu">
        <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
            <div class="header-left">
              @php $user = auth()->user();
              @endphp

                  <div class="float-left ">
                    Hello, {{ $user->name }} {{ $user->surname }}
                  </div>
            </div>
        </div>

        <div class="col-sm-5">
            <div class="float-right ">
                <a href="{{ url('/') }}"> Main page </a>
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-power -off"></i>Logout</a>
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                       </form>
                </div>
            </div>
        </div>
</header><!-- /header -->
