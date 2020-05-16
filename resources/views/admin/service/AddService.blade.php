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
                                      
                                    <form action="{{route('createService')}}" method="post"  class="form-horizontal">
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
                                                    <label for="text-input" class=" form-control-label">NOM</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                     <input type="text"  id="titreService" name="titreService" required="required" class=" @error('titreService') is-invalid @enderror form-control ">
                                                      @error('titreService')
                                                          <p class="text-danger" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </p>
                                                      @enderror
                                                    <small class="form-text text-muted">This is a help text</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">DESCRIPTION</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                     <textarea type="text"  id="descriptionService" name="descriptionService" required="required" class=" @error('descriptionService') is-invalid @enderror form-control "></textarea>
                                                      @error('descriptionService')
                                                          <p class="text-danger" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </p>
                                                      @enderror
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">CONTENU</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                     <textarea type="text" rows="9"  id="contenuService" name="contenuService" required="required" class=" @error('contenuService') is-invalid @enderror form-control "></textarea>
                                                      @error('contenuService')
                                                          <p class="text-danger" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </p>
                                                      @enderror
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">IMAGEs</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                     <input type="file"  id="imageService" name="imageService" required="required" class=" @error('imageService') is-invalid @enderror form-control-file ">
                                                      @error('imageService')
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