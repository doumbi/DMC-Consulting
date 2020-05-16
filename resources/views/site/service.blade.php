@extends('layout')
@section('title','DMC_Consulting')
@section('content')
 <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Services</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="intro py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="intro-box w-100 d-flex">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="fa fa-phone"></span>
              </div>
              <div class="text pl-3">
                <h4 class="mb-0">Call us: +12 234 456 7890</h4>
                <span> 198 West 21th Street, Suite 721 New York NY 10016</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="intro-box w-100 d-flex">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="fa fa-clock-o"></span>
              </div>
              <div class="text pl-3">
                <h4 class="mb-0">Opening Hours</h4>
                <span>Mon - Sat 7:00 AM - 8:00 PM / Sundays closed</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="intro-box w-100">
              <p class="mb-0"><a href="{{route('rdv')}}" class="btn btn-primary">Prendre Rendez-Vous</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>NOS DOMAINES D'ACTION</h2>
            <span class="subheading">Nous offrons des services</span>
          </div>
        </div>
            <div class="row">
         @foreach ($NosServices as $items)
          <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block text-center">
              <div class=" d-flex justify-content-center align-items-center">
                    <img src="images/about.png" class="img-fluid">
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">{{$items->titreService}}</h3>
                <p>{{$items->descriptionService}}</p>
              </div>
                <div class="form-group text-center">
                  <p class="mb-0"><a href="{{route('OneService',['id' => $items->id])}}" class="btn btn-primary">Voir plus</a></p>
                </div> 
            </div>
          </div>
          @endforeach
        </div>
        </div>
    </section>
    @foreach ($NosServices as $items)
     <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>{{$items->titreService}}</h2>
            <span class="subheading">Dommaine d'action</span>
          </div>
        </div>
        <div class="row d-flex no-gutters">
          <div class="col-md-6 d-flex">
            <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end mb-4 mb-sm-0" style="background-image:url(images/servi2.png);">
              <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                <span class="fa fa-play"></span>
              </a>
            </div>
          </div>
          <div class="col-md-6 pl-md-5 py-md-5">
            <div class="services-2 w-100 d-flex">
              <div class="text pl-4">
                <p>{{$items->contenuService}}</p>
              </div>
            </div>
            <div class="form-group mt-5 text-center">
              <p class="mb-0"><a href="{{route('OneService',['id' => $items->id])}}" class="btn btn-primary">En savoir plus</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endforeach
    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light mb-3">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
                <div class="bg-secondary w-100 rounded p-4">
                    <div class="row">
                      <div class="col-md-7 d-flex align-items-center">
                        <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 18px;">Souscrire à notre newsletter</h2>
                      </div>
                      <div class="col-md-5 d-flex align-items-center">
                        <form action="{{ route('Newletter') }}" method="post" class="subscribe-form">
                         @csrf
                          <div class="form-group d-flex">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email address" >
                            <input type="submit" value="Subscribe" class="submit px-3">
                          </div>
                        </form>
                      </div>
                  </div>
                  </div>
                </div>
          </div>
      </div>
    </section>
  @endsection




