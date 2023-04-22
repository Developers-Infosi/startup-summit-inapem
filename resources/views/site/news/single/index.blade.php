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

        <div id="primary" class="content-area event-page-area py-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-9 col-xs-12">
                        <main id="main" class="site-main">
                            <article id="post-599"
                                class="post-each post-each-single post-599 post type-post status-publish format-standard has-post-thumbnail hentry category-home4">

                                <div class="entry-thumbnail-area">
                                    <img width="770" height="438" src="/storage/{{ $news->path }}"
                                        class="attachment-eventalk-size1 size-eventalk-size1 wp-post-image" alt=""
                                        decoding="async" />
                                </div>
                                <div class="entry-content-area single-blog-wrapper">
                                    <h2>{{ $news->title }}</h2>
                                    <ul class="news-meta-info mar20-ul">
                                        <li class="item-date">
                                            <i class="fa fa-calendar" aria-hidden="true"></i><span
                                                class="updated published"> Postado em:
                                                {{ date('d-M-Y', strtotime($news->date)) }}</span>
                                        </li>

                                        <li class="vcard-author"><i class="fa fa-user" aria-hidden="true"></i><span
                                                class="vcard author"><a href="#"
                                                    class="fn">{{ $news->typewriter }}</a></span>
                                        </li>





                                    </ul>
                                    <div class="entry-content  single-blog-content-holder">
                                        <p> {!! html_entity_decode($news->body) !!}</p>

                                    </div>
                                </div>
                            </article>

                        </main>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <aside class="sidebar-widget-area">
                           
                            <div id="categories-2" class="widget widget_categories single-sidebar padding-bottom1">
                                <h3 class="widgettitle">Outras Notícias</h3>
                                <ul>
                                    @foreach ($lasted as $item)
                                    <li class="cat-item cat-item-7">    <a href="{!! url('/noticia/' . urlencode($item->title)) !!}">
                                        <div class="post-img"
                                            style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;height:70px;'>
                                        </div>

                                    </a>
                                    </li>

                                    @endforeach
                                </ul>

                            </div>


                        </aside>
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
