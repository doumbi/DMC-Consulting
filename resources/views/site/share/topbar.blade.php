<div class="wrap">
			<div class="container">
				 @foreach ($NosConfig as $items)
				<div class="row justify-content-between">
						<div class="col">
							<p class="mb-0 phone"><span class="fa fa-phone"></span> <a href="#">{{$items->numéro}}</a></p>
						</div>
						<div class="col d-flex justify-content-end">
							<div class="social-media">
				    		<p class="mb-0 d-flex">
				    			<a href="{{$items->linkFace}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only"></i></span></a>
				    			<a href="{{$items->linkTwit}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only"></i></span></a>
				    			<a href="{{$items->linkLinke}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-linkedin"><i class="sr-only"></i></span></a>
				    			<a href="{{$items->linkYout}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-youtube"><i class="sr-only"></i></span></a>
				    		</p>
			        </div>
						</div>
				</div>
				@endforeach 
			</div>
		</div>