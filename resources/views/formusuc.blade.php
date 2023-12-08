@extends('layout')

@section('contenido')
<div class="container mt-4">
    <h1>Agregar nueva sucursal</h1>

    <form action="{{ route('sucursal.store') }}" method="post">
        @csrf

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="tipo_de_sucursal" class="form-label">Tipo de sucursal:</label>
                    <input type="text" class="form-control" name="tipo_de_sucursal" placeholder="Ingrese el tipo de sucursal">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="ubicacion" class="form-label">Ubicación:</label>
                    <input type="text" class="form-control" name="ubicacion" placeholder="Ingrese la ubicación de la sucursal">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="empleados" class="form-label">Número de trabajadores:</label>
                    <input type="text" class="form-control" name="empleados" placeholder="Ingrese el número de trabajadores">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="numero_sucursal" class="form-label">Número de la sucursal:</label>
                    <input type="text" class="form-control" name="numero_sucursal" placeholder="Ingrese el número de sucursal">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
            <div class="col-md-6">
                <a class="btn btn-danger" href="{{ route('sucursal') }}">Cancelar</a>
            </div>
        </div>
    </form>
</div>
@endsection
