<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $prueba->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
</head>
<body>
Hola manito, no tienes mamita? :v <br>

<h1>{{ $prueba->title}}</h1>
<hr>
<h3>{{ $prueba->content}}</h3>
<h5>{{ $prueba->user->name}}</h5>
<h5>{{ $prueba->category->name}}</h5>

@foreach($prueba->tags as $tag)

{{ $tag->name }}

@endforeach

@for($i = 0 ;$i <=5 ; $i++)
    {{$i}}.<br>
@endfor
</body>
</html>


