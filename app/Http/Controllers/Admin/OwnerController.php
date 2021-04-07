<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use App\Models\Species;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.owners.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.owners.create');
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
            'code' => 'required|numeric|unique:owners',
            'name' => 'required|max:255',
            'phone' => 'required|unique:owners',
            'email' => 'required|email|unique:owners|max:255'
        ]);

        $owner = Owner::create($request->all());

        return redirect()->route('admin.owners.edit', compact('owner'))->with('info', 'Owner has been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        $species = Species::pluck('common_name', 'id');
        return view('admin.owners.show', compact('owner', 'species'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Owner $owner)
    {
        return view('admin.owners.edit', compact('owner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Owner $owner)
    {
        $request->validate([
            'code' => "required|numeric|unique:owners,code,$owner->id",
            'name' => 'required|max:255',
            'phone' => "required|unique:owners,phone,$owner->id",
            'email' => "required|email|unique:owners,email,$owner->id|max:255"
        ]);

        $owner->update($request->all());

        return redirect()->route('admin.owners.edit', compact('owner'))->with('info', 'Owner has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        $owner->delete();

        return redirect()->route('admin.owners.index')->with('info', 'Owner has been deleted');
    }
}
