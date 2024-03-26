<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public function index()
    {
        $usuario = usuario::all();
        return view('usuario.index', compact('usuario'));
    }

    public function store(Request $request)
    {
        usuario::create($request->all());
        return redirect()->route('usuario.index');
    }

    public function show($id)
    {
        $usuario = usuario::findOrFail($id);
        return view('usuario.show', compact('usuario'));
    }

    public function edit($id)
    {
        $usuario = usuario::findOrFail($id);
        return view('usuario.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $usuario = usuario::findOrFail($id);
        $usuario->update($request->all());
        return redirect()->route('usuario.index');
    }

    public function destroy($id)
    {
        $usuario = usuario::findOrFail($id);
        $usuario->delete();
        return redirect()->route('usuario.index');
    }
}
