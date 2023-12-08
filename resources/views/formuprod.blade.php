@extends('layout')

@section('contenido')
<div class="container mt-4">
    <h1>Agregar nuevo producto</h1>

    <form action="{{ route('prod.store') }}" method="post">
        @csrf

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="baño" class="form-label">Tamaño:</label>
                    <input type="text" class="form-control" name="baño" placeholder="Ingrese el tamaño del baño">
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
                    <label for="color" class="form-label">Color:</label>
                    <input type="text" class="form-control" name="color" placeholder="Ingrese el color del baño">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="adquisicion" class="form-label">Fecha de adquisición:</label>
                    <input type="text" class="form-control" name="adquisicion" placeholder="Ingrese la fecha de adquisición">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
            <div class="col-md-6">
                <a class="btn btn-danger" href="{{ route('prod') }}">Cancelar</a>
            </div>
        </div>
    </form>
</div>
@endsection
