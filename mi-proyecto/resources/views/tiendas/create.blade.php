@extends('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h2>INGRESO TIENDA</h2>
    </div>
    </div>

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
       
        <!-- New Task Form -->
        <form action="/tienda/save" method="POST" >
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="nombre" class="col-sm-3 control-label">NOMBRE COMERCIAL </label>
                <input type="text" name="nombre"  class="form-control">
            </div>

            <div class="form-group">
                <label for="nit" class="col-sm-3 control-label">NIT </label>
                <input type="text" name="nit"  class="form-control">
            </div>

            <div class="form-group">
                <label for="encargado_id" class="col-sm-3 control-label">ENCARGADO</label>
                <input type="text" name="encargado_id"  class="form-control">
            </div>

            <div class="form-group">
                <label for="capacidad" class="col-sm-3 control-label">CAPACIDAD</label>
                <input type="text" name="capacidad" class="form-control">
            </div>

            <div class="form-group">
                <label for="ubicacion" class="col-sm-3 control-label">UBICACION</label>
                <input type="text" name="ubicacion"  class="form-control">
            </div>


            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Agregar Tienda
                    </button>
                    <button><a href="{{ '/tienda' }}">Regresar</a></button>
                </div>
            </div>
        </form>
    </div>
    <body background="https://www.xtrafondos.com/wallpapers/textura-de-madera-3426.jpg">
</div>

    <!-- TODO: Current Tasks -->
@endsection