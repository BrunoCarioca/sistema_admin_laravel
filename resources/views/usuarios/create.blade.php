@extends('adminlte::page')

@section('title', 'Novo usuário')

@section('content_header')
    <h1>Novo Usuário</h1>
@stop

@section('content')
    <form action="{{ route('usuarios.store') }}" method="post">
        @include('usuarios._form')
    </form>
@stop
