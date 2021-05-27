@extends('layout')

@section('main')
        <!-- #masthead -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area column full">
                <main id="main" class="site-main">
                    <div class="grid portfoliogrid">
                        @foreach($DataHomes as $dataHome)
                        <article class="hentry">
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <a href="portfolio-item.html"><img src="{{ asset('storage/'. $dataHome->image) }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="p1"/></a>
                                </div>
                                <h2 class="entry-title"><a rel="bookmark">{{ $dataHome->title }}</a></h2>
                                <a class='portfoliotype' href='portfolio-category.html'>Місцевий калорит</a>
                                <a class='portfoliotype' href='portfolio-category.html'>Розваги</a>
                                <a class='portfoliotype' href='portfolio-category.html'>Страви</a>
                            </header>
                        </article>
                        @endforeach
                    </div>
                    <!-- .grid -->

{{--                    <nav class="pagination">--}}
{{--                        <span class="page-numbers current">1</span>--}}
{{--                        <a class="page-numbers" href="#">2</a>--}}
{{--                        <a class="next page-numbers" href="#">Next »</a>--}}
{{--                    </nav>--}}
                    <br/>

                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->
        </div>
        <!-- #content -->
    </div>
    <!-- .container -->
@endsection

