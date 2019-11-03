@extends('layouts.app')

@section('content')

<div class="col-sm-offset-3 col-sm-6">
    <div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h1>Proveedor</h1>

    </div>
     </div>
    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->


    

     <!-- New Task Form -->
        <form action="/proveedor/{{$proveedor->id}}/update" method="POST" >
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="patch"






            <div class="form-group">
                <label for="nit" class="col-sm-3 control-label">NIT DE PROVEEDOR</label>
                <input type="text" name="nit" value="{{$proveedor->nit}}"  class="form-control">
            </div>

            <div class="form-group">
                <label for="nombre" class="col-sm-3 control-label">NOMBRE PROVEEDOR</label>
                <input type="text" name="nombre" value="{{$proveedor->nombre}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="telefono" class="col-sm-3 control-label">TELEFONO DEL PROVEEDOR</label>
                <input type="text" name="telefono" value="{{$proveedor->telefono}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="direccion" class="col-sm-3 control-label">DIRECCION</label>
                <input type="text" name="direccion" value="{{$proveedor->direccion}}" class="form-control">
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
        <form  action="/proveedor/remove/{{$proveedor->id}}" method="POST" >
            {{ csrf_field() }}

             <input type="hidden" name="_method" value="delete">

             <input type="submit" value="Eliminar Registro">

        </form>
                 <a href="{{ '/proveedor' }}"> Regresar</a>

    
    </div>
</div>


@endsection 