@extends('layouts.app')

@section('content')

<div class="col-sm-offset-3 col-sm-6">
    <div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h1>Empleado</h1>

    </div>
     </div>
    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->


    

     <!-- New Task Form -->
        <form action="/empleado/{{$empleado->id}}/update" method="POST" >
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="patch"






            <div class="form-group">
                <label for="cui" class="col-sm-3 control-label">CUI DEL EMPLEADO</label>
                <input type="text" name="cui" value="{{$empleado->cui}}"  class="form-control">
            </div>

            <div class="form-group">
                <label for="nombre" class="col-sm-3 control-label">NOMBRE DEL EMPLEADO</label>
                <input type="text" name="nombre" value="{{$empleado->nombre}}"  class="form-control">
            </div>

            <div class="form-group">
                <label for="apellido" class="col-sm-3 control-label">APELLIDO DEL EMPLEADO</label>
                <input type="text" name="apellido" value="{{$empleado->apellido}}"  class="form-control">
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">EMAIL DEL EMPLEADO</label>
                <input type="text" name="email" value="{{$empleado->email}}"  class="form-control">
            </div>

            <div class="form-group">
                <label for="direccion" class="col-sm-3 control-label">DIRECCION DEL EMPLEADO</label>
                <input type="text" name="direccion" value="{{$empleado->direccion}}"  class="form-control">
            </div>

            <div class="form-group">
                <label for="telefono_casa" class="col-sm-3 control-label">TELEFONO DE CASA DEL EMPLEADO</label>
                <input type="text" name="telefono_casa" value="{{$empleado->telefono_casa}}"  class="form-control">
            </div>

            <div class="form-group">
                <label for="telefono_movil" class="col-sm-3 control-label">TELEFONO MOVIL DEL EMPLEADO</label>
                <input type="text" name="telefono_movil" value="{{$empleado->telefono_movil}}"  class="form-control">
            </div>





            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Actualizar Registro
                    </button>
                </div>
            </div>


        </form>
        <form  action="/empleado/remove/{{$empleado->id}}" method="POST" >
            {{ csrf_field() }}

             <input type="hidden" name="_method" value="delete">

             <input type="submit" value="Eliminar Registro">

        </form>
                 <a href="{{ '/empleado' }}"> Regresar</a>

    
    </div>
</div>


@endsection 