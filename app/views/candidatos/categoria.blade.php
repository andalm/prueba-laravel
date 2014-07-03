@extends ('layout')

@section ('content')

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="page-header">{{ $categoria->nombre }}</h1>
                
                <table class="table table-striped">
                    <tr>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Descripción</th>
                        <th>Ver</th>
                    </tr>
                    @foreach ($categoria->candidatos as $candidato)
                        <tr>
                            <td>{{ $candidato->usuario->nombre_completo }}</td>
                            <td>{{ $candidato->trabajo_tipo }}</td>
                            <td>{{ $candidato->descripcion }}</td>
                            <td>
                                <a href="#" class="btn btn-primary" role="button">Ver</a>
                            </td>
                        </tr>                       
                    @endforeach
                </table>
                
                <p>Copyright {{ date('Y') }}</p>
            </div>
        </div>
    </div>

@stop
