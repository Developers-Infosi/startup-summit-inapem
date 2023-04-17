@extends('layouts.merge.site')
@section('titulo', 'Perguntas Frequentes')
@section('content')

    <div id="content" class="site-content">
        <div class="entry-banner">
            <div class="inner-page-banner">
                <div class="container">
                    <div class="entry-banner-content breadcrumbs-area">
                        <h1 class="entry-title">Perguntas Frequentes</h1>

                        <div class="breadcrumb-area">
                            <div class="entry-breadcrumb">
                                <!-- Breadcrumb NavXT 7.1.0 -->
                                <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                                        title="Angola" href="#" class="home"><span
                                            property="name">Fórum</span></a>
                                    <meta property="position" content="1">
                                </span> &gt; <span property="itemListElement" typeof="ListItem">
                                    <span property="name">
                                        Perguntas Frequentes
                                    </span>
                                    <meta property="position" content="2">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div id="primary" class="content-area event-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12 py-5 my-5">

                        <div class=accordion id=accordionFAQs>
                            @foreach ($faqs as $item)
                                <div class="card">
                                    <div class="" id="heading{{ $item->id }}">

                                        <button class="bg-white text-left text-dark px-5 py-5 collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse{{ $item->id }}" aria-expanded="false"
                                            aria-controls="collapse{{ $item->id }}">
                                            <b>{{ $item->id.". ".$item->title }}</b>
                                        </button>

                                    </div>
                                    <div id="collapse{{ $item->id }}" class="collapse"
                                        aria-labelledby="heading{{ $item->id }}" data-parent=#accordionFAQs>
                                        <div class="card-body bg-light border-bottom px-4 py-5 px-lg-5 font-size-5">
                                            {!! html_entity_decode($item->description) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
