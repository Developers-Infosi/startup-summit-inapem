@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes do registo')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.feedback.index') }}"><u>Lista De Feedbacks</u></a> >
                {{ $feedback->company_name }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row justify-content-between mb-4">


                        </div>
                        <div class="row mx-5 mb-5 align-items-center">

                            <div class="row align-items-center">
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <h5 class="mb-2">
                                                <b>Nome</b>
                                            </h5>
                                            <p class="text-dark">

                                                {{ $feedback->name }}
                                            </p>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Assunto</b>
                                    </h5>
                                    <p class="text-dark">
                                        {{ $feedback->subject }}
                                    </p>


                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Email</b>
                                    </h5>
                                    <p class="text-dark">
                                        {{ $feedback->email }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Mensagem</b>
                                    </h5>
                                    <p class="text-dark">
                                        {{ $feedback->msg }}
                                    </p>
                                </div>




                            </div>
                        </div>

                            <div class="row align-items-center">
                                <div class="col-md-7 mb-2">
                                    <hr>
                                    <p class="mb-1 text-dark"><b>Data de Cadastro</b> {{ $feedback->created_at }}
                                    </p>
                                    <p class="mb-1 text-dark"><b>Última Actualização</b> {{ $feedback->updated_at }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
        </div>
    </div>
@endsection
