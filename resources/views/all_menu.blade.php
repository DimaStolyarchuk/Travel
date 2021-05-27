<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Good Fly | Найкращі тури в Україні</title>
    <link rel='stylesheet' href='style.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('css/new_style.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('css/woocommerce.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
</head>
<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
<div id="page">
    <div class="container">
        <header id="masthead" class="site-header">
            <div class="site-branding">
                <h1 class="site-title"><a href="/" rel="home">Good Fly</a></h1>
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
                        <li><a href="{{ route('vacancies') }}">Вакансії</a>
                            <ul class="sub-menu">
                                <li><a href="portfolio-item.html">Туроператор</a></li>
                                <li><a href="blog-single.html">Адміністратор</a></li>
                                <li><a href="shop-single.html">Прибиральнік</a></li>
                                <li><a href="portfolio-category.html">Системний адміністратор</a></li>
                            </ul>
                        </li>
                        <li><a href={{ route('contact') }}">Контакти</a></li>
                    </ul>
                </div>
            </nav>
        </header>
