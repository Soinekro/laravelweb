<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
    <title> @yield('title', 'Default')|Panel de Administracion</title>
</head>
<body>
    @include('admin.template.partials.nav')
    <section>
    <h5>@yield('title')</h5>
        @yield('content')
    </section>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/jquery/jquery.js')}}"></script>
</body>
</html>
