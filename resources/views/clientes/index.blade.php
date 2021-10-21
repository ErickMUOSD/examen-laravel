
<h1>Clientes</h1>
@if(!empty($clientes))
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Emanil</th>
                            <th>Domain Name</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($internet  as $data)
                            <tr>


                                <td>{{$clientes->patentesV}}</td>
                                <td>{{$clientes->no_motor}}</td>
                                <td>{{$clientes->marca}}</td>
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
