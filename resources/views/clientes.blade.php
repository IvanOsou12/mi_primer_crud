@extends('layout')

@section('contenido')
    <br>
    <h1>Clientes</h1>
    <br>
    <a class="nav-link" href="{{ route('clientes.create') }}">
        <h4><button type="button" class="btn btn-light">Agregar nuevo cliente</button></h4>
    </a>

    <br>


    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">

                <tr>
                    <th>ID</th>
                    <th>Nombre del cliente</th>
                    <th>CURP</th>
                    <th>Número</th>
                    <th>Dirección</th>
                    <th>Localidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $clie)
                    <tr>
                        <td>{{ $clie->id }}</td>
                        <td>{{ $clie->nombre }}</td>
                        <td>{{ $clie->curp }}</td>
                        <td>{{ $clie->numero }}</td>
                        <td>{{ $clie->direccion }}</td>
                        <td>{{ $clie->localidad }}</td>
                        <td>
                            <a href="{{ route('clientes.edit', $clie->id) }}" data-toggle="modal"
                                data-target="#modaleditar{{ $clie->id }}" class="btn btn-small btn-success">Editar</a>
                            <a href="{{ route('clientes.destroy', $clie->id) }}" class="btn btn-danger"
                                onclick="return confirm('¿Quieres eliminar este cliente?')">Eliminar</a>
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="modaleditar{{ $clie->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Actualizar cliente</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('clientes.update', $clie->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputtext">Nombre</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre"
                                                    value="{{ $clie->nombre }}">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputtext">Nombre</label>
                                                    <input type="text" class="form-control" id="curp" name="curp"
                                                        value="{{ $clie->curp }}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputtext">Número</label>
                                                    <input type="text" class="form-control" id="numero" name="numero"
                                                        value="{{ $clie->numero }}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputtex">Dirección</label>
                                                    <input type="text" class="form-control" id="direccion"
                                                        name="direccion" value="{{ $clie->direccion }}">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputtext">Localidad</label>
                                                    <input type="text" class="form-control" id="localidad"
                                                        name="localidad" value="{{ $clie->localidad }}">
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cerrar</button>
                                                <button type="Submit" class="btn btn-primary">Modificar</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
