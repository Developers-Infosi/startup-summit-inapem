@extends('layouts.merge.dashboard')
@section('titulo', 'Lista De Participantes')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                Lista De Inscrições
            </h2>
        </div>
    </div>
    <div class="card shadow mb-4">

        <div class="card-body">
            <table class="table datatables table-hover table-bordered" id="dataTable-1">
                <thead class="bg-primary">
                    <tr class="text-center">
                        <th>#</th>
                        <th>Nome da empresa</th>
                        <th>Telemóvel/BI</th>
                        <th>Número de contrinuinte(NIF)
                        </th>
                        <th>PAÍS</th>
                        <th>Código postal</th>
                      
                        <th>ACÇÕES</th>
                    </tr>
                </thead>
                <tbody class="bg-white">

                    @foreach ($registrations as $item)
                        <tr class="text-center text-dark">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->company_name }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->nif }} </td>
                            <td>{{ $item->country }}</td>
                            <td>{{ $item->postal_code }}</td>


                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                        <a href='{{ route('admin.registration.show', $item->id) }}'
                                            class="dropdown-item">Detalhes</a>

                                        @if ($item->status == 'EMITIDO' || $item->status == 'PAGO')
                                            <a href='{{ route('admin.credencial.guest.print', $item->code) }}'
                                                class="dropdown-item" target='_blank'>Imprimir Credencial</a>
                                        @endif

                                        <a href='{{ route('admin.registration.edit', $item->id) }}'
                                            class="dropdown-item">Editar</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('JS')
    <script>
        $('#dataTable-2').DataTable({
            autoWidth: true,
            "lengthMenu": [
                [8, 16, 32, -1],
                [8, 16, 32, "All"]
            ],
            "order": [
                [0, 'desc']
            ]
        });
    </script>
@endsection
