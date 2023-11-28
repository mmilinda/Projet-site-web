<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\City;
use App\Models\Critere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LandController extends Controller
{
    public function showcities()
    {
        
    
    return view('citi');
    }


    public function store_cities(Request $request)
{
    $validator = Validator::make($request->all(), [
        'nomcity' => 'required|string|max:255',
        
    ]);

    

    $citi = new City();
    $citi->nomcity = $request->nomcity;
    
    $citi->save();

    // Si vous avez besoin de gérer le téléchargement de la vidéo, vous pouvez le faire ici.

    return redirect()->back()->with('success', 'Cours ajouté avec succès');
}

public function showlandlord()
    {
        
        $cities = City::all();
        $areas=Area::all();
        return view('projet.landlord',compact('cities','areas'));
    }

    public function store_critere(Request $request)
{
    $validator = Validator::make($request->all(), [
        'nom' => 'required|string|max:255',
        'email' => 'required|email|max:255', // Utilisez 'email' au lieu de 'url' pour valider une adresse e-mail
        'numero_tel' => 'required|numeric', // Assurez-vous que le numéro de téléphone est un nombre
        'citi_id' => 'required|exists:cities,id', // Assurez-vous que citi_id existe dans la table 'citis'
        'area_id' => 'required|exists:areas,id',
        'nombre_chambre'=>'required',
         // Assurez-vous que area_id existe dans la table 'areas'
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $critere = new Critere();
    $critere->nom = $request->nom;
    $critere->email = $request->email;
    $critere->numero_tel = $request->numero_tel;
    $critere->citi_id = $request->citi_id;
    $critere->area_id = $request->area_id;
    $critere->nombre_chambre=$request->nombre_chambre;
    $critere->save();

    // Si vous avez besoin de gérer le téléchargement de la vidéo, vous pouvez le faire ici.

    return redirect()->back()->with('success', 'Enregistrement effetué avec succès');
}

public function liste_critere(){

    /*$areas = Area::select('areas.*', 'criteres.nom as cours_titre')
    ->join('criteres', 'areas.critere_id', '=', 'criteres.id')
    ->get();*/

    $criteres = Critere::with('areas', 'cities')->get();
   // $criteres = Critere::all();

    return view('liste_critere', compact('criteres'));
}

public function supprimer_critere($id)
{
    $critere = Critere::find($id);

    if (!$critere) {
        return redirect()->route('liste_critere')->with('error', 'Critere non trouvée.');
    }

    $critere->delete();

    return redirect()->route('liste_critere')->with('fail', 'Critere supprimée avec succès.');
}

public function liste_area()
    {
        $areas=Area::all();
        return view('liste_area',compact('areas'));
    }

    public function supprimer_area($id)
{
    $area = Area::find($id);

    if (!$area) {
        return redirect()->route('liste_area')->with('error', 'Area non trouvée.');
    }

    $area->delete();

    return redirect()->route('liste_area')->with('fail', 'Area supprimée avec succès.');
}

public function liste_citi()
    {
        $cities=City::all();
        return view('liste_citi',compact('cities'));
    }

    public function supprimer_citi($id)
    {
        $citi = City::find($id);
    
        if (!$citi) {
            return redirect()->route('liste_citi')->with('error', 'City non trouvée.');
        }
    
        $citi->delete();
    
        return redirect()->route('liste_citi')->with('fail', 'City supprimée avec succès.');
    }

}
