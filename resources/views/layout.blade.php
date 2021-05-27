<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Найкращі тури в Україні</title>
    <link rel='stylesheet' href='{{ asset('css/woocommerce-layout.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('css/woocommerce-smallscreen.css') }}' type='text/css' media='only screen and (max-width: 768px)'/>
    <link rel='stylesheet' href='{{ asset('css/woocommerce.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('css/font-awesome.min.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('css/style.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('css/new_style.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('css/easy-responsive-shortcodes.css') }}' type='text/css' media='all'/>
</head>
<body class="blog">
<div id="page">
    <div class="container">
        @include('header')
        @yield('main')
        <footer id="colophon" class="site-footer">
            <div class="container">
                <div class="site-info">
                    <h1 style="font-family: 'Herr Von Muellerhoff';color: #ccc;font-weight:300;text-align: center;margin-bottom:0;margin-top:0;line-height:1.4;font-size: 46px;">Good Fly</h1>
                    <a target="blank" href="https://www.wowthemes.net/">&copy; Найкращі тури в Україні</a>
                </div>
            </div>
        </footer>
        <a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
    </div>
    <!-- #page -->
    <script src='{{ asset('js/jquery.js') }}'></script>
    <script src='{{ asset('js/plugins.js') }}'></script>
    <script src='{{ asset('js/scripts.js') }}'></script>
    <script src='{{ asset('js/masonry.pkgd.min.js') }}'></script>
</body>
</html>
