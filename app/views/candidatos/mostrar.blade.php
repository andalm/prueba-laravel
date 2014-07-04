@extends ('layout')

@section ('content')

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="page-header">{{ $candidato->usuario->nombre_completo }}</h1>
                
                <p>
                    Categoría: 
                    {{ 
                        link_to_route(
                            "categoria",
                            $candidato->categoria->nombre, 
                            [
                                $candidato->categoria->slug,
                                $candidato->categoria->id,
                            ], 
                            []
                        )
                    }}
                </p>
                
                <p>Tipo de trabajo: {{ $candidato->trabajo_tipo_title }}</p>
                
                <p>
                    Sitio Web: 
                    <a href="{{ $candidato->sitio_web }}">
                        {{ $candidato->sitio_web }}
                    </a>
                </p>
                
                <h4>Descripción</h4>
                
                <p>{{ $candidato->descripcion }}</p>
                
                <p>Copyright {{ date('Y') }}</p>
            </div>
        </div>
    </div>

@stop
