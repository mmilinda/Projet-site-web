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
    public function  contact(Request $request)
    {
        $message = contact::all();
        return view('message')->with('contacts', $message);
                                    // nom de la table
    }

    
}

