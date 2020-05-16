<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Service;


class ArticleController extends Controller
{
     public function admin(){
    	return view('admin.Accueil');
    }
     public function formation(){
        $AllArticle = article::all();
    	return view('admin.formation.NosFormations',compact('AllArticle'));
    }

     public function AddFormation(){
     	$NosServices = service::all();
    	return view('admin.formation.AddFormation',compact('NosServices'));
    }

       public function createArticle(Request $request)
    {
        $article = new article();

        //add to database
        $article->titreArticle = $request->titreArticle;
        $article->descriptionArticle = $request->descriptionArticle;
         $article->imageArticle = $request->imageArticle;
        $article->contenuArticle = $request->contenuArticle;
         $article->publishDate = $request->publishDate;
          $article->service_id = $request->service_id;
        $article->save();

    
   
             if ($request->hasFile('imageArticle')) {
            $image = $request->file('imageArticle');
            $name = time().'.'.$image->getclientOriginalExtension();
            $destinationPath = public_path('img/article');
            $image->move($destinationPath, $name);  
         }
        
        return redirect()->back()->with('success','Article enregistré avec succès');

    }

    public function EditArticle($id){

      $ArticleEdit = article::findOrFail($id);
      $NosServices = service::all();
      return view('admin.formation.EditArticle',compact('ArticleEdit','NosServices'));
    }

    public function ShowArticle($id){
      $article = article::where('id',$id)->get();
      return view('admin.formation.ShowArticle',compact('article'));
    }


     public function ArticleUpdate(Request  $request,$id){
     
         $this->validate($request,[
            'titreArticle'=>'required|string|max:255', 
            'descriptionArticle'=>'required',
            'imageArticle'=>  'required',
            'contenuArticle'=>'required',
            'publishDate'=> 'required',
            'service_id'=>'required',
             ]);

        if ($request->hasFile('imageArticle')) {
            $image = $request->file('imageArticle');
            $name = time().'.'.$image->getclientOriginalExtension();
            $destinationPath = public_path('img/article');
            $image->move($destinationPath, $name); 
       

      
    }
        article::find($id)->update($request->all());
        return redirect()->back()->with('success','modifier avce succès');

    }

    public function deleteArticle($id){
      $ArticleDelete= article::where('id',$id)->delete();
      return redirect()->back()->with('success','supprimé avec succès');
    }


    
     
}
