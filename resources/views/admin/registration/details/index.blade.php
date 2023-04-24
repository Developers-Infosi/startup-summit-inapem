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
                                    Nome: {{ $registration->company_name }}
                                </h2>
                            </div>

                        </div>
                        <div class="row mx-5 mb-5 align-items-center">

                            <div class="row align-items-center">
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <h5 class="mb-2">
                                                <b>FAX</b>
                                            </h5>
                                            <p class="text-dark">

                                                {{ $registration->fax }}
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <h5 class="mb-2">
                                                <b>

                                                    Morada</b>
                                            </h5>
                                            <p class="text-dark">

                                                {{ $registration->address }}


                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Telemóvel</b>
                                    </h5>
                                    <p class="text-dark">
                                        {{ $registration->phone }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Código postal</b>
                                    </h5>
                                    <p class="text-dark">
                                        {{ $registration->postal_code }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Pessoa a contactar</b>
                                    </h5>
                                    <p class="text-dark">
                                        {{ $registration->contact_person }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>País</b>
                                    </h5>
                                    <p class="text-dark">
                                        {{ $registration->country }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Producto em exposição</b>
                                    </h5>
                                    <p class="text-dark">
                                        {{ $registration->industry_sector }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Número de telefone</b>
                                    </h5>
                                    <p class="text-dark text-justify">
                                        {{ $registration->phone_number }}
                                    </p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Sector de Actividade</b>
                                    </h5>
                                    <p class="text-dark text-justify">
                                        {{ $registration->industry_sector }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Localidade</b>
                                    </h5>
                                    <p class="text-dark text-justify">
                                        {{ $registration->city }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Email</b>
                                    </h5>
                                    <p class="text-dark text-justify">
                                        {{ $registration->email }}
                                    </p>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Site</b>
                                    </h5>
                                    <p class="text-dark text-justify">
                                        {{ $registration->site }}
                                    </p>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-2">
                                    <h5 class="mb-1">
                                        <b>Número de contrinuinte(NIF)</b>
                                    </h5>
                                    <p class="text-dark text-justify">
                                        {{ $registration->nif }}
                                    </p>
                                </div>



                                <div class="col-12 mb-4">
                                    <h5 class="mb-1">
                                        <b>Fotografia de de Pagamento</b>
                                    </h5>

                                    <div class="col-12 col-md-6 col-lg-4">

                                        <img src="/storage/{{ $registration->payment }}" width="100%">
                                    </div>
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
