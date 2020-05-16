 @extends('layout_admin')
@section('title','DMC_Consulting')
@section('content')

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            @foreach($AllArticle as $items)
                            <div class="col-md-4">
                                <div class="card">
                                    <img class="card-img-top" src='{{ asset("/img/$items->imageArticle") }}' alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">{{$items->titreArticle}}</h4>
                                        <p class="card-text">{{$items->descriptionArticle}}
                                        </p>
                                    </div>
                                    <hr>
                                        <div class="d-flex text-center">
                                        <a href="{{route('ShowArticle',['id' => $items->id])}}"type="button" class="btn btn-primary m-2">
                                            <i class="fa fa-eye"></i>
                                         </a> 
                                        <a href="{{route('EditArticle',['id' => $items->id])}}"type="button" class="btn btn-primary m-2">
                                            <i class="fa fa-edit"></i>
                                         </a> 
                                        <a href="{{route('deleteArticle',['id' => $items->id])}}"type="button" class="btn btn-primary m-2" onclick="return confirm('Vraiment supprimer ce service ?')">
                                            <i class="fa fa-trash"></i>
                                         </a> 
                                        </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
@endsection