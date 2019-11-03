@extends('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h2>LISTADO DE PRODUCTOS</h2>
    </div>
    </div>

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">



			<table border="1">

                <tr>
                        <td>id de Producto</td>
                        <td>Codigo del Producto</td>
                        <td>Nombre del Producto</td>
                        <td>ID del proveedor del Producto</td>
                        <td>Ubicacion del Producto</td>
                        <td>costo del Producto</td>
                        <td>Precio del Producto</td>
                        <td>Fecha de Creacion</td>
   
                </tr>
                    @foreach($producto as $producto)
                 <tr>
                    <td><a href="{{route('productos.edit',$producto->id)}}"> {{$producto->id}}</a></td>    
                    <td><a href="{{route('productos.edit',$producto->id)}}"> {{$producto->codigo}}</a></td>    
                    <td>  {{$producto->nombre}}</td>
                    <td>  {{$producto->proveedor_id}}</td>   
                    <td>  {{$producto->ubicacion}}</td>
                    <td>  {{$producto->costo}}</td>
                    <td>  {{$producto->precio_venta}}</td>
                    <td>  {{$producto->created_at}}</td>
                </tr>
                    @endforeach
            </table>

            <button><a href="{{ '/producto' }}">Regresar</a></button>
        </div>
    </div>
    <body background="https://image.freepik.com/vector-gratis/fondo-pincel-acrilico-abstracto-azul-textura-fondo_53876-86373.jpg">
</div>

    <!-- TODO: Current Tasks -->
@endsection

