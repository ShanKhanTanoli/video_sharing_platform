<header>
    <div class="top_bar">
        <div class="container">
            <div class="top_header_content">
                <div class="menu_logo">
                    <a href="#" title="" class="menu">
                        <i class="icon-menu"></i>
                    </a>
                    <a href="{{ route('main') }}" title="" class="logo">
                        <img src="{{ asset('dashboard/images/logo.png') }}" alt="">
                    </a>
                </div>
                <!--menu_logo end-->
                <div class="search_form">
                    <form wire:submit.prevent='Search()'>
                        <input type="text" name="search" wire:model='search' placeholder="Search Videos">
                        <button type="submit">
                            <i class="icon-search"></i>
                        </button>
                    </form>
                </div>
                <!--search_form end-->
                <ul class="controls-lv">

                    <li class="user-log">
                        <div class="user-ac-img">
                            <img src="{{ asset('dashboard/images/resources/user-img.png') }}" alt="">
                        </div>
                        <div class="account-menu">
                            <h4>{{ Auth::user()->name }}</h4>
                            <div class="sd_menu">
                                <ul class="mm_menu">
                                    <li>
                                        <span>
                                            <i class="icon-user"></i>
                                        </span>
                                        <a href="{{ route('UserDashboard') }}" title="">Dashboard</a>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="icon-settings"></i>
                                        </span>
                                        <a href="{{ route('UserEditProfile') }}" title="">Settings</a>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="icon-logout"></i>
                                        </span>
                                        <!--Begin::Logout-->
                                        @livewire('auth.logout')
                                        <!--Begin::Logout-->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('UserAddVideo') }}" title="" class="btn-default">Upload</a>
                    </li>
                </ul>
                <!--controls-lv end-->
                <div class="clearfix"></div>
            </div>
            <!--top_header_content end-->
        </div>
    </div>
</header>
<!--header end-->
