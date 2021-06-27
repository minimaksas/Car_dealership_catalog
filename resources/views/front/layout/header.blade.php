<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

<section id="header_section_wrapper" class="header_section_wrapper">
    <div class="container">
        <div class="header-section">
            <div class="row">
                <div class="col-md-3">
                    <div class="left_section">
                        <span class="time">
                          Today's date:   {{ date('Y-m-d') }}
                        </span>
                    </div>
                    <br>
                    <!-- Left Header Section -->
                </div>
                <div class="col-md-5">
                    <div class="logo">
                      <a href="{{ url('/') }}">
                        <img width="520" height="150" src="{{ asset('public/other') }}/{{ $sharedData['front_logo'] }} " alt="Logotipas"></a>
                    </div>
                    <!-- Logo Section -->
                </div>
                <div class="col-md-4">
                    <div style="margin-left: 45%" class="right_section">
                      @auth
                          @php $user = auth()->user(); @endphp
                      @endauth

                        <ul class="nav navbar-nav">
                            <li><a>Hello, {{ $user->name }} {{ $user->surname }}</a></li>
                            <li><a href="{{ url('/back') }}"> Administrator's panel</a></li>

                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();

                            document.getElementById('logout-form').submit();"><br><i class="fa fa-power -off"></i>Log out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                @csrf
                            </form></li>

                       </ul>

                    </div>
                    <!-- Right Header Section -->
                </div>
            </div>
        </div>
        <!-- Header Section -->


        <div style="display: flex; justify-content: flex-end">

        </div>


        <div class="navigation-section">
            <nav class="navbar m-menu navbar-default">
                <div class="container">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav">
                            <li class="active"><a href="{{ url('/') }}">Main</a></li>

                            @foreach($sharedData['categories'] as $category)
                            <li><a href="{{ url('/category') }}/{{ $category->id }}">{{ $category->name }}</a></li>
                            @endforeach


                        </ul>
                    </div>
                    <!-- .navbar-collapse -->
                </div>
                <!-- .container -->
            </nav>
            <!-- .nav -->
        </div>
        <!-- .navigation-section -->
    </div>
    <!-- .container -->
</section>
<!-- header_section_wrapper -->
