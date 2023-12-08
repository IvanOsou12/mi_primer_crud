@extends('layout')

@section('contenido')
    <br>
    <h1>Sucursales</h1>
    <br>
    <a class="nav-link" href="{{ route('sucursal.create') }}">
        <h4><button type="button" class="btn btn-light">Agregar nueva sucursal</button></h4>
    </a>
    <br>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
                <tr>
                    <th>Tipo de sucursal</th>
                    <th>Número de sucursal</th>
                    <th>Número de empleados</th>
                    <th>Ubicación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sucursales as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->tipo_de_sucursal }}</td>
                    <td>{{ $item->numero_sucursal }}</td>
                    <td>{{ $item->empleados }}</td>
                    <td>{{ $item->ubicacion }}</td>
                    <td>
                        <a href="{{ route('sucursal', $item->id) }}" data-toggle="modal"
                            data-target="#modaleditar{{ $item->id }}" class="btn btn-small btn-success">Editar</a>
                        <a href="{{ route('sucursal.destroy', $item->id) }}" class="btn btn-danger"
                            onclick="return confirm('¿Quieres eliminar esta sucursal?')">Eliminar</a>
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
                    <h1 class="modal-title" id="exampleModalLabel">Actualizar Sucursal</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col">
                            <label for="inputCity">Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="col">
                            <label for="inputCity">Ubicación</label>
                            <input type="text" class="form-control" placeholder="Ingrese ubicación">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <br>
                            <label for="inputCity">No. trabajadores</label>
                            <input type="text" class="form-control" placeholder="Ingrese no. trabajadores">
                        </div>
                        <div class="col">
                            <br>
                            <label for="inputCity">Responsable</label>
                            <input type="text" class="form-control" placeholder="Ingrese responsable">
                        </div>
                    </div>
                    <section>
                        <section class="row">
                            <section class="col-2"><br>
                                <a class="nav-link" href="{{ route('sucursal') }}">
                                    <h4><button type="button" class="btn btn-warning">Agregar</button></h4>
                                </a>
                            </section>
                            <section class="col-2"><br>
                                <a class="nav-link" href="{{ route('sucursal') }}">
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
