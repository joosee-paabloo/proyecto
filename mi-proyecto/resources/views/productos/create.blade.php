@extends('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h2>INGRESO EMPLEADO</h2>
    </div>
    </div>

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
       
        <!-- New Task Form -->
        <form action="/empleado/save" method="POST" >
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="codigo" class="col-sm-3 control-label">CODIGO </label>
                <input type="text" name="codigo"  class="form-control">
            </div>

            <div class="form-group">
                <label for="nombre" class="col-sm-3 control-label">NOMBRE </label>
                <input type="text" name="nombre"  class="form-control">
            </div>

            <div class="form-group">
                <label for="proveedor_id" class="col-sm-3 control-label">ID DEL PROVEEDOR</label>
                <input type="text" name="proveedor_id"  class="form-control">
            </div>

            <div class="form-group">
                <label for="ubicacion" class="col-sm-3 control-label">UBICACION</label>
                <input type="text" name="ubicacion" class="form-control">
            </div>

            <div class="form-group">
                <label for="costo" class="col-sm-3 control-label">COSTO</label>
                <input type="text" name="costo"  class="form-control">
            </div>

            <div class="form-group">
                <label for="precio_venta" class="col-sm-3 control-label">PRECIO DE VENTA</label>
                <input type="text" name="precio_venta"  class="form-control">
            </div>


            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Agregar Empleado
                    </button>
                    <button><a href="{{ '/empleado' }}">Regresar</a></button>
                </div>
            </div>
        </form>
    </div>
    <body background="https://www.xtrafondos.com/wallpapers/textura-de-madera-3426.jpg">
</div>

    <!-- TODO: Current Tasks -->
@endsection