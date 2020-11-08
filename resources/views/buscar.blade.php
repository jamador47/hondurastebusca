<!DOCTYPE html>
<html>
<head>
    <title>Buscar Personas</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v8.0&appId=381123249038361&autoLogAppEvents=1" nonce="SzQ4mJuK"></script>
  <script>
  $( function() {
    var nombres = 
    [@foreach ($refugiados as $refugiado)
     "{{$refugiado->nombre}}",
    @endforeach
    ];
    $( "#nombre" ).autocomplete({
      source: nombres
    });
  } );
  </script>
</head>
<body>
<div class="container mt-4">
  @if($status)
    <div class="alert alert-success">
        {{ $status}}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Buscar Persona
    </div>
    <div>
    <strong>Instrucciones:</strong> escribe el nombre de la persona a buscar, a medida vayas escribiendo aparecerán nombres parecidos al que estás buscando, escoge el nombre de la lista y busca a la persona.
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('buscar')}}">
       @csrf
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre" class="form-control" required="">
        </div>

        <button type="submit" class="btn btn-primary">BUSCAR</button>
        <a href="http://hondurastebusca.com"><span  class="btn btn-danger">ATRAS</span></a>

        @if ($personas)
        @foreach($personas as $persona)
        <br>
        <strong>REFUGIADO ENCONTRADO</strong>
        <div class="form-group">
          <label for="nombre">Nombre: {{$persona->nombre}}</label>
        </div>
        @if($persona->identidad)
        <div class="form-group">
          <label for="identidad">Indentidad:{{$persona->identidad}}</label>
        </div>
        @endif
        @if($persona->edad)
        <div class="form-group">
          <label for="edad">Edad:{{$persona->edad}}</label>
        </div>
        @endif
        @if($persona->telefono)
        <div class="form-group">
          <label for="telefono">Teléfono:{{$persona->telefono}}</label>
        </div>
        @endif
        @if($persona->departamentos_id != NULL)
        <div class="form-group">
          <label for="departamento">Departamento: {{$persona->departamento->departamento}}</label>
        </div>
        @endif
        @if($persona->refugio)
        <div class="form-group">
          <label for="refugios_id">Refugio: {{$persona->refugio}}</label>
        </div>
        @endif
        @endforeach
        @endif
      </form>
      <div class="fb-share-button" data-href="http://hondurastebusca.com/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fhondurastebusca.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>

    </div>
  </div>
</div>    
</body>
</html>