<body>
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="{{route('admin.dashboard')}}"><img class="main-logo" src="{{asset('admin_styles/img/logo/logo.png')}}" alt="" /></a>
            <strong><a href="{{route('admin.dashboard')}}"><img src="{{asset('admin_styles/img/logo/logosn.png')}}" alt="" /></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a class="" href="{{route('admin.dashboard')}}">
                            <span class="ion-ios-home icon-wrap"></span>
                            <span class="mini-click-non">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a  href="{{route('rooms.index')}}" aria-expanded="false"><span class="ion-md-bed icon-wrap"></span> <span class="mini-click-non">Rooms</span></a>

                    </li>
                    <li>
                        <a  href="{{route('categories.index')}}" aria-expanded="false"><span class="ion-ios-apps icon-wrap"></span> <span class="mini-click-non">Categories</span></a>

                    </li>
                    <li>
                        <a  href="{{route('userReservation.index')}}" aria-expanded="false"><span class=" icon-wrap ion-ios-calendar"></span> <span class="mini-click-non">Reservations</span></a>

                    </li>
                    <li>
                        <a  href="{{route('meals.index')}}" aria-expanded="false"><span class="ion-ios-restaurant icon-wrap"></span> <span class="mini-click-non">Meals</span></a>

                    </li>
                    <li>
                        @if($auth_user->role_id===3)
                        <a  href="{{route('users.index')}}" aria-expanded="false"><span class="ion-md-person icon-wrap"></span> <span class="mini-click-non">Users</span></a>
                            @endif

                    </li>
                    <li>
                        <a  href="{{route('review.index')}}" aria-expanded="false"><span class="ion-ios-star icon-wrap"></span> <span class="mini-click-non">Reviews</span></a>

                    </li>

                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- End Header menu area -->
