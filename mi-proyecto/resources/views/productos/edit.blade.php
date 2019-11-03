@extends('layouts.app')

@section('content')

<div class="col-sm-offset-3 col-sm-6">
    <div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h1>Producto</h1>

    </div>
     </div>
    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->


    

     <!-- New Task Form -->
        <form action="/producto/{{$producto->id}}/update" method="POST" >
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="patch"






            <div class="form-group">
                <label for="codigo" class="col-sm-3 control-label">CODIGO DEL PRODUCTO</label>
                <input type="text" name="codigo" value="{{$producto->codigo}}"  class="form-control">
            </div>

            <div class="form-group">
                <label for="nombre" class="col-sm-3 control-label">NOMBRE DEL PRODUCTO</label>
                <input type="text" name="nombre" value="{{$producto->nombre}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="poveedor_id" class="col-sm-3 control-label">ID DEL PROVEEDOR</label>
                <input type="text" name="proveedor_id" value="{{$producto->proveedor_id}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="ubicacion" class="col-sm-3 control-label">UBICACION</label>
                <input type="text" name="ubicacion" value="{{$producto->ubicacion}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="costo" class="col-sm-3 control-label">COSTO</label>
                <input type="text" name="costo" value="{{$producto->costo}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="precio_venta" class="col-sm-3 control-label">PRECIO DE LA VENTA</label>
                <input type="text" name="precio_venta" value="{{$producto->precio_venta}}" class="form-control">
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
        <form  action="/prodcuto/remove/{{$producto->id}}" method="POST" >
            {{ csrf_field() }}

             <input type="hidden" name="_method" value="delete">

             <input type="submit" value="Eliminar Registro">

        </form>
                 <a href="{{ '/producto' }}"> Regresar</a>

    
    </div>
</div>


@endsection 