<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{request()->is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
    <a class="nav-link {{request()->is('user*') ? 'active' : ''}}" href="/user">
        <span data-feather="alert-octagon" class="align-text-bottom"></span>
        User
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{request()->is('setting*') ? 'active' : ''}}" href="/setting">
        <span data-feather="alert-octagon" class="align-text-bottom"></span>
        Setting
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{request()->is('blog*') ? 'active' : ''}}" href="/blog">
        <span data-feather="alert-octagon" class="align-text-bottom"></span>
        Blog
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{request()->is('portofolio*') ? 'active' : ''}}" href="/portofolio">
        <span data-feather="alert-octagon" class="align-text-bottom"></span>
        Portofolio
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{request()->is('profil*') ? 'active' : ''}}" href="/profil">
        <span data-feather="alert-octagon" class="align-text-bottom"></span>
        Profil
    </a>
</li>


        </ul>

        <h6
            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>reports</span>
        </h6>

        <ul class="nav flex-column mb-2">
             <li class="nav-item">
    <a class="nav-link" href="/user-export">
        <span data-feather="file-text" class="align-text-bottom"></span>
        User
    </a>
</li>

 <li class="nav-item">
    <a class="nav-link" href="/setting-export">
        <span data-feather="file-text" class="align-text-bottom"></span>
        Setting
    </a>
</li>

 <li class="nav-item">
    <a class="nav-link" href="/blog-export">
        <span data-feather="file-text" class="align-text-bottom"></span>
        Blog
    </a>
</li>

 <li class="nav-item">
    <a class="nav-link" href="/portofolio-export">
        <span data-feather="file-text" class="align-text-bottom"></span>
        Portofolio
    </a>
</li>

 <li class="nav-item">
    <a class="nav-link" href="/profil-export">
        <span data-feather="file-text" class="align-text-bottom"></span>
        Profil
    </a>
</li>


        </ul>
    </div>
</nav>
