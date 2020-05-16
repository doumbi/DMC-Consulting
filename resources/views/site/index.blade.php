@extends('layout')
@section('title','DMC_Consulting')
@section('content')
<div class="hero-wrap">
        <div class="home-slider owl-carousel">
          <div class="slider-item" style="background-image:url({{asset('images/bg.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
              <div class="row no-gutters slider-text align-items-center justify-content-center">
                  <div class="col-md-10 ftco-animate">
                    <div class="text w-100 text-center">
                        <h2>DMC_Consulting met tout en oeuvre</h2>
                        <h1 class="mb-4">Pour le bien être de Bébé & Maman</h1>
                        <p><a href="#" class="btn btn-white">Connecte-toi avec nous</a></p>
                    </div>
                  </div>
                </div>
            </div>
          </div>

          <div class="slider-item" style="background-image:url({{asset('images/bg2.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
              <div class="row no-gutters slider-text align-items-center justify-content-center">
                  <div class="col-md-10 ftco-animate">
                    <div class="text w-100 text-center">
                        <h2>DMC_Consulting Assure :</h2>
                        <h1 class="mb-4">Le renforcement des compétences du personnel de la santé maternelle et infantile</h1>
                        <p><a href="#" class="btn btn-white">Connecte-toi avec nous</a></p>
                    </div>
                  </div>
                </div>
            </div>
          </div>

          <div class="slider-item" style="background-image:url({{asset('images/bg1.png')}});">
            <div class="overlay"></div>
            <div class="container">
              <div class="row no-gutters slider-text align-items-center justify-content-center">
                  <div class="col-md-10 ftco-animate">
                    <div class="text w-100 text-center">
                        <h2>DMC_Consulting c'est:</h2>
                        <h1 class="mb-4">L’amélioration de la santé maternelle et la
                   réduction de la mortalité infantile.
                  </h1>
                        <p><a href="contact" class="btn btn-white">Connecte-toi avec nous</a></p>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
        
        <section class="intro py-5 bg-light">
            <div class="container">
              @foreach ($NosConfig as $items)
                <div class="row">
                    <div class="col-md-4">
                        <div class="intro-box w-100 d-flex">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="text pl-3">
                                <h4 class="mb-0">Appelez-nous:{{$items->numéro}}</h4>
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
                                <h4 class="mb-0">Horaires d'ouvertures</h4>
                                <span>Mon - Sat {{$items->horaire}} PM / Sundays closed</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="intro-box w-100">
                            <p class="mb-0"><a href="{{route('rdv')}}" class="btn btn-primary">Prendre rendez-vous</a></p>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>  
        </section>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Qui sommes nous pour vous ?</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block text-center">
              <div class="media-body">
                <h3 class="heading">DMC_Consulting</h3>
               <p style="font-size: 15px; text-align: justify;">DMC Consulting est un pool de spécialistes de
                la santé maternelle et infantile, constitué de sagesfemmes, d’infirmer(ère)s, de pédiatres, de
                gynécologues-obstétriciens et de psychologues,
                qui joignent leurs expertises et expériences
                diverses dans l’optique de réaliser une vision
                idéaliste qui est la ‘‘maman parfaite pour bébé
                parfait’’ ! D’où le terme « Dream Mothers’s Class »,
                c’est-à-dire la classe des mamans de rêve’’.
              </p>
              </div>
              <div class="form-group text-center">
                <p class="mb-0"><a href="about" class="btn btn-primary">Voir plus</a></p>
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
    
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Appui et conseils</h2>
            <span class="subheading">retrouvez nos conseils sur youtube</span>
          </div>
        </div>
            <div class="row d-flex no-gutters">
                <div class="col-md-6 d-flex">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end mb-4 mb-sm-0" style="background-image:url(images/servi1.png);">
                        <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                            <span class="fa fa-play"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 pl-md-5 py-md-5">
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-account"></span></div>
                        <div class="text pl-4">
                            <h4>Accountability</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-skills"></span></div>
                        <div class="text pl-4">
                            <h4>Expertise</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-performance"></span></div>
                        <div class="text pl-4">
                            <h4>Speed</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        </div>
                    </div>
                    <div class="services-2 w-100 d-flex">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-event"></span></div>
                        <div class="text pl-4">
                            <h4>Delivery</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        </div>
                    </div>
            </div>
        </div>
        </div>
    </section>

  <section class="ftco-counter" id="section-counter">
       <h2 class="mb-5 ml-3">Nos partenaires</h2>
      <div class="container">
        <div class="row">
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                   <img src="images/partner 1.png" class="img-fluid">
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                   <img src="images/partner 2.png" class="img-fluid">
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                   <img src="images/partner 3.png" class="img-fluid">
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                   <img src="images/partner 4.png" class="img-fluid">
                  </div>
                </div>
        </div>
      </div>
    </section>
    <section class="ftco-section testimony-section bg-secondary">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
            <h2>Ils nous font confiance</h2>
            <span class="subheading">Temoignage</span>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
               @foreach ($temoins as $items)
              <div class="item">
                <div class="testimony-wrap py-4">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">{{$items->message}}</p>
                    <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                        <div class="pl-3">
                            <p class="name">{{$items->nom}}</p>
                            <span class="position">{{$items->fonction}}</span>
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
    </section>
    <section class="ftco-section ftco-no-pb ftco-no-pt mb-3 mt-4">
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