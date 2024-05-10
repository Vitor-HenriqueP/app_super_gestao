<!DOCTYPE html>
<html lang="en">
<head>
    <!--YIELD SE REFERE A UM CAMPO QUE VEM POR PARAMETRO DO CONTROLLER-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Gestão - @yield('titulo')</title>
    <link rel="stylesheet" href="{{asset('css/estilo-basico.css')}}"/>
</head>
<body>
    <!--Inclusao do arquivo topo-->
    @include('site.layouts._partials.topo')
    <!--Depende da view que for chamada-->
    @yield('conteudo')
</body>
</html>