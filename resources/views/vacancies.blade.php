@extends('layout')

@section('main')
        <!-- #masthead -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area column two-thirds single-portfolio">
                <main id="main" class="site-main">
                    @foreach($dataVacancys as $dataVacancy)
                        <h1 class="entry-title">{{ $dataVacancy->title }}</h1>
                    <article class="portfolio hentry">
                        <header class="entry-header">
                            <div class="entry-thumbnail">
                                <p><img src="{{ asset('storage/'. $dataVacancy->image) }}"></p>
                            </div>
                        </header>
                        <div class="entry-content">
                            <p>
                                {{ $dataVacancy->description }}
                            </p>
                        </div>
                    </article>
                    <!-- .navigation -->
                    @endforeach
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->

{{--            <div id="secondary" class="column third">--}}
{{--                <div class="widget-area">--}}
{{--                    <aside class="widget">--}}
{{--                        <h4 class="widget-title">Request similar project</h4>--}}
{{--                        <form class="wpcf7" method="post" action="contact.php" id="contactform">--}}
{{--                            <div class="form">--}}
{{--                                <p><input type="text" name="name" placeholder="Name *"></p>--}}
{{--                                <p><input type="text" name="email" placeholder="E-mail Address *"></p>--}}
{{--                                <p><textarea name="comment" rows="3" placeholder="Message *"></textarea></p>--}}
{{--                                <input type="submit" id="submit" class="clearfix btn" value="Send">--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                        <div class="done">--}}
{{--                            Your message has been sent. Thank you!--}}
{{--                        </div>--}}
{{--                    </aside>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <!-- #content -->
    </div>
@endsection
