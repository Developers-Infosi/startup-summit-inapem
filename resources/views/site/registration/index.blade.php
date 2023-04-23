@extends('layouts.merge.site')
@section('titulo', 'Ficha de inscrição')
@section('content')
<div id="content" class="site-content">

    <div class="entry-banner">
        <div class="inner-page-banner">
            <div class="container">
                <div class="entry-banner-content breadcrumbs-area">
                    <h1 class="entry-title">Ficha de inscrição (Expositor)

                    </h1>

                </div>
            </div>
        </div>
    </div>

    <div id="primary" class="content-area event-page-area py-5">
        <div class="container">
            <div class="row">



                @include('forms._formRegistration.index')
            </div>

            <div class="form-group text-center">
                <button type="submit"  class="btn-fill size-xs color-green border-radius-5 gust">
                    Salvar
                    <span class="fe fe-chevron-right fe-16"></span>
                </button>

            </div>
        </div>

    </div>



@endsection
