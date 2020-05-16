<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
     protected $fillable = [
        'nom',
        'prenom',
        'email',
        'localisation',
        'justification',
        'rdvDate',
         ];

     public  $timestamps = false;
}
