@extends('layouts.merge.site')
@section('titulo', ' Vídeos')
@section('content')

    <div id="content" class="site-content">

        <div class="entry-banner">
            <div class="inner-page-banner">
                <div class="container">
                    <div class="entry-banner-content breadcrumbs-area">
                        <h1 class="entry-title">Vídeos</h1>

                    </div>
                </div>
            </div>
        </div>

        <div id="primary" class="content-area event-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12 py-5">
                        <section class="pt-5 pt-lg-5">
                            <div class=container>
                                <div class="row mx-n3 grid"
                                    data-isotope='{"layoutMode": "masonry", "itemSelector": ".grid-item"}' id=portfolio>

                                    @foreach ($videos as $item)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="ud-single-blog">
                                                <iframe class="img-responsive img-center" width="auto" height="200"
                                                    src="{{ $item->link }}" frameborder="0"
                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>

                                                <div class="ud-blog-content">
                                                    <h5 class="ud-blog-title p-4">{{ $item->title }}</h5>
                                                    <p class="ud-blog-desc">
                                                        {{ $item->description }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div class="row justify-content-center">
                                        <div class="col-md-4">
                                            <h6>{{ $videos->links() }}</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>
            </div>

        </div>
    </div>









@endsection
