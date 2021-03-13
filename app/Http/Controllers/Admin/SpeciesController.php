<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Species;
use Illuminate\Http\Request;

class SpeciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $species = Species::all();
        return view('admin.species.index', compact('species'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.species.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'common_name' => 'required',
            'scientific_name' => 'required|unique:species'
        ]);

        $species = Species::create($request->all());

        return redirect()->route('admin.species.edit', compact('species'))->with('info', 'Species has been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Species $species)
    {
        return view('admin.species.show', compact('species'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Species $species)
    {
        return view('admin.species.edit', compact('species'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Species $species)
    {
        $request->validate([
            'common_name' => 'required',
            'scientific_name' => "required|unique:species,scientific_name,$species->id"
        ]);

        $species->update($request->all());
        return redirect()->route('admin.species.edit', compact('species'))->with('info', 'Species has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Species $species)
    {
        $species->delete();

        return redirect()->route('admin.species.index')->with('info', 'Species has been deleted');
    }
}
