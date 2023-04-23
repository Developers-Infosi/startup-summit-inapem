@extends('layouts.merge.site')
@section('titulo', 'Agenda de Eventos & Actividades')
@section('content')

    <div id="content" class="site-content">

        <div class="entry-banner">
            <div class="inner-page-banner">
                <div class="container">
                    <div class="entry-banner-content breadcrumbs-area">
                        <h1 class="entry-title">Programa</h1>


                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12 py-5">
                      <!-- AGENDA-->
                      <div class="elementor-widget-wrap elementor-element-populated my-5 py-5">

                        @include('extra._schedule.index')
                    </div>
                    <!-- END AGENDA-->
                </div>
            </div>
        </div>

    </div>

@endsection
