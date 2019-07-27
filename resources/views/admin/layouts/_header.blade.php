<div class="header-left">
    <a href="{{ route('dashboard') }}" class="logo">
        <img src="assets/admin/img/logo.png" width="40" height="40" alt="">
    </a>
</div>
<div class="page-title-box pull-left">
    <h3></h3>
</div>
<a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
<ul class="nav navbar-nav navbar-right user-menu pull-right">
    <li class="dropdown">
            <li>
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <input type="submit" value="Logout" style="margin-left: 22px">
                </form>
            </li>
        </ul>
    </li>
</ul>
