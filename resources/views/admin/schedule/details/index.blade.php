@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes da activitya & Actividade')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.schedule.index') }}"><u>Listar activityas & Actividades</u></a> >
                {{ $schedule->activity }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="h3 m-4 page-title">{{ $schedule->activity }}</h2>
                        <div class="row m-5 align-items-center">

                            <div class="col">
                                <div class="row align-items-center">
                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Prelector</b>
                                        </h5>
                                        <p class="text-dark text-justify">{{ $schedule->conference }} </p>

                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Local</b>
                                        </h5>
                                        <p class="text-dark text-justify">
                                            {{ $schedule->local }}
                                        </p>

                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <h5 class="mb-1">
                                            <b>Hora</b>
                                        </h5>
                                        <p class="text-dark text-justify">
                                            {{ date('H:i', strtotime($schedule->start)) }}
                                            -{{ date('H:i', strtotime($schedule->end)) }}
                                        </p>

                                    </div>
                                    @if ($schedule->speaker)
                                        <div class="col-md-12 mb-2">
                                            <h5 class="mb-1">
                                                <b>Orador</b>
                                            </h5>
                                            <p class="text-dark text-justify">{{ $schedule->speaker . '-' . $schedule->title }}
                                            </p>

                                        </div>
                                    @endif
                                    @if ($schedule->description)
                                        <div class="col-md-12 mb-2">
                                            <h5 class="mb-1">
                                                <b>Descrição</b>
                                            </h5>
                                            <p class="text-dark text-justify">{!! html_entity_decode($schedule->description) !!}</p>

                                        </div>
                                    @endif

                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-7 mb-2">
                                        <hr>
                                        <p class="mb-1 text-dark"><b>Data de Cadastro:</b> {{ $schedule->created_at }}
                                        </p>
                                        <p class="mb-1 text-dark"><b>Última Actualização:</b> {{ $schedule->updated_at }}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div> <!-- /.col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->


        </div>
    </div>


@endsection
