@extends('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h2>LISTADO EMPLEADOS</h2>
    </div>
    </div>

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">



			<table border="1">

                <tr>
                        <td>id de Empleado</td>
                        <td>CUI de Empleado</td>
                        <td>Nombre de Empleado</td>
                        <td>Apellido de Empleado</td>
                        <td>Email de Empleado</td>
                        <td>direccion de Empleado</td>
                        <td>telefono casa de Empleado</td>
                        <td>telefono movil de Empleado</td>
                        <td>Fecha de Creacion</td>
   
                </tr>
                    @foreach($empleado as $empleado)
                 <tr>
                    <td><a href="{{route('empleados.edit',$empleado->id)}}"> {{$empleado->id}}</a></td>          
                    <td>  {{$empleado->cui}}</td>              
                    <td><a href="{{route('empleados.edit',$empleado->id)}}"> {{$empleado->nombre}}</a></td>
                    <td>  {{$empleado->apellido}}</td>
                    <td>  {{$empleado->email}}</td>
                    <td>  {{$empleado->direccion}}</td>
                    <td>  {{$empleado->telefono_casa}}</td>
                    <td>  {{$empleado->telefono_movil}}</td>
                    <td>  {{$empleado->created_at}}</td>
                </tr>
                    @endforeach
            </table>

            <button><a href="{{ '/empleado' }}">Regresar</a></button>
        </div>
    </div>
    <body background="https://image.freepik.com/vector-gratis/fondo-pincel-acrilico-abstracto-azul-textura-fondo_53876-86373.jpg">
</div>

    <!-- TODO: Current Tasks -->
@endsection