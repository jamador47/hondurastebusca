<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <div id="fb-root"></div>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v8.0&appId=381123249038361&autoLogAppEvents=1" nonce="SzQ4mJuK"></script>

        <title>Honduras Te Busca</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            @media (min-width: 320px) { h2 {font-size:2rem;} .links a {color: #636b6f; max-width: 600px; padding-bottom:50px; font-size: 13px; font-weight: 600; letter-spacing: .1rem; text-decoration: none; text-transform: uppercase;}}
            @media (min-width: 640px) { h2 {font-size:2rem;} .links a {color: #636b6f; max-width: 600px; padding-bottom:50px; font-size: 13px; font-weight: 600; letter-spacing: .1rem; text-decoration: none; text-transform: uppercase;}}
            @media (min-width: 960px) { h2 {font-size:3rem;} .links a {color: #636b6f; padding: 0 25px; font-size: 13px; font-weight: 600; letter-spacing: .1rem; text-decoration: none; text-transform: uppercase;}}
            @media (min-width: 1100px) { h2 {font-size:4rem;} .links a {color: #636b6f; padding: 0 25px; font-size: 13px; font-weight: 600; letter-spacing: .1rem; text-decoration: none; text-transform: uppercase;}}

            h2{
                font-weight: 200;
                width: 100%;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                width: 100%;
            }

            .title {
                width: 100%;
            }

            .m-b-md {
                margin-bottom: 20px;
            }

            .links button {
              margin-bottom: 20px;
            }

            .imagen-principal {
              align-items: center;
              margin-top: 30px;
              width: 100%;
              max-width: 300px;
              min-width: 100px;
              height: auto;
            }

        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                  <img class="imagen-principal" src="http://hondurastebusca.com/Pueblo.jpg" alt="Girl in a jacket" >
                  <br>
                  <h2>HONDURAS TE BUSCA</h2>
                </div>

                <div class="links">
                    <button onclick="window.location='{{ route("buscar.ref") }}'"  type="submit" class="btn btn-secondary">BUSCAR REFUGIADO</button>
                    <button onclick="window.location='{{ route("agregar.ref") }}'" type="submit" class="btn btn-dark">AGREGAR REFUGIADOS</button>

                </div>
                <br>
                <br>
                <div>
               <strong> Personas en la base de datos: {{$total}} </strong>
               <br>
               <br>
               <div> Reporta cualquier error a nuestra página de facebook: <a href="https://www.facebook.com/Honduras-te-Busca-104104708180305/?notif_id=1604788310968051&notif_t=page_invite_accept&ref=notif">Honduras te Busca</a>  </div>
              <br>
              <br>
              <br>
                <div><strong> Otros recursos para búsqueda de personas:</strong> <a href="https://app.hondurastebusca.com/">App Honduras te Busca - Christian Echeverría</a>  </div>
                <div><strong> Otros recursos para búsqueda de personas: </strong> <a href="https://www.appsheet.com/start/5bb78ff7-1bb7-43f4-a002-3c6112e0373c#appName=RescateHN-1076358&group=%5B%7B%22Column%22%3A%22Departamento%22%2C%22Order%22%3A%22Ascending%22%7D%5D&page=deck&sort=%5B%7B%22Column%22%3A%22_RowNumber%22%2C%22Order%22%3A%22Descending%22%7D%5D&table=Desaparecidos&view=Desaparecidos">RescateHN - René Casaña</a>  </div>

                </div>
            </div>
        </div>
    </body>
</html>
