<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;

class NewsController extends Controller
{
      public function NewEmail(Request $request)
    {
        $letter = new Newsletter();

        //add to database
        
        $letter->email = $request->email;
        $letter->save();
        return redirect()->back()->with('success',"Merci , Vous avez été bien enregistré. Nous allons vous contacter d'ici peu");

    }
}
