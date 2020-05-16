 @extends('layout_admin')
@section('title','DMC_Consulting')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            @foreach ($allservice as $items)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title mb-3">{{$items->titreService}}</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" src="{{asset('img/'.$items->imageService)}}" alt="Card image cap">
                                            <div class="location text-sm-center">
                                               <p>
                                                  {{$items->descriptionService}}
                                               </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="d-flex text-center">
                                        <a href="{{route('ShowService',['id' => $items->id])}}"type="button" class="btn btn-primary m-2">
                                            <i class="fa fa-eye"></i>
                                         </a> 
                                        <a href="{{route('EditService',['id' => $items->id])}}"type="button" class="btn btn-primary m-2">
                                            <i class="fa fa-edit"></i>
                                         </a> 
                                        <a href="{{route('deleteService',['id' => $items->id])}}"type="button" class="btn btn-primary m-2" onclick="return confirm('Vraiment supprimer ce service ?')">
                                            <i class="fa fa-trash"></i>
                                         </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
@endsection