<div class="side_menu">
    <div class="form_dvv">
        <a href="#" title="" class="login_form_show">Sign in</a>
    </div>
    <div class="sd_menu">
        <ul class="mm_menu">
            <li>
                <span>
                    <i class="icon-home"></i>
                </span>
                <a href="{{ route('UserVideos') }}" title="">Home</a>
            </li>
            <li>
                <span>
                    <i class="icon-fire"></i>
                </span>
                <a href="{{ route('UserDashboard') }}" title="">Dashboard</a>
            </li>
        </ul>
    </div><!--sd_menu end-->
    <div class="sd_menu">
        <h3>Library</h3>
        <ul class="mm_menu">
            <li>
                <span>
                    <i class="icon-history"></i>
                </span>
                <a href="#" title="">History</a>
            </li>
        </ul>
    </div><!--sd_menu end-->
    <div class="sd_menu">
        <ul class="mm_menu">
            <li>
                <span>
                    <i class="icon-settings"></i>
                </span>
                <a href="{{ route('UserEditProfile') }}">Settings</a>
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
    </div><!--sd_menu end-->

    <div class="dd_menu"></div>
</div><!--side_menu end-->
