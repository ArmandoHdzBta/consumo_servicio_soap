@extends('layouts.layout')

@section('titulo', "Editar Usuario")

@section('content')
<form action="{{ route('usuario.editar') }}" method="POST">
    @csrf
    <input type="text" required placeholder="ID del usuario" name="usuario_id">
    <input type="text" required placeholder="Nombre" name="nombre">
    <input type="text" required placeholder="Apellido" name="apellido">
    <input type="text" required placeholder="Correo" name="correo">
    <input type="text" required placeholder="Contraseña" name="contrasenia">
    <input type="text" required placeholder="Edad" name="edad">
    <input type="submit" value="Editar">
</form>
@endsection
