@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes do registo')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.registration.index') }}"><u>Lista De Participantes</u></a> >
                {{ $registration->company_name }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row justify-content-between mb-4">
                            <div class="col-12 col-md-6 col-lg-6 mt-5 ml-5">
                                <h2 class="h3 page-title">
                                    Nome: {{ $registration->name }}
                                </h2>
                            </div>

                        </div>
                        <div class="row mx-5 mb-5 align-items-center">

                            <div class="row align-items-center">
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <h5 class="mb-2">
                                                <b>BI</b>
                                            </h5>
                                            <p class="text-dark">

                                                {{ $registration->bi }}
                                            </p>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Telemóvel</b>
                                    </h5>
                                    <p class="text-dark">
                                        {{ $registration->tel }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Email</b>
                                    </h5>
                                    <p class="text-dark">
                                        {{ $registration->email }}
                                    </p>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-12 mb-12">
                                        <h3 class="text-center">Actividades inscritas</h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                                @foreach ($programRegistraios as $item )

                                <div class="col-12 col-md-6 col-lg-6 mb-2">
                                    <h5 class="mb-1">
                                        <b>Conferências</b>
                                    </h5>
                                    <p class="text-dark">
                                        {{ $item->programs->conference }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6 mb-2">
                                    <h5 class="mb-1">
                                        <b>Actividade</b>
                                    </h5>
                                    <p class="text-dark">
                                        {{ $item->programs->activity }}
                                    </p>
                                </div>
                                @endforeach

                            </div>
                        </div>

                            <div class="row align-items-center">
                                <div class="col-md-7 mb-2">
                                    <hr>
                                    <p class="mb-1 text-dark"><b>Data de Cadastro</b> {{ $registration->created_at }}
                                    </p>
                                    <p class="mb-1 text-dark"><b>Última Actualização</b> {{ $registration->updated_at }}
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
