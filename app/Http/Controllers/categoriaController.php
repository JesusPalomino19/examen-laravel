<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoriaController extends Controller
{
    public function index()
    {
        $categoria = categoria::all();
        return view('categoria.index', compact('categoria'));
    }

    public function store(Request $request)
    {
        categoria::create($request->all());
        return redirect()->route('categoria.index');
    }

    public function show($id)
    {
        $categoria = categoria::findOrFail($id);
        return view('categoria.show', compact('categoria'));
    }

    public function edit($id)
    {
        $categoria = categoria::findOrFail($id);
        return view('categoria.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $categoria = categoria::findOrFail($id);
        $categoria->update($request->all());
        return redirect()->route('categoria.index');
    }

    public function destroy($id)
    {
        $categoria = categoria::findOrFail($id);
        $categoria->delete();
        return redirect()->route('categoria.index');
    }
}
