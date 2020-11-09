<!DOCTYPE html>
<html>
<head>
    <title>Agregar Refugiado</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v8.0&appId=381123249038361&autoLogAppEvents=1" nonce="SzQ4mJuK"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
      AGREGAR REFUGIADO
    </div>

    <div>
    Instrucciones: Escribe el nombre completo de la persona, si ves que el nombre ya aparece en la lista, esta persona ya esta en el sistema, si no, agrega todos los datos posibles de la persona, selecciona el departamento y el refugio. Si no encuentras el refugio, escoge NO ESTA EN LA LISTA y agrega el nombre del nuevo refugio en el campo Nuevo Refugio, de ahora en adelante, el nuevo refugio aparecerá en la lista.
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('agregarrefugiado')}}">
       @csrf
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre" class="form-control" >
        </div>
        <div class="form-group">
          <label for="identidad">Identidad</label>
          <input type="text" id="identidad" name="identidad" class="form-control" >
        </div>
        <div class="form-group">
          <label for="edad">Edad</label>
          <input type="text" id="edad" name="edad" class="form-control" >
        </div>
        <div class="form-group">
          <label for="telefono">Teléfono</label>
          <input type="text" id="telefono" name="telefono" class="form-control" >
        </div>
        <div class="form-group">
          <label for="departamento">Departamento</label>
             <select name="departamentos_id" id="departamentos_id" class="form-control dynamic" required="" data-dependent="refugios_id">
             <option value="">SELECCIONA EL DEPARTAMENTO</option>
          @foreach($departamentos as $departamento)
  <option value="{{$departamento->id}}">{{$departamento->departamento}}</option>
  @endforeach
</select>
        </div>
        <div class="form-group">
          <label for="refugios_id">Refugio (SI NO LO ENCUENTRAS ELIGE NO ESTA EN LA LISTA)</label>

          <select name="refugios_id" id="refugios_id" class="select2 form-control input-lg dynamic2">

                      <option value="" selected disabled>Elegir Refugio</option>
                      <option value="otro">NO ESTA EN ESTA LISTA</option>

                    </select>
        </div>

        <div class="form-group" id="nuevo_refugio" style="visibility: hidden;">
          <label for="telefono">Nuevo Refugio</label>
          <input type="text" id="refugio" name="nuevo_refugio" class="form-control" >
        </div>

        <button type="submit" class="btn btn-primary">AGREGAR REFUGIADO</button>
        <a href="http://hondurastebusca.com"><span  class="btn btn-danger">ATRAS</span></a>
      </form>
      <div class="fb-share-button" data-href="http://hondurastebusca.com/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fhondurastebusca.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>

    </div>
  </div>
</div>
</body>



<script>
    $(document).ready(function(){
        $('.select2').select2();

    $('.dynamic2').change(function(){
        if($(this).val() != 'otro')
    {
        $('#nuevo_refugio').css("visibility", "hidden");
    }else{
        $('#nuevo_refugio').css("visibility", "visible");
    }
    });
    $('.dynamic').change(function(){
    if($(this).val() != '')
    {
     var select = $(this).attr("id");
     var value = $(this).val();
     var dependent = $(this).data('dependent');
     var _token = $('input[name="_token"]').val();
     $.ajax({
      url:"{{ route('dynamicdependent.fetch') }}",
      method:"POST",
      data:{select:select, value:value, _token:_token, dependent:dependent},
      success:function(result)
      {
       $('#'+dependent).html(result+'<option value="" selected disabled>Elegir Refugio</option><option value="otro">NO ESTA EN ESTA LISTA</option>');
      }

     })
    }
    });

    $('#departamentos_id').change(function(){
    $('#refugio').val('');
    });


    });
    </script>

</html>
