<?php

namespace App\Http\Controllers;

use App\Repositories\Inscription\InscriptionRepository; 
use App\Models\Inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    private InscriptionRepository $inscriptionRepository;
 
    public function __construct(InscriptionRepository $inscriptionRepository)
    {
        $this->inscriptionRepository = $inscriptionRepository; 
    }


    public function index(){
        $inscriptions = inscription::paginate(5);
        return view('pages/inscription/index', compact('inscriptions')); 
    }

    public function store (Request $request)
    {
        $inputs = $request->all();
        $inputs['nom']=$request->input('nom');
        $inputs['prenoms']=$request->input('prenoms');
        $inputs['quartier']=$request->input('quartier');
        $this->inscriptionRepository->store($inputs);
        return redirect()->route('admin.inscription')->with('Ok','Categorie créee avec succes');
    }
}
