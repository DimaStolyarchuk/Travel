@extends('layout')

@section('main')
        <!-- #masthead -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area column full">
                <main id="main" class="site-main">

                    <article class="hentry">
                        @foreach($dataAbouts as $dataAbout)
                        <header class="entry-header">
                            <h1 class="entry-title">{{ $dataAbout->title }}</h1>
                        </header>
                        <!-- .entry-header -->

                        <div class="entry-content">
                            <p><img style="border:10px solid #f4f5f6" src="{{ asset('storage/'. $dataAbout->image) }}" alt="bg5" width="430" class="alignright"></p>
                            <p>{{ $dataAbout->description }}</p>
                            <h2 style="font-family: 'Herr Von Muellerhoff';color:#ccc;font-weight:300;">Your, Good Fly</h2>
                        </div><!-- .entry-content -->
                    </article>
                    @endforeach
                </main>
                <!-- #main -->
            </div>
            <!-- #primary -->

        </div>
        <!-- #content -->
    </div>
    <!-- .container -->
@endsection
