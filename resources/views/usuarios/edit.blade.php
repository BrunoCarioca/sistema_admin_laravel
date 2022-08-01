@extends('adminlte::page')

@section('title', 'Editar usuário')

@section('content_header')
    <h1>Editar Usuário</h1>
@stop

@section('content')
    <form action="{{ route('usuarios.update', $user) }}" method="post">
        @method('PUT')
        @include('usuarios._form')
    </form>
@stop
