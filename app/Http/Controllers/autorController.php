<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class autorController extends Controller
{
    public function index()
    {
        $autor = autor::all();
        return view('autor.index', compact('autor'));
    }

    public function store(Request $request)
    {
        autor::create($request->all());
        return redirect()->route('autor.index');
    }

    public function show($id)
    {
        $autor = autor::findOrFail($id);
        return view('autor.show', compact('autor'));
    }

    public function edit($id)
    {
        $autor = autor::findOrFail($id);
        return view('autor.edit', compact('autor'));
    }

    public function update(Request $request, $id)
    {
        $autor = autor::findOrFail($id);
        $autor->update($request->all());
        return redirect()->route('autor.index');
    }

    public function destroy($id)
    {
        $autor = autor::findOrFail($id);
        $autor->delete();
        return redirect()->route('autor.index');
    }
}
