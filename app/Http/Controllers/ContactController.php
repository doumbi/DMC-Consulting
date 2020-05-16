<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuration;
use App\Contact;

class ContactController extends Controller
{
     public function contact(){
        $NosConfig = configuration::all();
    	return view('site.contact',compact('NosConfig'));
    }

     public function ClientContact(Request $request)
    {
        $client = new contact();

        //add to database
        $client->nom = $request->nom;
        $client->email = $request->email;
         $client->message = $request->message;
        $client->objet = $request->objet;
        $client->save();

        return redirect()->back()->with('success',"Merci $client->nom, Vous avez été bien enregistré. Nous allons vous contacter d'ici peu");
    }

}
