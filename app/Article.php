<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
     protected $fillable = [
        'titreArticle',
        'descriptionArticle',
        'imageArticle',
        'contenuArticle',
        'publishDate',
        'service_id',
         ];

      public  $timestamps = false;
}
