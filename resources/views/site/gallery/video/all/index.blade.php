@extends('layouts.merge.site')
@section('titulo', ' Vídeos')
@section('content')


<main id="main">
    <div class="header-bg22 page-area">
        <div class="home-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="height: 70vh !important;">
                    <div class="slider-content text-center">
                        <div class="header-bottom">
                            <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding p-10 py-10" style="margin: 0 auto !important;">
        <div class="container">
            <div class="row">

                <div class="col-md-10 col-sm-10 col-xs-10" style="margin: 0 auto !important;">
                    <div class="section-headline text-center">
                        <h2>Galeria de Vídeos </h2>
                    </div>
                </div>

            </div><br>


        </div>
    </div>
    <section class="ud-blog-grids p-10 py-10 " style="margin-top:70px;">
        <div class="container">
            <div class="row p-10 py-10">

                @foreach ($videos as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="ud-single-blog">
                            <iframe class="img-responsive img-center" width="auto" height="200" src="{{ $item->link }}"
                                frameborder="0"
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


            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <h6>{{ $videos->links() }}</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->
</main>





@endsection
