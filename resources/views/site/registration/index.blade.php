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
        
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form action="{{ route('site.registration.store') }}" method="POST" enctype="multipart/form-data" class="row">
                    @csrf

                @include('forms._formRegistration.index')
            </div>

            <div class="form-group text-center">
                <button type="submit"  class="btn-fill size-xs color-green border-radius-5 gust">
                    Salvar
                    <span class="fe fe-chevron-right fe-16"></span>
                </button>

            </div>
        </form>
        </div>

    </div>

    @if (session('create'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Registro feito com sucesso!',
            showConfirmButton: true
        })
    </script>
    @endif

@endsection
