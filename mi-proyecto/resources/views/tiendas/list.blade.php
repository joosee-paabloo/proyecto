@extends('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h2>LISTADO TIENDA</h2>
    </div>
    </div>

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">



			<table border="1">

                <tr>
                        <td>id de Tienda</td>
                        <td>Nombre de Tienda</td>
                        <td>nit de Tienda</td>
                        <td>Encargado de Tienda</td>
                        <td>Ubicacion de tienda</td>
                        <td>Capacidad de Tienda</td>
                        <td>Fecha de Creacion</td>
   
                </tr>
                    @foreach($tienda as $tienda)
                 <tr>
                    <td><a href="{{route('tiendas.edit',$tienda->id)}}"> {{$tienda->id}}</a></td>
                    <td><a href="{{route('tiendas.edit',$tienda->id)}}">  {{$tienda->nombre}}</a></td>
                    <td>  {{$tienda->nit}}</td>   
                    <td>  {{$tienda->encargado_id}}</td>
                    <td>  {{$tienda->ubicacion}}</td>
                    <td>  {{$tienda->capacidad}}</td>
                    <td>  {{$tienda->created_at}}</td>
                </tr>
                    @endforeach
            </table>

            <button><a href="{{ '/tienda' }}">Regresar</a></button>
        </div>
    </div>
    <body background="https://image.freepik.com/vector-gratis/fondo-pincel-acrilico-abstracto-azul-textura-fondo_53876-86373.jpg">
</div>

    <!-- TODO: Current Tasks -->
@endsection

