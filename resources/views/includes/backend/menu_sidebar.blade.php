<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{asset('assets/images/icon/logo.png')}}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="has-sub">
                    <a class="js-arrow" href="{{url('dashboard')}}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{url('buku')}}">
                        <i class="fas fa-book"></i>Buku
                    </a>
                </li>
                <li>
                    <a href="{{url('layouts/backend/hal_peminjaman')}}">
                        <i class="fas fa-table"></i>Peminjaman
                    </a>
                </li>
                <li>
                    <a href="calendar.html">
                        <i class="fas fa-calendar-alt"></i>Calendar
                    </a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>UI Elements</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="ui_elements/button.html">Button</a>
                        </li>
                        <li>
                            <a href="ui_elements/badge.html">Badges</a>
                        </li>
                        <li>
                            <a href="ui_elements/tab.html">Tabs</a>
                        </li>
                        <li>
                            <a href="ui_elements/card.html">Cards</a>
                        </li>
                        <li>
                            <a href="ui_elements/alert.html">Alerts</a>
                        </li>
                        <li>
                            <a href="ui_elements/progress-bar.html">Progress Bars</a>
                        </li>
                        <li>
                            <a href="ui_elements/modal.html">Modals</a>
                        </li>
                        <li>
                            <a href="ui_elements/switch.html">Switchs</a>
                        </li>
                        <li>
                            <a href="ui_elements/grid.html">Grids</a>
                        </li>
                        <li>
                            <a href="ui_elements/fontawesome.html">Fontawesome Icon</a>
                        </li>
                        <li>
                            <a href="ui_elements/typo.html">Typography</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->