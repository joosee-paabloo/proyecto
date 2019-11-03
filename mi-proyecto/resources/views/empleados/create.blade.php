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
                <label for="cui" class="col-sm-3 control-label">CUI </label>
                <input type="text" name="cui"  class="form-control">
            </div>

            <div class="form-group">
                <label for="nombre" class="col-sm-3 control-label">NOMBRE </label>
                <input type="text" name="nombre"  class="form-control">
            </div>

            <div class="form-group">
                <label for="apellido" class="col-sm-3 control-label">APELLIDO</label>
                <input type="text" name="apellido"  class="form-control">
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">EMAIL</label>
                <input type="text" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="direccion" class="col-sm-3 control-label">DIRECCION</label>
                <input type="text" name="direccion"  class="form-control">
            </div>

            <div class="form-group">
                <label for="telefono_casa" class="col-sm-3 control-label">TELEFONO DE CASA</label>
                <input type="text" name="telefono_casa"  class="form-control">
            </div>

            <div class="form-group">
                <label for="telefono_movil" class="col-sm-3 control-label">TELEFONO MOVIL</label>
                <input type="text" name="telefono_movil"  class="form-control">
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