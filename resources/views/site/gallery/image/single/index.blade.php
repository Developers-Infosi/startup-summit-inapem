@extends('layouts.merge.site')
@section('titulo', 'Galeria de Imagem')
@section('content')


    <div id="content" class="site-content">

        <div class="entry-banner">
            <div class="inner-page-banner">
                <div class="container">
                    <div class="entry-banner-content breadcrumbs-area">
                        <h1 class="entry-title">Detalhes: {{ $gallery->name }}</h1>

                    </div>
                </div>
            </div>
        </div>



        <div id="primary" class="content-area event-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 py-5">
                        <div class="row">

                            @foreach ($images as $item)
                                <a class="fancybox col-lg-4 col-md-6 col-12 py-4" href="/storage/{{ $item->path }} "
                                    data-fancybox="gallery1">

                                    <div class="card-deck">
                                        <div class="card border-0 bg-transparent">
                                            <div class="card-img-top img-fluid rounded"
                                                style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;height:200px;'>
                                            </div>

                                        </div> <!-- .card -->

                                    </div>
                                </a>
                            @endforeach

                        </div>
                        <nav class=" justify-content-center d-flex mt-5">
                            <b> {{ $images->links() }}</b>
                        </nav>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection


@section('CSS')
    {{-- FancyBox to make ImageGallery --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />

    <style>
        .fancybox-container {
            z-index: 100000;
            /* ou qualquer valor maior que o "z-index" do menu */
            background-color: #0e3650;
        }
    </style>
@endsection
@section('JS')
    {{-- FancyBox to make ImageGallery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

@endsection
