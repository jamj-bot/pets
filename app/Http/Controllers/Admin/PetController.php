<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PetRequest;
use App\Models\Consultation;
use App\Models\Pet;
use App\Models\Species;
use App\Models\Test;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = Pet::with('owner')->get();
        return view('admin.pets.index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PetRequest $request)
    {

        $pet = Pet::create($request->all());

        if($request->file('file')) {
            $url = Storage::put('pets', $request->file('file'));

            $pet->image()->create([
                'url' => $url
            ]);
        }

        return back()->with('info', 'Pet has been Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet)
    {
        $species = Species::pluck('common_name', 'id');
        $tests = Test::pluck('test_name', 'id');

         $years = Carbon::now()->diffInYears($pet->dob);
            if(Carbon::now()->diffInDays($pet->dob) < 31) {
                $age = Carbon::now()->diffInDays($pet->dob);
                $pet->age = $age . ' days old';
            } elseif (Carbon::now()->diffInMonths($pet->dob) < 12) {
                $age = Carbon::now()->diffInMonths($pet->dob);
                $pet->age = $age . ' months old';
            } else {
                $age = Carbon::now()->diffInYears($pet->dob);
                $pet->age = $age . ' years old';
            }
        //$tests = Test::all();
        return view('admin.pets.show', compact('pet', 'species', 'tests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PetRequest $request, Pet $pet)
    {
        $pet->update($request->all());

        if($request->file('file')) {
            $url = Storage::put('pets', $request->file('file'));

            if($pet->image){
                Storage::delete($pet->image->url);
                $pet->image->update([
                    'url' => $url
                ]);
            } else {
                $pet->image()->create([
                    'url' => $url
                ]);
            }
        }

        return back()->with('info', 'Pet has been Updaed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pet)
    {
        $pet->delete();

        return back()->with('Info', 'Pet has been deleted');
    }
}
