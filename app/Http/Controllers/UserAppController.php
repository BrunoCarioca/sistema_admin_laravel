<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserApp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAppController extends Controller
{
    public function index()
    {
        $users = UserApp::paginate(20);
        return view('usuarios.index')->with('users', $users);
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $dados = $request->except([
            '_token', 'confirm_password'
        ]);

        $dados['password'] = Hash::make($dados['password']);

        UserApp::create($dados);

        return redirect()->route('usuarios.index')->with('flash_message', 'Usuario criado com sucesso!');
    }

    public function edit(int $id)
    {
        $user = UserApp::findOrFail($id);
        return view('usuarios.edit')->with('user', $user);
    }

    public function update(int $id, Request $request)
    {
        $dados = $request->except(['_token', '_method', 'confirm_password']);

        $user = UserApp::findOrFail($id);

        $user->update($dados);

        return redirect()->route('usuarios.index');
    }
}
