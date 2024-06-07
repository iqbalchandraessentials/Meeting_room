<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">
        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header nav-small-cap text-uppercase">HOME</li>
            <li class="pt-3 {{ Request::segment(1) === 'dashboard' ? 'active' : '' }}">
                <a href="{{ url('dashboard') }}">
                    <i class="ti-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="header nav-small-cap text-uppercase">MEETING ROOM</li>
            <li class="treeview {{ Request::segment(1) === 'meeting-room' ? 'active' : '' }}">
                <a href="#">
                    <i class="ti-blackboard"></i>
                    <span>Room Resources</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    {{-- <li class="{{ Request::segment(1) === 'meeting-room' && Request::segment(2) === 'add-new' ? 'active' : '' }}">
                        <a href="{{ url('meeting-room/add-new') }}"><i class="ti-more"></i>Add New</a>
                    </li> --}}
                    <li class="{{ Request::segment(1) === 'meeting-room' && Request::segment(2) === null || Request::segment(2) === 'details' ? 'active' : '' }}">
                        <a href="{{ route('meeting-room') }}">
                            <i class="ti-more"></i>List Meeting Room
                        </a>
                    </li>
                </ul>
            </li>

            {{-- facilities --}}
            <li class="treeview {{ Request::segment(1) === 'facilities' ? 'active' : '' }}">
                <a href="#">
                    <i class="ti-panel"></i>
                    <span>Facilities</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::segment(1) === 'facilities' && Request::segment(2) === 'menu' || Request::segment(2) === 'add-new' ? 'active' : '' }}">
                        <a href="{{ route('menu-facilities') }}">
                            <i class="ti-more"></i>List Facilities
                        </a>
                    </li>
                    <li class="{{ Request::segment(1) === 'facilities' && Request::segment(2) === 'categories' ? 'active' : '' }}">
                        <a href="{{ route('category-facilities') }}">
                            <i class="ti-more"></i>Categories
                        </a>
                    </li>
                </ul>
            </li>

            
            
            {{-- foond and bravage --}} 
            
            <li class="header nav-small-cap text-uppercase">FOOD & BEVERAGE</li>
            <li class="treeview {{ Request::segment(1) === 'foodandbaverages' && Request::segment(2) === 'menu' || Request::segment(2) === 'categories' ? 'active' : '' }}">
                <a href="#">
                    <i class="ti-menu-alt"></i>
                    <span>Menu</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ Request::segment(1) === 'foodandbaverages' && Request::segment(2) === 'menu' ? 'active' : '' }}">
                        <a href="{{ route('menu') }}">
                            <i class="ti-more"></i>List Menu
                        </a>
                    </li>
                    <li class="{{ Request::segment(1) === 'foodandbaverages' && Request::segment(2) === 'categories' ? 'active' : '' }}">
                        <a href="{{ route('category') }}">
                            <i class="ti-more"></i>Categories
                        </a>
                    </li>
                </ul>
            </li>

            {{-- <li class="header nav-small-cap text-uppercase">MEETING PAGE</li>
            <li class="{{ Request::segment(1) === 'device-control' ? 'active' : '' }}">
                <a href="{{ url('device-control') }}">
                    <i class="ti-panel"></i>
                    <span>Device Control</span>
                </a>
            </li> --}}

            <li class="header nav-small-cap text-uppercase">TRANSACTION</li>
            <li class="{{ Request::segment(1) === 'booking-list' ? 'active' : '' }}">
                <a href="{{ url('booking-list') }}">
                    <i class="ti-clipboard"></i>
                    <span>Booking List</span>
                </a>
            </li>
            {{-- <li class="{{ Request::segment(1) === 'visitor' ? 'active' : '' }}">
                <a href="{{ url('visitor') }}">
                    <i class="ti-agenda"></i>
                    <span>Visitor</span>
                </a>
            </li> --}}
           

            <li class="header nav-small-cap text-uppercase">ACTIVITY</li>
            <li class="{{ Request::segment(1) === 'book-now' ? 'active' : '' }}">
                <a href="{{ route('book-now') }}">
                    <i class="ti-pencil-alt"></i>
                    <span>Book Now</span>
                </a>
            </li>
            <li class="{{ Request::segment(1) === 'my-booking' ? 'active' : '' }}">
                <a href="{{ url('my-booking') }}">
                    <i class="ti-calendar"></i>
                    <span>My Booking</span>
                </a>
            </li>

            <li class="header nav-small-cap text-uppercase">REPORT</li>
            <li class="{{ Request::segment(1) === 'report' ? 'active' : '' }}">
                <a href="{{ url('report') }}">
                    <i class="ti-briefcase"></i>
                    <span>Report</span>
                </a>
            </li>
            <li class="header nav-small-cap text-uppercase">UTILITIES</li>
            <li class="{{ Request::segment(1) === 'my-profile' ? 'active' : '' }}">
                <a href="{{ url('my-profile') }}">
                    <i class="ti-user"></i>
                    <span>My Profile</span>
                </a>
            </li>
            <li class="{{ Request::segment(1) === 'user' ? 'active' : '' }}">
                <a href="{{ url('user') }}">
                    <i class="ti-user"></i>
                    <span>User</span>
                </a>
            </li>
            <li>
                <a href="{{ url('') }}">
                    <i class="ti-power-off"></i>
                    <span>Log Out</span>
                </a>
            </li>
        </ul>
    </section>
</aside>