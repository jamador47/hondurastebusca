<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v8.0&appId=381123249038361&autoLogAppEvents=1" nonce="SzQ4mJuK"></script>

        <title>Honduras te Busca</title>

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
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           

            <div class="content">
                <div class="title m-b-md">
                <img src="http://hondurastebusca.com/Pueblo.jpg" alt="Girl in a jacket" width="300" height="300">
                <br>
                    HONDURAS TE BUSCA

                   
                </div>
                

                
                <div class="links">
                    <a href={{ route('buscar.ref') }}>BUSCAR REFUGIADO</a>
                    <a href={{ route('agregar.ref') }}>AGREGAR REFUGIADOS</a>
                    <div class="fb-share-button" data-href="http://hondurastebusca.com/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fhondurastebusca.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>

                </div
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
