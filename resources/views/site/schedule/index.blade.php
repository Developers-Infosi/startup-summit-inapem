@extends('layouts.merge.site')
@section('titulo', 'Agenda de Eventos & Actividades')
@section('content')

    <div id="content" class="site-content">

        <div class="entry-banner">
            <div class="inner-page-banner">
                <div class="container">
                    <div class="entry-banner-content breadcrumbs-area">
                        <h1 class="entry-title">Agenda</h1>


                    </div>
                </div>
            </div>
        </div>

        <div class="elementor-section elementor-top-section elementor-element elementor-element-d0936b1 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
            data-id="d0936b1" data-element_type="section" data-settings='{"stretch_section":"section-stretched"}'>
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b6995e3"
                    data-id="b6995e3" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated py-5 my-5">


                        @include('extra._schedule.index')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
