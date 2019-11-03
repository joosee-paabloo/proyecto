@extends('layouts.app')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
    <div class="col-sm-offset-3 col-sm-6">
    <div class="panel-title">
        <h2>INGRESO SERIE</h2>
    </div>
    </div>

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
       
        <!-- New Task Form -->
        <form action="/serie/save" method="POST" >
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="serie" class="col-sm-3 control-label">NUMERO DE SERIE </label>
                <input type="text" name="serie"  class="form-control">
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Agregar Serie
                    </button>
                </div>
            </div>
        </form>
    </div>
    <body background="https://www.xtrafondos.com/wallpapers/textura-de-madera-3426.jpg">
</div>

    <!-- TODO: Current Tasks -->
@endsection