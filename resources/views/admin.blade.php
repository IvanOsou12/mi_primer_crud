@extends('layout')

@section('contenido')


<div class="card">
    <div class="card-header">
      Información de mantenimiento
    </div>
    <div class="card-body">
      <h5 class="card-title">Mantenimeinto y sucursal</h5>
      <p class="card-text">Aquí podremos ver y descargar el reporte de mantenimiento de los baños en cada sucursal</p>
      <a href="{{ '/repoman' }}" class="btn btn-primary">Ver reporte</a>
    </div>
  </div>

  <br>

  <div class="card">
    <div class="card-header">
      Información de sucursal
    </div>
    <div class="card-body">
      <h5 class="card-title">Sucursal y productos</h5>
      <p class="card-text">Aquí podremos ver y descargar el reporte de cada sucursal con los productos que cuenta</p>
      <a href="{{ '/reposuc' }}" class="btn btn-primary">Ver reporte</a>
    </div>
  </div>

  <br>

  <div class="card">
    <div class="card-header">
      Información de clientes
    </div>
    <div class="card-body">
      <h5 class="card-title">Clientes y productos</h5>
      <p class="card-text">Aquí podremos ver y descargar el reporte de los clientes y sus rentas</p>
      <a href="{{ '/repocli' }}" class="btn btn-primary">Ver reporte</a>
    </div>
  </div>

@endsection
