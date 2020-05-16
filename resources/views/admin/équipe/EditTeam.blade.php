 @extends('layout_admin')
@section('title','DMC_Consulting')
@section('content')

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Ajouter </strong> Service
                                    </div>
                                    <div class="card-body card-block">
                                      
                                    <form action="{{route('TeamUpdate',$TeamEdit)}}" method="patch"  class="form-horizontal">
                                        @csrf
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Static</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">Username</p>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">titre</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                     <input type="text" value="{{$TeamEdit->nom}}" id="nom" name="nom" required="required" class=" @error('nom') is-invalid @enderror form-control ">
                                                      @error('nom')
                                                          <p class="text-danger" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </p>
                                                      @enderror
                                                    <small class="form-text text-muted">This is a help text</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Fonction</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                     <input type="text" value="{{$TeamEdit->fonction}}" id="fonction" name="fonction" required="required" class=" @error('fonction') is-invalid @enderror form-control ">
                                                      @error('fonction')
                                                          <p class="text-danger" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </p>
                                                      @enderror
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">PRESENTATION</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                     <textarea type="text"  id="presentation" name="presentation" required="required" class=" @error('message') is-invalid @enderror form-control ">{{$TeamEdit->presentation}}</textarea>
                                                      @error('presentation')
                                                          <p class="text-danger" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </p>
                                                      @enderror
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">PHOTO</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                     <input type="file"  id="imageTemoin" name="imageTemoin" required="required" class=" @error('imageTemoin') is-invalid @enderror form-control-file ">
                                                      @error('imageTemoin')
                                                          <p class="text-danger" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </p>
                                                      @enderror
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                       </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
 @endsection