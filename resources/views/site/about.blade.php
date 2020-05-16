@extends('layout')
@section('title','DMC_Consulting')
@section('content')

 <section class="hero-wrap hero-wrap-2"  style="background-image:url({{asset('images/bg1.png')}});" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>A propos<i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Qui sommes nous ?</h1>
          </div>
        </div>
      </div>
    </section>

		<section class="intro py-5">
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

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
	          <div class="col-md-7 heading-section text-center ftco-animate">
	            <h2>Presentation de DMC_Consulting .</h2>
	            <span class="subheading">Other Services</span>
	          </div>
            </div>
    		<div class="row d-flex no-gutters mb-5">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end mb-4 mb-sm-0" style="background-image:url(images/banner_bg.png);">
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5 py-md-5">
    				<div class="services-2 w-100 d-flex">
    					<div class="text pl-4">
    						<h4>C'est quoi DMC ?</h4>
    						<p>DMC Consulting est un pool de spécialistes de
								la santé maternelle et infantile, constitué de sagesfemmes, d’infirmer(ère)s, de pédiatres, de
								gynécologues-obstétriciens et de psychologues,
								qui joignent leurs expertises et expériences
								diverses dans l’optique de réaliser une vision
								idéaliste qui est la ‘‘maman parfaite pour bébé
								parfait’’ ! D’où le terme « Dream Mothers’s Class »,
								c’est-à-dire la classe des mamans de rêve’’.
							</p>
    					</div>
    				</div>
    				<div class="services-2 w-100 d-flex">
    					<div class="text pl-4">
    						<h4>DMC intervient dans :</h4>
    						<p>La Santé Maternelle
								 -La Santé Petite enfance
								 -La Nutrition
								 -La Vaccination
								 -Prises en charge Diverses
								 -Auditeur clinique
							</p>
    					</div>
    				</div>

	        </div>
        </div>
    	</div>
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Presentation de DMC_Consulting .</h2>
            <span class="subheading">Other Services</span>
          </div>
        </div>
    		<div class="row d-flex no-gutters mb-5">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end mb-4 mb-sm-0" style="background-image:url(images/banner_bg.png);">
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5 py-md-5">
    				<div class="services-2 w-100 d-flex">
    					<div class="text pl-4">
    						<h4>C'est quoi DMC ?</h4>
    						<p>DMC Consulting est un pool de spécialistes de
								la santé maternelle et infantile, constitué de sagesfemmes, d’infirmer(ère)s, de pédiatres, de
								gynécologues-obstétriciens et de psychologues,
								qui joignent leurs expertises et expériences
								diverses dans l’optique de réaliser une vision
								idéaliste qui est la ‘‘maman parfaite pour bébé
								parfait’’ ! D’où le terme « Dream Mothers’s Class »,
								c’est-à-dire la classe des mamans de rêve’’.
							</p>
    					</div>
    				</div>
    				<div class="services-2 w-100 d-flex">
    					<div class="text pl-4">
    						<h4>DMC intervient dans :</h4>
    						<p>La Santé Maternelle
								 -La Santé Petite enfance
								 -La Nutrition
								 -La Vaccination
								 -Prises en charge Diverses
								 -Auditeur clinique
							</p>
    					</div>
    				</div>

	        </div>
        </div>
    	</div>
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Presentation de DMC_Consulting .</h2>
            <span class="subheading">Other Services</span>
          </div>
        </div>
    		<div class="row d-flex no-gutters mb-5">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end mb-4 mb-sm-0" style="background-image:url(images/banner_bg.png);">
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5 py-md-5">
    				<div class="services-2 w-100 d-flex">
    					<div class="text pl-4">
    						<h4>C'est quoi DMC ?</h4>
    						<p>DMC Consulting est un pool de spécialistes de
								la santé maternelle et infantile, constitué de sagesfemmes, d’infirmer(ère)s, de pédiatres, de
								gynécologues-obstétriciens et de psychologues,
								qui joignent leurs expertises et expériences
								diverses dans l’optique de réaliser une vision
								idéaliste qui est la ‘‘maman parfaite pour bébé
								parfait’’ ! D’où le terme « Dream Mothers’s Class »,
								c’est-à-dire la classe des mamans de rêve’’.
							</p>
    					</div>
    				</div>
    				<div class="services-2 w-100 d-flex">
    					<div class="text pl-4">
    						<h4>DMC intervient dans :</h4>
    						<p>La Santé Maternelle
								 -La Santé Petite enfance
								 -La Nutrition
								 -La Vaccination
								 -Prises en charge Diverses
								 -Auditeur clinique
							</p>
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


		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Our Life Coach</h2>
            <span class="subheading">Team &amp; Staff</span>
          </div>
        </div>
				<div class="row">
					 @foreach ($team as $items)
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/servi1.png);">
								</div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>{{$items->nom}}</h3>
								<span class="position mb-2">{{$items->fonction}}</span>
								<div class="faded">
								    <p>{{$items->presentation}}</p>
								    <ul class="ftco-social text-center">
						                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
						                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
						                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
						                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
					                </ul>
				                </div>
						    </div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>



    <section class="ftco-section testimony-section bg-secondary">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
            <h2>Happy Clients &amp; Feedbacks</h2>
            <span class="subheading">Testimonies</span>
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
    </section>
 @endsection
