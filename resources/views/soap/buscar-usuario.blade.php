@extends('layouts.layout')

@section('titulo', "Buscar Usuario")

@section('content')
    <form action="{{ route('usuario.buscar') }}" method="POST">
        @csrf
        <input type="text" placeholder="ID del usuario" name="usuario_id">
        <input type="submit" value="Buscar">
    </form>
@endsection
