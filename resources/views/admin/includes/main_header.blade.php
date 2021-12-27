<div class="container-fluid" >
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="logo-pro">
                <a href="{{route('admin.dashboard')}}"><img class="main-logo" src="{{asset('admin_styles/img/logo/logo.png')}}" alt="" /></a>
            </div>
        </div>
    </div>
</div>
<div class="header-advance-area">
    <div class="header-top-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header-top-wraper">
                        <div class="row">
                            <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                <div class="menu-switcher-pro">
                                    <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                        <i class=" h3 ion-md-menu"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">


                                        <li class="nav-item ">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">

                                                <span class="admin-name">{{$auth_user->name}}</span>
                                                <i class="ion-ios-person-add"></i>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">

                                                <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                </li>
                                                <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span> @auth
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                                                <button class="btn btn-primary btn-outline-info  text-white" type="submit">Log out</button>
                                                                @csrf
                                                            </form>
                                                        @endauth</a></li></a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>

                                </li>
                                <li><a href="events.html">Event</a></li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Rooms <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>

                                <li><a data-toggle="collapse" data-target="#demopro" href="#">Categories <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demopro" class="collapse dropdown-header-top">

                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Reservations <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>


                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Meals <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>

                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Meals <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>

                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Users <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>

                                </li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Reviews <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>

                                </li>





                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->

