 @extends('layout_admin')
@section('title','DMC_Consulting')
@section('content')

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            @foreach($allteam as $items)
                             <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" src="images/icon/avatar-01.jpg" alt="Card image cap">
                                            <h5 class="text-sm-center mt-2 mb-1">{{$items->fonction}}</h5>
                                            <div class="location text-sm-center">
                                                <p>
                                                    {{$items->presentation}}
                                                   
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <strong class="card-title mb-3">{{$items->nom}}</strong>
                                    </div>
                                    <div class="d-flex text-center">
                                        <a href="{{route('ShowTeam',['id' => $items->id])}}"type="button" class="btn btn-primary m-2">
                                            <i class="fa fa-eye"></i>
                                         </a> 
                                        <a href="{{route('EditTeam',['id' => $items->id])}}"type="button" class="btn btn-primary m-2">
                                            <i class="fa fa-edit"></i>
                                         </a> 
                                        <a href="{{route('deleteTeam',['id' => $items->id])}}"type="button" class="btn btn-primary m-2" onclick="return confirm('Vraiment supprimer ce Temoignage ?')">
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