@extends('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h2>LISTADO PROVEEDOR</h2>
    </div>
    </div>

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">



			<table border="1">

                <tr>
                        <td>id de Proveedor</td>
                        <td>Nit de Proveedor</td>
                        <td>Nombre de Proveedor</td>
                        <td>Telefono de Proveedor</td>
                        <td>direccion de Proveedor</td>
                        <td>Fecha de Creacion</td>
   
                </tr>
                    @foreach($proveedor as $proveedor)
                 <tr>
                    <td><a href="{{route('proveedores.edit',$proveedor->id)}}"> {{$proveedor->id}}</a></td> 
                    <td>  {{$proveedor->nit}}</td>              
                    <td><a href="{{route('proveedores.edit',$proveedor->id)}}">  {{$proveedor->nombre}}</a></td> 
                    <td>  {{$proveedor->telefono}}</td>
                    <td>  {{$proveedor->direccion}}</td>
                    <td>  {{$proveedor->created_at}}</td>
                </tr>
                    @endforeach
            </table>

            <button><a href="{{ '/proveedor' }}">Regresar</a></button>
        </div>
    </div>
    <body background="https://image.freepik.com/vector-gratis/fondo-pincel-acrilico-abstracto-azul-textura-fondo_53876-86373.jpg">
</div>

    <!-- TODO: Current Tasks -->
@endsection

