@extends('layouts.layout')

@section('titulo', "Agregar Usuario")

@section('content')
<form action="{{ route('usuario.agregar') }}" method="POST">
    @csrf
    <input type="text" placeholder="Nombre" name="nombre">
    <input type="text" placeholder="Apellido" name="apellido">
    <input type="text" placeholder="Correo" name="correo">
    <input type="text" placeholder="Contraseña" name="contrasenia">
    <input type="text" placeholder="Edad" name="edad">
    <input type="submit" value="Registrar">
</form>
@endsection
