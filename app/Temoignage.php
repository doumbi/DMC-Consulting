<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temoignage extends Model
{
    protected $fillable = [
        'nom',
        'fonction',
        'imageTemoin',
        'message',
         ];

      public  $timestamps = false;
}
