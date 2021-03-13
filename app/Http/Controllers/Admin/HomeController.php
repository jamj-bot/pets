<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use App\Models\Species;
use App\Models\Vet;
use App\Models\pet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$owners = Owner::count();
    	$vets = Vet::count();
    	$species = Species::count();
    	$pets = pet::count();

    	return view('admin.index', compact('owners', 'vets', 'species', 'pets'));
    }
}
