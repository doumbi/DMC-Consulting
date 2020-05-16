<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'titreService',
        'descriptionService',
        'imageService',
        'contenuService',
         ];

      public  $timestamps = false;

      public function h2c(){
    	return $this->hasMany('App\Article'); 
    }
}
