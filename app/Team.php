<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
     protected $fillable = [
        'nom',
        'fonction',
        'imageTemoin',
        'presentation',
         ];

      public  $timestamps = false;
}
