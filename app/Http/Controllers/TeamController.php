<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
     public function AddMembre(){
    	return view('admin.équipe.AddMembre');
    }

    public function NotreEquipe(){
    	 $allteam = team::all();
    	return view('admin.équipe.NotreEquipe',compact('allteam'));
    }


      public function createTeam( Request $request){
    
        $this->validate($request,[
            'nom'=>'required|string|max:255', 
            'fonction'=>'required',
            'imageTemoin'=>  'required',
            'presentation'=>'required',
             ]);

         if ($request->hasFile('imageTemoin')) {
        $image = $request->file('imageTemoin');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('img');
        $image->move($destinationPath, $name);
        }

        
        team::create($request->all());
        return redirect()->back()->with('success','Membre enregistré avec succès');

    }

     public function ShowTeam($id){
      $team= team::where('id',$id)->get();
      return view('admin.équipe.ShowTeam',compact('team'));
    }

     public function EditTeam($id){

      $TeamEdit = team::findOrFail($id);
      return view('admin.équipe.EditTeam',compact('TeamEdit'));
    }

    public function TeamUpdate(Request  $request,$id){
     
       $this->validate($request,[
            'nom'=>'required|string|max:255', 
            'fonction'=>'required',
            'imageTemoin'=>  'required',
            'presentation'=>'required',
             ]);

         if ($request->hasFile('imageTemoin')) {
        $image = $request->file('imageTemoin');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('img');
        $image->move($destinationPath, $name);
      
    }
        team::find($id)->update($request->all());
        return redirect()->back()->with('success','modifier avce succès');
    }

    public function deleteTeam($id){
      $TemoinDelete= team::find($id)->delete();
      return redirect()->route('NotreEquipe')->with('success','supprimé avec succès');
    }
    

}
