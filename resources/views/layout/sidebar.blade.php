<ul class="metismenu list-unstyled" id="side-menu">
    <li class="menu-title">List Menu</li>
    <li class="{{ Route::is('dashboard') ? 'mm-active' : '' }}">
        <a href="{{ route('dashboard') }}" class="waves-effect">
            <i class="cil-home"></i>
            <span>Dashboards</span>
        </a>
    </li>
    <li class="{{ Route::is('user.*') ? 'mm-active' : '' }}">
        <a href="{{ route('user.index') }}" class="waves-effect">
            <i class="cil-menu"></i>
            <span>User</span>
        </a>
    </li>
    <li class="{{ Route::is('tentang_kami.*') ? 'mm-active' : '' }}">
        <a href="{{ route('tentang_kami.index') }}" class="waves-effect">
            <i class="cil-menu"></i>
            <span>TentangKami</span>
        </a>
    </li>
</ul>
