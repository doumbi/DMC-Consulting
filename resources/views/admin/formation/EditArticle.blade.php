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
                                        <strong>Ajouter</strong>Formation
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{route('ArticleUpdate',$ArticleEdit)}}" method="patch"  enctype="multipart/form-data" class="form-horizontal">
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
                                                    <label for="text-input" class=" form-control-label">TITRE</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                     <input type="text" value="{{$ArticleEdit->titreArticle}}" id="titreArticle" name="titreArticle" required="required" class=" @error('titreArticle') is-invalid @enderror form-control ">
                                                      @error('titreArticle')
                                                          <p class="text-danger" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </p>
                                                      @enderror
                                                    <small class="form-text text-muted">This is a help text</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">DATE</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" value="{{$ArticleEdit->publishDate}}" id="publishDate" name="publishDate" class="form-control">
                                                    <small class="help-block form-text">Please enter a complex password</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">DESCRIPTION</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                     <textarea type="text"  id="descriptionArticle" name="descriptionArticle" required="required" class=" @error('descriptionArticle') is-invalid @enderror form-control ">{{$ArticleEdit->descriptionArticle}}</textarea>
                                                      @error('descriptionArticle')
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
                                                     <textarea type="text" rows="9"  id="contenuArticle" name="contenuArticle" required="required" class=" @error('contenuArticle') is-invalid @enderror form-control ">{{$ArticleEdit->contenuArticle}}</textarea>
                                                      @error('contenuArticle')
                                                          <p class="text-danger" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                          </p>
                                                      @enderror
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">SERVICE</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="service_id" id="service_id" class="form-control">
                                                        <option value="{{$ArticleEdit->service_id}}">{{$ArticleEdit->service_id}}</option>
                                                        
                                                        @foreach($NosServices as $items)
                                                        <option value="{{$items->id}}">{{$items->id}}</option>
                                                        @endforeach
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">IMAGE</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" value="{{$ArticleEdit->imageArticle}}" id="imageArticle" name="imageArticle" class="form-control-file">
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