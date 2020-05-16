 @extends('layout_admin')
@section('title','DMC_Consulting')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            @foreach ($service as $items)
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title mb-3">{{$items->titreService}}</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" src="{{asset('img/'.$items->imageService)}}" alt="Card image cap">
                                            <div class="location text-sm-center">
                                               <p>
                                                  {{$items->contenuService}}
                                               </p>
                                            </div>
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