@extends('layouts.merge.site')
@section('titulo', 'Contactos')
@section('content')

    <div id="content" class="site-content">
        <div class="entry-banner">
            <div class="inner-page-banner">
                <div class="container">
                    <div class="entry-banner-content breadcrumbs-area">
                        <h1 class="entry-title">Contactos</h1>
                        <p class="text-white"> Estamos aqui quando você precisar de nós. Precisa de assistência imediata?</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="primary" class="content-area event-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 py-5 my-5">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-5 pl-5 mb-5">
                                <h3 class="py-3 title-bold color-dark title-bar">Informações</h3>

                                <div class="rt-el-contact">
                                    <ul>
                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                                         Hotel Intercontinental Luanda Miramar, <small>Luanda.</small>
                                        </li>


                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <a href="mailto:geral@cybersecuriti.ao">geral@forumciberseguranca.ao</a>
                                        </li>
                                    </ul>
                                </div>


                            </div>

                            <div class="col-12 col-md-6 col-lg-7 mb-5">
                                <h3 class="py-3 title-bold color-dark title-bar">Estamos aqui para ajudá-lo</h3>
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                                <form class="row mx-n2" method="post" action="{{ route('site.help.email') }}">
                                    @csrf
                                    <div class="col-md-6 px-2 mb-3">
                                        <input class="form-control" type="text" name="name" placeholder="Nome"
                                            aria-label="Nome">
                                    </div>

                                    <div class="col-md-6 px-2 mb-3">
                                        <input class="form-control" type="email" name="email" placeholder="E-mail"
                                            aria-label="Email address">
                                    </div>
                                    <div class="col-md-12 px-2 mb-3">
                                        <input class="form-control" type="text" name="subject" placeholder="Assunto"
                                            aria-label="Assunto">
                                    </div>

                                    <div class="col-12 px-2 mb-3">
                                        <textarea class="form-control" rows=7 placeholder="Mensagem" aria-label="Mensagem" name="msg"></textarea>
                                    </div>

                                    <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                        <div class="col-md-12">

                                        </div>
                                    </div>

                                    <div class="row mx-auto">

                                        <button type="submit" class="btn-fill size-lg border-radius-5 color-primary gust">
                                            Submeter
                                        </button>

                                    </div>
                                </form>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class=" py-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15770.913813090965!2d13.2425289!3d-8.8115615!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f389d2b7374f%3A0x2e60a5004490d28a!2sInterContinental%20Luanda%20Miramar%2C%20an%20IHG%20Hotel!5e0!3m2!1spt-PT!2sao!4v1681554545726!5m2!1spt-PT!2sao" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('CSS')
    <style>
        .fa.fa-check-circle {
            color: green;
        }

        small {
            font-size: 15px;
        }

        input[type=text],
        input[type=number],
        input[type=date],
        input[type=email],
        input[type=file],
        select,
        textarea {
            height: 55px !important;
            width: 100% !important;
            background-color: rgba(147, 146, 150, 0.1) !important;
            font-size: 14px !important;
            font-style: italic !important;
            font-weight: 500 !important;
            margin-bottom: 15px !important;
            border-radius: 0 !important;
            border: none !important;
            border-bottom: 2px solid #1F3A86 !important;
        }


        input:hover,
        select:hover,
        textarea:hover {
            border-bottom: 4px solid #1F3A86 !important;
        }

        input::placeholder,
        select::placeholder,
        textarea::placeholder {
            font-size: 12px !important;
            color: rgb(147, 146, 150) !important;
        }
    </style>


@endsection
