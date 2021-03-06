<!DOCTYPE html>
<html>
<head>
    <title>Buscar Personas</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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

  <style media="screen">
  html, body {
      background-color: #fff;
      color: #000;
      font-family: 'Nunito', sans-serif;
      font-weight: 200;
      height: 100vh;
      margin: 0;
  }
  </style>
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
      BUSCAR PERSONA
    </div>
    <div>
    <strong>Instrucciones:</strong> Escribe el nombre de la persona a buscar, a medida vayas escribiendo aparecerán nombres parecidos al que estás buscando, escoge el nombre de la lista y busca a la persona.
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
        <br>

        @if ($error)
        <br>
        <br>
        <strong>Lamentablemente no se encontró un registro para tu busqueda, sin embargo acá hay dos enlaces para otras plataformas similares que pueden tener el registro</strong>:
          <br>
          <br>
          <div><strong> <a href="https://app.hondurastebusca.com/">App Honduras te Busca - Christian Echeverría</a></strong>   </div>
          <br>
          <div><strong><a href="https://www.appsheet.com/start/5bb78ff7-1bb7-43f4-a002-3c6112e0373c#appName=RescateHN-1076358&group=%5B%7B%22Column%22%3A%22Departamento%22%2C%22Order%22%3A%22Ascending%22%7D%5D&page=deck&sort=%5B%7B%22Column%22%3A%22_RowNumber%22%2C%22Order%22%3A%22Descending%22%7D%5D&table=Desaparecidos&view=Desaparecidos">RescateHN - René Casaña</a></strong>   </div>
          <br>

        @endif


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
