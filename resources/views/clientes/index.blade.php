
<h1>Clientes</h1>
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
