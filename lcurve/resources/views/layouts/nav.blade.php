<nav class="navbar navbar-default navbar-static-top topbar">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar">icon</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', "L'Curve") }}
            </a>

            <span class="logo">
                <a href="{ url('/') }}" class="">
                    <img class="logo" src="images/logoTrans100.PNG" alt="L'Curve">
                </a>
            </span>
        </div>
    
        @auth
        <!--Navigation images start-->
        <div class="row container_nav">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6 tp_mgn">
            <div class="col-lg-12">
                <a class="td_none" href="student_home.html">
                    <div class="col-lg-3 item_nav" style="background-color: #2274a5; border-color: #195579; " >
                        <img src="images/navigation/homesm.PNG" class="img-responsive grow image_nav"/>
                        <h6 align="center" class="text_nav">Home</h6>
                    </div>
                </a>
                <a class="td_none" href="student_class_room.html">
                    <div class="col-lg-3 item_nav" style="background-color: #E28B12; border-color: #A5660E; ">
                        <img src="images/navigation/classroomsm.PNG" class="img-responsive grow image_nav"/>
                        <h6 align="center" class="text_nav">Class Room</h6>
                    </div>
                </a>
                <a class="td_none" href="student_home.html">
                    <div class="col-lg-3 item_nav" style="background-color: #122c34; border-color: #0E2126;">
                        <img src="images/navigation/societiessm.PNG" class="img-responsive grow image_nav"/>
                        <h6 align="center" class="text_nav">Societies</h6>
                    </div>
                </a>
                <a class="td_none" href="student_home.html">
                    <div class="col-lg-3 item_nav" style="background-color: #CE0030; border-color: #960023;">
                        <img src="images/navigation/sportssm.PNG" class="img-responsive grow image_nav"/>
                        <h6 align="center" class="text_nav">Sports</h6>
                    </div>
                </a>
            </div>
        </div>
        
        <div class="col-lg-3">
        </div>

        </div>

        <!--Navigation images end-->
        @endauth

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{route('home')}}">Profile</a>

                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>