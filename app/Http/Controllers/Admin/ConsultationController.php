<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConsultationRequest;
use App\Models\Consultation;
use App\Models\Test;
use App\Models\Vet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(ConsultationRequest $request)
    {

        $vet = Vet::where('email', '=',  Auth::user()->email)
            ->firstOrFail();

        $request->request->add(['vet_id' => $vet->id]);

        $consultation = Consultation::create($request->all());

        if($request->tests) {
            $consultation->tests()->attach($request->tests);
        }

        //return view('admin.consultations.show', compact('consultation'))->with('info', 'Consultation has been Created');
        return back()->with('info', 'Consultation has been Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Consultation $consultation)
    {
        $tests = Test::pluck('test_name', 'id');
        return view('admin.consultations.show', compact('consultation', 'tests'));
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
    public function update(ConsultationRequest $request, Consultation $consultation)
    {

        $vet = Vet::where('email', '=',  Auth::user()->email)
            ->firstOrFail();

        $request->request->add(['vet_id' => $vet->id]);


        $consultation->update($request->all());

        if($request->tests) {
            $consultation->tests()->sync($request->tests);
        }

        return back()->with('info', 'Consultation has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultation $consultation)
    {
        $consultation->delete();

        return back()->with('info', 'Consultation has been deleted');
    }
}
