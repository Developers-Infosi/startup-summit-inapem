@extends('layouts.merge.site')
@section('titulo', ' Notícias')
@section('content')



<div id="content" class="site-content">

    <div class="entry-banner">
        <div class="inner-page-banner">
            <div class="container">
                <div class="entry-banner-content breadcrumbs-area">
                    <h1 class="entry-title">Notícias</h1>

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
                                @foreach ($news as $item)
                                <div
                                    class="rtin-item post-each post-each-new-1 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                    <div class="entry-thumbnail-area">
                                        <a href="{!! url('/noticia/' . urlencode($item->title)) !!}"
                                            class="entry-title" rel="bookmark">
                                            <img width="570" height="380"
                                                src="/storage/{{ $item->path }}"
                                                class="attachment-eventalk-size3 size-eventalk-size3 wp-post-image"
                                                alt="" decoding="async"
                                                loading="lazy" />
                                        </a>
                                    </div>
                                    <div class="entry-content-area">
                                        <div class="entry-header">
                                            <ul class="entry-meta-1">

                                                <li><span
                                                        class="updated published">
                                                        <i class="fa fa-calendar"
                                                            aria-hidden="true"></i>
                                                        {{ date('d/m/Y', strtotime($item->date)) }}</span>
                                                </li>

                                            </ul>
                                            <h3><a href="{!! url('/noticia/' . urlencode($item->title)) !!}"
                                                    class="entry-title"
                                                    rel="bookmark">{{ $item->title }}</a>
                                            </h3>
                                        </div>

                                    </div>
                                </div>
                            @endforeach


                            </div>

                        </div>
                    </section>
                </div>

            </div>
        </div>

    </div>
</div>



@endsection

@section('JS')
    <script src="/site/js/HttpRequest.js"></script>
    <script src="/site/js/alert.js"></script>
@endsection
