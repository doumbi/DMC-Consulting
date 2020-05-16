<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuration;
use App\Rdv;

class RendezvousController extends Controller
{
    public function rdv(){
    	 $NosConfig = configuration::all();
    	return view('site.rendezvous',compact('NosConfig'));
    }

     public function RendezVous(){
        $allRdv= rdv::all();
    	return view('admin.rendezvous.listRendezvous',compact('allRdv'));
    }

      public function Consultation(Request $request)
    {
        $consulte = new rdv();

        //add to database
        $consulte->nom = $request->nom;
        $consulte->prenom = $request->prenom;
        $consulte->email = $request->email;
        $consulte->localisation = $request->localisation;
        $consulte->justification = $request->justification;
        $consulte->rdvDate = $request->rdvDate;
        $consulte->save();

        return redirect()->back()->with('success',"Merci , Vous avez été bien enregistré. Nous allons vous contacter d'ici peu");
    }

     public function deleteRdv($id){
      $RdvDelete= rdv::find($id)->delete();
      return redirect()->route('listRendezVous')->with('success','supprimé avec succès');
    }
}
