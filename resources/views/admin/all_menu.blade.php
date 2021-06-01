<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item sidebar-category">
            <p>Admin Dima</p>
            <span></span>
        </li>
        <li class="nav-item sidebar-category">
            <p>Меню</p>
            <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="{{ route('admin_home') }}" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">ГОЛОВНА СТОРІНКА(HOME)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_about') }}">
                <span class="menu-title">ПРО НАС(ABOUT)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_tours') }}">
                <span class="menu-title">ТУРИ(TOURS)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_blog') }}">
                <span class="menu-title">БЛОГ(BLOG)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_vacancy') }}">
                <span class="menu-title">ВАКАНСІЇ(VACANCY)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin_contacts') }}">
                <span class="menu-title">КОНТАКТИ(CONTACTS)</span>
            </a>
        </li>
    </ul>
</nav>
