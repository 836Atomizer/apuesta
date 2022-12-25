@extends('admin.app.layout')

@section('content')

    @include('admin/modals/add-refill')

    <div class="container py-4">
        <div class="card">
            <div class="card-header">
                <b>Recargas</b>
            </div>
            <div class="card-body">
                <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-refill">Agregar</button>
                <button class="btn btn-sm btn-danger">Reporte</button>
                <div class="table-responsive my-4">
                    <table class="table table-hovered">
                        <thead class="bg-dark text-white">
                            <tr>
                                <td>
                                    #
                                </td>
                                <td>
                                    Jugador
                                </td>
                                <td>
                                    Monto
                                </td>
                                <td>
                                    Metodo
                                </td>
                                <td>
                                    Medio
                                </td>
                                <td>
                                    Comprobante
                                </td>
                                <td>
                                    Fecha
                                </td>
                                <td>
                                    Opciones
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($refills as $refill)
                            <tr>
                                <td>{{$refill->number}}</td>
                                <td>{{$refill->player->first_name." ".$refill->player->last_name}}</td>
                                <td>{{$refill->mount}}</td>
                                <td>{{$refill->bank->name}}</td>
                                <td>{{$refill->canal->name}}</td>
                                <td>{{$refill->file_transaction}}</td>
                                <td>{{$refill->created_at}}</td>
                                <td><a href="{{ url('/admin/refill/edit/'.$refill->id) }}" class="btn btn-sm btn-primary m-1"><i class='fa fa-edit'></i></a> <a href="{{ url('/admin/refill/view/'.$refill->id) }}" class="btn btn-sm btn-danger m-1"><i class='fa fa-eye'></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
