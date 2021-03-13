<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OwnerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show()
    {
        $owner = Owner::where('email', '=',  Auth::user()->email)
            ->firstOrFail();

        // $owner->setRelation('pets', $owner->pets()
        //     ->orderBy('status', 'asc')
        //     ->orderBy('updated_at', 'desc')
        //     ->simplePaginate(5));

        $pets = $owner->pets()
            ->orderBy('status', 'asc')
            ->orderBy('updated_at', 'desc')
            ->simplePaginate();



        return view('owners.show', compact('owner', 'pets'));
    }

}
