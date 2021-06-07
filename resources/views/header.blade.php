<header id="masthead" class="site-header">
    <div class="site-branding">
        <h1 class="site-title"><a href="index.html" rel="home">Good Fly</a></h1>
        <h2 class="site-description">Найкращі тури в Україні</h2>
    </div>
    <nav id="site-navigation" class="main-navigation">
        <button class="menu-toggle">Menu</button>
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
        <div class="menu-menu-1-container">
            <ul id="menu-menu-1" class="menu">
                <li><a href="{{ route('home_index') }}">Головна сторінка</a></li>
                <li><a href="{{ route('about') }}">Про нас</a></li>
                <li><a href="{{ route('tours') }}">Тури</a></li>
                <li><a href="{{ route('blog') }}">Блог</a></li>
                <li><a>Вакансії</a>
                    <ul class="sub-menu">
                        @foreach($vacancies as $dataTour)
                        <li><a href="{{ route('vacancies', ['id' => $dataTour->id]) }}">{{ $dataTour->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href={{ route('contact') }}>Контакти</a></li>
            </ul>
        </div>
    </nav>
</header>
