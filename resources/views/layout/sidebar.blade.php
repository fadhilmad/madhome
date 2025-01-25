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
    <li class="{{ Route::is(['type_projek.*', 'status_projek.*']) ? 'mm-active' : '' }}">
        <a href="javascript:;"
            class="has-arrow waves-effect {{ Route::is(['type_projek.*', 'status_projek.*']) ? 'mm-active' : '' }}">
            <i class="cil-menu"></i>
            <span>Master Data</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li>
                <a href="{{ route('type_projek.index') }}" class="{{ Route::is('type_projek.*') ? 'active' : '' }}">
                    <i class="cil-menu font-size-12"></i> Type Projek
                </a>
            </li>
            <li>
                <a href="{{ route('status_projek.index') }}" class="{{ Route::is('status_projek.*') ? 'active' : '' }}">
                    <i class="cil-menu font-size-12"></i> Status Projek
                </a>
            </li>
        </ul>
    </li>
    <li class="{{ Route::is(['projek.*', 'perpanjang.*']) ? 'mm-active' : '' }}">
        <a href="javascript:;"
            class="has-arrow waves-effect {{ Route::is(['projek.*', 'perpanjang.*']) ? 'mm-active' : '' }}">
            <i class="cil-menu"></i>
            <span>Manajement</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li>
                <a href="{{ route('projek.index') }}" class="{{ Route::is('projek.*') ? 'active' : '' }}">
                    <i class="cil-menu font-size-12"></i> Projek
                </a>
            </li>
            <li>
                <a href="{{ route('perpanjang.index') }}" class="{{ Route::is('perpanjang.*') ? 'active' : '' }}">
                    <i class="cil-menu font-size-12"></i> Perpanjangan
                </a>
            </li>
        </ul>
    </li>
    <li class="{{ Route::is(['setting.*', 'tentang_kami.*']) ? 'mm-active' : '' }}">
        <a href="javascript:;"
            class="has-arrow waves-effect {{ Route::is(['setting.*', 'tentang_kami.*']) ? 'mm-active' : '' }}">
            <i class="cil-menu"></i>
            <span>Frontend</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li>
                <a href="{{ route('setting.index') }}" class="{{ Route::is('setting.*') ? 'active' : '' }}">
                    <i class="cil-menu font-size-12"></i> Setting
                </a>
            </li>
            <li>
                <a href="{{ route('tentang_kami.index') }}" class="{{ Route::is('tentang_kami.*') ? 'active' : '' }}">
                    <i class="cil-menu font-size-12"></i> Tentang Kami
                </a>
            </li>
        </ul>
    </li>
</ul>
