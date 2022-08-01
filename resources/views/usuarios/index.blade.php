@extends('adminlte::page')

@section('title', 'Lista de usuários')

@section('content_header')
    <h1>Lista de usuários</h1>
@stop

@section('content')
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Working</th>
            <th scope="col">Role</th>
            <th scope="col">Created</th>
            <th scope="col">Update</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user )
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->working ? 'on' : 'off' }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td><a href="{{ route('usuarios.edit', $user) }}" class="btn btn-primary">Atualizar</a></td>
                </tr>
            @empty
                <tr>
                    <th></th>
                    <th>Nenhum registro foi encontrado</th>
                    <th></th>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $users->links() }}
    </div>
    <div class="float-right">
        <a href="{{ route('usuarios.create') }}" class="btn btn-success">Novo Usuário</a>
    </div>
@stop
