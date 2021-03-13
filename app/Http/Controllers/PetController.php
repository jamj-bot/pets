<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Owner;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class PetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('show', 'index');
    }

    public function index()
    {
    	$pets = Pet::where('owner_id', Auth::user()->id)->paginate(5);

    	return view('pets.index', compact('pets'));
    }

    public function show (Pet $pet)
    {
        if (Auth::user()->email == $pet->owner->email)
        {
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
            return view('pets.show', compact('pet'));
        } else {
            abort(403);
        }
    }
}
