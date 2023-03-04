@extends('citas.adminCita')
@section('title', 'Listado de citas')
@section('contenido');
<h4>Listado de citas</h4>

    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>Cita</th>
                <th>Categoria</th>
                <th>Estado</th>
                <th>Precio</th>
                <th>Modalidad</th>
                <th>Fecha</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($citas as $cita)
                <tr>
                    <td>
                        {{$cita->nombre}}
                    </td>
                    <td>
                        {{$cita->categoria}}
                    </td>
                    <td>
                        {{$cita->estado}}
                    </td>             
                    <td>
                        {{$cita->precio}}
                    </td>
                    <td>
                        {{$cita->modalidad}}
                    </td>
                    <td>
                        {{$cita->fecha}}
                    </td>
                    <td>
                        <a href="{{route('cita.edit', $cita)}}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection