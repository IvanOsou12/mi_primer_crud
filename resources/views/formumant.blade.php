@extends('layout')

@section('contenido')
<div class="container mt-4">
    <h1>Agregar mantenimiento</h1>

    <form action="{{ route('mant.store') }}" method="post">
        @csrf

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="tipo_de_mantenimiento" class="form-label">Tipo de mantenimiento:</label>
                    <input type="text" class="form-control" name="tipo_de_mantenimiento" placeholder="Ingrese el tipo de mantenimiento">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="numero_de_serie" class="form-label">Número de serie:</label>
                    <input type="text" class="form-control" name="numero_de_serie" placeholder="Ingrese el número de serie">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="estado" class="form-label">Estado:</label>
                    <input type="text" class="form-control" name="estado" placeholder="Ingrese el estado del mantenimiento">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="tiempo_estimado" class="form-label">Tiempo estimado:</label>
                    <input type="text" class="form-control" name="tiempo_estimado" placeholder="Ingrese el tiempo estimado">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
            <div class="col-md-6">
                <a class="btn btn-danger" href="{{ route('mant') }}">Cancelar</a>
            </div>
        </div>
    </form>
</div>
@endsection
