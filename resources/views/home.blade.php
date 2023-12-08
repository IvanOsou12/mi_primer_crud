@extends('layout')
@section('contenido')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">equiRENT-Admin</h1>
        <p class="lead">equiRENT-Admin es un sistema web que ayuda a la empresa a tener un mejor control y gestión sobre los diversos procesos que tienen en su empresa, como alta y baja de clientes, recepción de productos nuevos y dar de baja a productos viejos, y el mantenimiento a los equipos que contiene la empresa.</p>
    </div>
    <div>
        <a href="{{'/instrucciones'}}" class="btn btn-primary">Instrucciones</a>
    </div>
</div>


@endsection
