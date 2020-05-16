<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuration;
use App\Article;
use App\Service;

class ServiceController extends Controller
{

    public function service(){
      $NosServices = service::all();
      $NosConfig = configuration::all();
      return view('site.service',compact('NosServices','NosConfig'));
    }

    public function OneService($id){
      $vari= service::where('id',$id);
      $final=[];
      foreach ($vari->get() as $i) {
        array_push($final, [
          'titreService'=>$i->titreService,
          'descriptionService'=>$i->descriptionService,
          'imageService'=>$i->imageService,
          'contenuService'=>$i->contenuService,
          'article'=>$i->h2c()->get(),
        ]);

       

      }
      $NosConfig = configuration::all();
      $NosServices = service::all();
      $final = article::where('id',$id)->get();
       
    	return view('site.OneService',compact('NosConfig','final','NosServices'));
    }

     public function SingleService($id){
      $vari= service::where('id',$id);
      $final=[];
      foreach ($vari->get() as $i) {
        array_push($final, [
          'titreService'=>$i->titreService,
          'descriptionService'=>$i->descriptionService,
          'imageService'=>$i->imageService,
          'contenuService'=>$i->contenuService,
          'article'=>$i->h2c()->get(),
        ]);
       

      }
      $final = article::where('id',$id)->get();
       $NosConfig = configuration::all();
       $NosServices = service::all();
    	return view('site.SingleService',compact('NosConfig','final','NosServices'));
    }

     public function NosServices(){

      $allservice = service::all();
    	return view('admin.service.NosServices',compact('allservice'));
    }

     public function AddService(){
    	return view('admin.service.AddService');
    }

      public function createService( Request $request){
    
        $this->validate($request,[
            'titreService'=>'required|string|max:255', 
            'descriptionService'=>'required',
            'imageService'=>  'required',
            'contenuService'=>'required',
             ]);

         if ($request->hasFile('imageService')) {
        $image = $request->file('imageService');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('img');
        $image->move($destinationPath, $name);
       

      
    }

        
        service::create($request->all());
        return redirect()->back()->with('success','service enregistré avec succès');

    }

     public function ShowService($id){
      $service = service::where('id',$id)->get();
      return view('admin.service.ShowService',compact('service'));
    }

     public function EditService($id){

      $ServiceEdit = service::findOrFail($id);
      return view('admin.service.EditService',compact('ServiceEdit'));
    }

     public function ServiceUpdate(Request  $request,$id){
     
        $this->validate($request,[
            'titreService'=>'required|string|max:255', 
            'descriptionService'=>'required',
            'imageService'=>  'required',
            'contenuService'=>'required',
             ]);

         if ($request->hasFile('imageService')) {
        $image = $request->file('imageService');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        $image->move($destinationPath, $name);
       

      
    }
        service::find($id)->update($request->all());
        return redirect()->back()->with('success','modifier avce succès');
    }

    public function deleteService($id){
      $ServiceDelete= service::find($id)->delete();
      return redirect()->route('NosServices')->with('success','supprimé avec succès');
    }
    

    
}
