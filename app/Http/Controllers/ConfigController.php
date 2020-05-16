<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\configuration;

class ConfigController extends Controller
{
   

     public function config(){
     	$NosConfig = configuration::all();
        return view('admin.configuration.config',compact('NosConfig'));
    }

    public function ConfigUpdate(Request  $request){
     
        $this->validate($request,[
            'nomSite'=>'required|string|max:255', 
            'horaire'=>'required',
            'numéro'=>  'required',
            'linkFace'=>'required',
            'linkYout'=>'required',
            'linkTwit'=>'required',
            'linkLinke'=>'required',
             ]);

        configuration::update($request->all());
        return redirect()->back()->with('success','modifier avce succès');
    }
}
