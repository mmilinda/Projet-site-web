<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class contact extends Model
{
    use SoftDeletes;

    protected $filiable=[
       
        'un', 'nom', 'email', 'tel', 'message'
    
];
}
