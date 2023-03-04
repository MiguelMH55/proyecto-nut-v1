@extends('citas.adminCita')
@section('title', 'Registro de citas')
@section('contenido');
<h4>Registro de citas</h4>

<form action="/adminCitaR" method="post">
    @csrf
    <input type="text" name="nombre" id="nombre" placeholder="nombre citas">
    <br>
    <br>
    <select name="categoria" id="categoria">
        <option value="Consulta">Consultas</option>
        <option value="Taller_y_capacitacion">Talleres y capacitaciones</option>
        <option value="Consulta_familiar">Consultas familiares</option>
    </select>
    <br>
    <br>
    <select name="estado" id="estado" aria-placeholder="Estado cita">
        <option value="Activo">Activo</option>
        <option value="Finalizado">Finalizado</option>
        <option value="Cancelado">Cancelado</option>
    </select>
    <br>
    <br>
    <input type="number" name="precio" id="precio" placeholder="Digite precio">
    <br><br>
    <select name="modalidad" id="modalidad" aria-placeholder="Modalidad">
        <option value="Presencial">Presencial</option>
        <option value="Virtual">Virtual</option>
    </select>
    <br>
    <br>
    {{-- <input type="date" name="fecha" id="fecha"> --}}
    <input type="datetime-local" name="fecha" id="fecha">
    <br><br>
    <input type="submit" value="Agendar">
</form>
@endsection