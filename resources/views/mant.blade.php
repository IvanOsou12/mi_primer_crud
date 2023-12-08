@extends('layout')

@section('contenido')
    <br>
    <h1>Mantenimiento</h1>
    <br>
    <a class="nav-link" href="{{ route('mant.create') }}">
        <h4><button type="button" class="btn btn-light">Agregar mantenimiento</button></h4>
    </a>
    <br>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>Tipo de mantenimiento</th>
                    <th>Número de serie</th>
                    <th>Estado</th>
                    <th>Tiempo estimado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mant as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->tipo_de_mantenimiento }}</td>
                    <td>{{ $item->numero_de_serie }}</td>
                    <td>{{ $item->estado }}</td>
                    <td>{{ $item->tiempo_estimado }}</td>
                    <td>
                        <a href="{{ route('mant.edit', $item->id) }}" data-toggle="modal"
                            data-target="#modaleditar{{ $item->id }}" class="btn btn-small btn-success">Editar</a>
                        <a href="{{ route('mant.destroy', $item->id) }}" class="btn btn-danger"
                            onclick="return confirm('¿Deseas finalizar con el mantenimiento?')">Finaliar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="exampleModalLabel">Actualizar mantenimiento</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">

                        <div class="col">
                            <label for="inputCity">Estado</label>
                            <input type="text" class="form-control" placeholder="Ingrese ubicación">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <br>
                            <label for="inputCity">Tiempo estimado</label>
                            <input type="text" class="form-control" placeholder="Ingrese no. trabajadores">
                        </div>
                    </div>
                    <section>
                        <section class="row">
                            <section class="col-2"><br>
                                <a class="nav-link" href="{{ route('mant') }}">
                                    <h4><button type="button" class="btn btn-warning">Agregar</button></h4>
                                </a>
                            </section>
                            <section class="col-2"><br>
                                <a class="nav-link" href="{{ route('mant') }}">
                                    <h4><button type="button" class="btn btn-danger">Cancelar</button></h4>
                                </a>
                            </section>
                        </section>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
