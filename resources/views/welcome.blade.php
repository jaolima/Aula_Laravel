<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('/css/materialize.min.css') }}">
    </head>
    <body>
        <div class="container">
        @yield('conteudo') <!--yield espera o "conteúdo" que está declarado em list.blade.php-->
        </div>


    <script src="{{ URL::asset('/js/materialize.min.js') }}"></script>

    </body>
</html>
