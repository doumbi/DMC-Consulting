<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temoignage;

class TemoinController extends Controller
{
    public function AddTemoignage(){
    	return view('admin.temoignage.AddTemoignage');
    }

    public function NosTemoignages(){
    	 $alltemoins= temoignage::all();
    	return view('admin.temoignage.NosTemoignages',compact('alltemoins'));
    }

    public function createTemoin( Request $request){
    
        $this->validate($request,[
            'nom'=>'required|string|max:255', 
            'fonction'=>'required',
            'imageTemoin'=>  'required',
            'message'=>'required',
             ]);

         if ($request->hasFile('imageTemoin')) {
        $image = $request->file('imageTemoin');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('img');
        $image->move($destinationPath, $name);
       

      
    }

        
        temoignage::create($request->all());
        return redirect()->back()->with('success','temoin enregistré avec succès');

    }


     public function ShowTemoin($id){
      $temoin= temoignage::where('id',$id)->get();
      return view('admin.temoignage.ShowTemoin',compact('temoin'));
    }

     public function EditTemoin($id){

      $TemoinEdit = temoignage::findOrFail($id);
      return view('admin.temoignage.EditTemoin',compact('TemoinEdit'));
    }
  public function TemoinUpdate(Request  $request,$id){
     
       $this->validate($request,[
            'nom'=>'required|string|max:255', 
            'fonction'=>'required',
            'imageTemoin'=>  'required',
            'message'=>'required',
             ]);

         if ($request->hasFile('imageTemoin')) {
        $image = $request->file('imageTemoin');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('img');
        $image->move($destinationPath, $name);
      
    }
        temoignage::find($id)->update($request->all());
        return redirect()->back()->with('success','modifier avce succès');
    }

    public function deleteTemoin($id){
      $TemoinDelete= temoignage::find($id)->delete();
      return redirect()->route('NosTemoignages')->with('success','supprimé avec succès');
    }
}
