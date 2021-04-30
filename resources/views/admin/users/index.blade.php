@extends('admin.template.main')

@section('title', 'Lista de Usuarios')

@section('content')
<a href=" {{ url('admin\users\create' ) }}" class="btn btn-info">Registrar nuevo usuario</a>
        <table class="table">
            <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo Electronico</th>
            <th>Tipo</th>
            <th>Accion</th>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id}}</td>
                        <td>{{ $user->name}}</td>
                        <td>{{ $user->email}}</td>
                        @if ($user->type == 'admin')
                        <td>
                        <a href="" class="btn btn-primary ">{{ $user->type}}</a>
                        </td>
                        @else
                        <td><a href="" class="btn btn-warning">{{ $user->type}}</a></td>
                        @endif
                        <td><a href="" class="btn ">Modificar</a>
                        <a href=" {{ url('admin/users/destroy', $user->id)}} " onclick="return confirm('Estas Seguro? ')" class="btn btn-danger">Eliminar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            {!! $users->render() !!}
        </div>


@endsection
