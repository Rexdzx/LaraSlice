<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.dashboard') }}">DA</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">MAIN MENU</li>
            <li class="{{ setActive('admin/dashboard') }}"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i
                        class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span></a></li>
            </li>
            <li class="menu-header">PENGATURAN</li>

            <li class="{{ setActive('admin/portfolio') }}"><a class="nav-link"
                    href="{{ route('admin.portfolio.index') }}"><i class="fas fa-hotel"></i>
                    <span>Portfolio</span></a></li>

            <li class="{{ setActive('admin/about') }}"><a class="nav-link" href="{{ route('admin.about.index') }}"><i
                        class="fas fa-users"></i>
                    <span>Tentang</span></a></li>
        </ul>
    </aside>
</div>
