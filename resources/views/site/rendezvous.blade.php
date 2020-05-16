 @extends('layout')
@section('title','DMC_Consulting')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-2">
      
    </div>
    <div class="col-md-8 mb-4">
       <div class="comment-form-wrap pt-5">
    <h3 class="mb-5">Prendre Rendez-Vous pour une consultation</h3>
      <form action="{{ route('NewRdv') }}" method="POST" class="p-5 bg-light">
         @csrf
                  <div class="form-group">
                    <label >Nom *</label>
                    <input type="text" class="form-control" id="nom" name="nom">
                  </div>
                  <div class="form-group">
                    <label for="prenom">Prénom *</label>
                    <input type="text" class="form-control" id="prenom" name="prenom">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="localisation">Localisation *</label>
                    <input type="text" class="form-control" id="localisation" name="localisation">
                  </div>
                  <div class="form-group">
                    <label >Justification</label>
                    <textarea name="justification" id="justification" cols="30" rows="10" class="form-control" >
                    </textarea>
                  </div>
                  <div class="form-group">
                    <label for="rdvDate">Date Rendez-vous *</label>
                    <input type="date" class="form-control" id="rdvDate" name="rdvDate">
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Enregistrer" class="btn py-3 px-4 btn-primary">
                  </div>
        </form>
  </div>
    </div>
    <div class="col-md-2 mb-4">
      
    </div>
    
  </div>
 
</div>
@endsection