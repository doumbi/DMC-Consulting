<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $fillable = [
        'nomSite',
        'horaire',
        'numéro',
        'linkFace',
        'linkYout',
        'linkTwit',
        'linkLinke',

         ];

      public  $timestamps = false;
}
