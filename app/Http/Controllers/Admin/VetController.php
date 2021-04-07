<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vet;
use Illuminate\Http\Request;

class VetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.vets.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vets.create');
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
            'code' => 'required|integer|between:1,999999999999|unique:vets',
            'name' => 'required|max:50',
            'phone' => 'required|unique:vets',
            'email' => 'required|email|unique:vets|max:255'
        ]);

        $vet = Vet::create($request->all());

        return redirect()->route('admin.vets.edit', compact('vet'))->with('info', 'Vet has been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vet $vet)
    {
        return view('admin.vets.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vet $vet)
    {
        return view('admin.vets.edit', compact('vet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vet $vet)
    {
        $request->validate([
            'code' => "required|integer|between:1,999999999999|unique:vets,code,$vet->id",
            'name' => 'required|max:50',
            'phone' => "required|unique:vets,phone,$vet->id",
            'email' => "required|email|unique:vets,email,$vet->id|max:255"
        ]);

        $vet->update($request->all());

        return redirect()->route('admin.vets.edit', compact('vet'))->with('info', 'Vet has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vet $vet)
    {
        $vet->delete();

        return redirect()->route('admin.vets.index')->with('info', 'Vet has been deleted');
    }
}
