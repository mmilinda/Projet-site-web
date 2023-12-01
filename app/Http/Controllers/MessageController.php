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
    public function  index(Request $request)
    {
        $message = contact::all();
        return view('message')->with('contacts', $message);
                                    // nom de la table
    }

    // public function index()
    // {
    //     $contacts = contact::all();
    //     return view('contacts.index', compact('contacts'));
    // }

    public function destroy($id)
    {
        // Trouver l'élément à supprimer dans la base de données
        $notifications = contact::findOrFail($id);

        // Effectuer l'action de suppression
        $notifications->delete();

        // Rediriger avec un message (facultatif)
        return redirect()->route('contacts.index')->with('success', 'L\'élément a été supprimé avec succès.');
    }

    
}

