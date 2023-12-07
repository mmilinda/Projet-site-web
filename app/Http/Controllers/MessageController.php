<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;
 use App\Models\contact;
 use App\Models;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    // affichage des articles pour edition
    /*public function  contact(Request $request)
    {
        $message = contact::all();
        return view('message')->with('contacts', $message);
                                    // nom de la table
    }*/

    public function index()
    {
        $contacts = Contact::all();
        
        return view('message', compact('contacts'));
    }

   

    public function processContactForm(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'un' => 'required|in:customer,landlord,something_else',
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'tel' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Création d'un nouvel enregistrement Contact
        $contact = new Contact;
        $contact->un = $request->input('un');
        $contact->nom = $request->input('nom');
        $contact->email = $request->input('email');
        $contact->tel = $request->input('tel');
        $contact->message = $request->input('message');
        $contact->save();

        // Utilisation de la valeur de $userType
        /*$userType = $request->input('un');
        if ($userType == 'customer') {
            // Traitement pour un client
            return "Vous avez sélectionné : I'm a Customer";
        } elseif ($userType == 'landlord') {
            // Traitement pour un propriétaire
            return "Vous avez sélectionné : I'm a Landlord";
        } elseif ($userType == 'something_else') {
            // Traitement pour autre chose
            return "Vous avez sélectionné : Something else";
        } else {
            // Traitement par défaut ou gestion d'erreur
            return "Veuillez sélectionner une option valide.";
        }*/

        // Redirection ou affichage d'une vue
        return redirect('/contact')->with('message', 'Suppression effectué avec succès.');
    }



    public function destroy($id)
    {
        // Trouver l'élément à supprimer dans la base de données
        $notifications = Contact::findOrFail($id);

        // Effectuer l'action de suppression
        $notifications->delete();

        // Rediriger avec un message (facultatif)
        return redirect()->route('contacts.index')->with('message', 'L\'élément a été supprimé avec succès.');
    }

    
}

