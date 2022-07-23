<div class="sidebar">
    <div class="widget account">
        <h2 class="hd-uc"> <i class="icon-home"></i> Home</h2>
        <ul>
            <li><a href="{{ route('main') }}">Home</a></li>
        </ul>
    </div>
    <div class="widget account">
        <h2 class="hd-uc"> <i class="icon-fire"></i> Dashboard</h2>
        <ul>
            <li><a href="{{ route('UserDashboard') }}">Dashboard</a></li>
        </ul>
    </div>
    <div class="widget account">
        <h2 class="hd-uc"> <i class="icon-user"></i> Account</h2>
        <ul>
            <li><a href="{{ route('UserEditProfile') }}">Update Profile</a></li>
            <li><a href="{{ route('UserEditPassword') }}">Update Password</a></li>
        </ul>
    </div>
    <div class="widget chanel-pro">
        <h2 class="hd-uc"><i class="icon-play"></i>Videos</h2>
        <ul>
            <li><a href="{{ route('UserAddVideo') }}">Add New</a></li>
        </ul>
    </div>
</div>
