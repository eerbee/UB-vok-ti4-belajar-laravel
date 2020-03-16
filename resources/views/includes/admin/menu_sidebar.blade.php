<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="/dashboard">
            <h3>TREEBO LIBRARY</h3>
            <h4>Administrator Panel</h4>
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="has-sub">
                    <a href="{{url('/dashboard')}}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{url('/buku')}}">
                        <i class="fas fa-book"></i>Data Buku
                    </a>
                </li>
                <li>
                    <a href="{{url('/kategori')}}">
                        <i class="fas fa-table"></i>Kategori Buku
                    </a>
                </li>
                <li>
                    <a href="{{url('/kalendar')}}">
                        <i class="fas fa-calendar-alt"></i>Calendar
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->