@extends('layouts.plantilla')

@section('titulo')
<h1 class='text-center'>Bienvenido a la página de</h1>
<h1 class='text-center'>Clientes</h1>
@section('contenido')
    
@endsection
@if(!empty($clientes))
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Documento</th>
                            <th>Nombre</th>
                            <th>Domicilio</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clientes as $clientes1)
                            <tr>


                                <td>{{$clientes1->documento}}</td>
                                <td>{{$clientes1->nombre}}</td>
                                <td>{{$clientes1->domicilio}}</td>
                                <td><button class="btn btn-primary">Editar</button>
                                    <button class="btn btn-danger">Eliminar</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endif

