<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class libroController extends Controller
{
    public function index()
    {
        $libro = libro::all();
        return view('libro.index', compact('libro'));
    }

    public function store(Request $request)
    {
        libro::create($request->all());
        return redirect()->route('libro.index');
    }

    public function show($id)
    {
        $libro = libro::findOrFail($id);
        return view('libro.show', compact('libro'));
    }

    public function edit($id)
    {
        $libro = libro::findOrFail($id);
        return view('libro.edit', compact('libro'));
    }

    public function update(Request $request, $id)
    {
        $libro = libro::findOrFail($id);
        $libro->update($request->all());
        return redirect()->route('libro.index');
    }

    public function destroy($id)
    {
        $libro = libro::findOrFail($id);
        $libro->delete();
        return redirect()->route('libro.index');
    }
}
