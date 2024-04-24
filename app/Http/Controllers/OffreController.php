<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    public function store(Request $request){
        $request->validate(
            [
                'domaine' => 'required|string',
                'titre' => 'required|string',
                'description' => 'required|string',
                'localisation' => 'required|string'
            ]
        );
        Offre::create([
            'domaine' =>$request->input('domaine'),
            'titre' =>$request->input('titre'),
            'description' =>$request->input('description'),
            'localisation' =>$request->input('localisation')
        ]);
        return redirect()->route('dashboard');
    }
    public function create(){
        return view('offres.offreform');
    }
    public function index(){
        $offres = Offre::all();

        return view('offres.offreindex', compact('offres'));
    }
}
