@extends('layouts.layout')

@section('titulo', "Eliminar Usuario")

@section('content')
<form action="{{ route('usuario.eliminar') }}" method="POST">
    @csrf
    <input type="text" required placeholder="ID del usuario" name="usuario_id">
    <input type="submit" value="Eliminar">
</form>
@endsection
