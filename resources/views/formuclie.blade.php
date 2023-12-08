@extends('layout')

@section('contenido')
<div class="container mt-4">
    <h1 class="mb-4">Agregar nuevo cliente</h1>

    <form action="{{ route('clientes.store') }}" method="post">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre del cliente">
            </div>
            <div class="col-md-6">
                <label for="curp" class="form-label">CURP:</label>
                <input type="text" class="form-control" name="curp" placeholder="CURP del cliente">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label for="numero" class="form-label">Número:</label>
                <input type="text" class="form-control" name="numero" placeholder="Número de trabajadores">
            </div>
            <div class="col-md-4">
                <label for="direccion" class="form-label">Dirección:</label>
                <input type="text" class="form-control" name="direccion" placeholder="Dirección del cliente">
            </div>
            <div class="col-md-4">
                <label for="localidad" class="form-label">Localidad:</label>
                <input type="text" class="form-control" name="localidad" placeholder="Localidad del cliente">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary me-2">Agregar</button>
                <a class="btn btn-secondary" href="{{ route('clientes') }}">Cancelar</a>
            </div>
        </div>
    </form>
</div>
@endsection
