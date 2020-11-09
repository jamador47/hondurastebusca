<!DOCTYPE html>
<html>
<head>
    <title>Agregar Refugio</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
      AGREGAR REFUGIO
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('agregarrefugio')}}">
       @csrf
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Departamento</label>
          <select name="departamentos_id" class="form-control" required="">
          @foreach($departamentos as $departamento)
  <option value="{{$departamento->id}}">{{$departamento->departamento}}</option>
  @endforeach

</select>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
