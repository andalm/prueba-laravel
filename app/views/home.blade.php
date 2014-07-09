@extends ('layout')

@section ('content')

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
     <div class="container-fluid">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="#">Project name</a>
       </div>
       <div class="navbar-collapse collapse">
         <ul class="nav navbar-nav navbar-right">
           <li><a href="#">Dashboard</a></li>
           <li><a href="#">Settings</a></li>
           <li><a href="#">Profile</a></li>
           <li><a href="#">Help</a></li>
         </ul>
         <form class="navbar-form navbar-right">
           <input type="text" class="form-control" placeholder="Search...">
         </form>
       </div>
     </div>
   </div>

   <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-md-8 col-md-offset-2">
        
                <h1 class="page-header">Últimos Candidatos</h1>
                
                @foreach ($ultimos_candidatos as $categoria)
                
                <h2 class="sub-header">{{ $categoria->nombre }}</h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Tipo de Trabajo</th>
                                <th>Descripción</th>
                                <th>Ver</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categoria->candidatos as $candidato)
                            <tr>
                                <td>{{ $candidato->usuario->nombre_completo }}</td>
                                <td>{{ $candidato->trabajo_tipo_title }}</td>
                                <td>{{ $candidato->descripcion }}</td>
                                <td>
                                    {{ 
                                        link_to_route(
                                            "candidato",
                                            "Ver", 
                                            [
                                                $candidato->slug,
                                                $candidato->id,
                                            ], 
                                            [
                                                "class" => "btn btn-primary",
                                                "role" => "button"
                                            ]
                                        ) 
                                    }}
                                </td>
                            </tr> 
                            @endforeach
                        </tbody>
                    </table>                    
                </div>
                
                <p>
                    {{ 
                        link_to_route(
                            "categoria",
                            "Ver todos en $categoria->nombre", 
                            [
                                $categoria->slug,
                                $categoria->id,
                            ], 
                            [
                                "class" => "btn btn-primary",
                                "role" => "button"
                            ]
                        ) 
                    }}
                </p>
                @endforeach
                
                <p>Copyright {{ date('Y') }}</p>
                
            </div>
        </div>
   </div>

@stop

