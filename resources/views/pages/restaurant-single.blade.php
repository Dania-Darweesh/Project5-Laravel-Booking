@extends('pages.layout.master')

@section('content')

		<div class="hero-wrap" style="background-image: url('/images/meal3.jpg');">
    <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <h1 class="mb-5 bread">Meal Details</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 m-auto">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">
          			<div class="single-slider owl-carousel">
          				<div class="item">
          					<div class="room-img" style="background-image: url({{$meal->meal_img}});"></div>
          				</div>
          	
          			</div>
          		</div>
          		<div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
          			<h2 class="mb-4"> <span>{{$meal->name}}</span></h2>
    						<p class="mb-5">{{$meal->description}}</p>
							
    						</div>

				  <div class="mt-5 ">
					{{-- <form class="w-full" method="POST" action="{{route('review.store')}}">
						@csrf
						<h5 class="mtext-108 cl2 p-b-7">
							Add a review
						</h5>
						
						<div class="row">
							<div class="col-sm-12 ">
								<label class="stext-102 col-12" for="review_title">Title</label>
								<input class="col-6" id="name" type="text" name="review_title">
							</div>
							<div class="col-12 ">
								<label class="stext-102 cl3 col-12" for="review_body">Your review</label>
								<textarea class="col-12" id="review" name="review_body"></textarea>
							</div>
							
						</div>
						<button class="btn btn-primary mb-4" type="submit" name="add-btn">
							Add commint
						</button>
						<input type="hidden" name="user_id" value="1">
						<input type="hidden" name="meal_id" value="{{$meal->id}}">
					</form> --}}


					{{-- /////////////////////////// --}}
					<div class="row">
						<div class="col-12">
							<h2 class="contact-title">Add a review</h2>
						</div>
						<div class="col-lg-8">
							<form class="form-rest-single contact_form" method="POST" action="{{route('public.storeReview')}}" id="contactForm" novalidate="novalidate">
								@csrf
								<div class="row">
									
									<div class="col-sm-6">
										<div class="form-group">
											<input class="form-control valid" name="review_title" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Title'" placeholder="Enter Title">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<textarea class="form-control w-100" name="review_body" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your comment'" placeholder="Enter your comment "></textarea>
										</div>
									</div>
									
								</div>
								<div class="form-group mt-3">
									<button type="submit" class="btn-rest mb-5">Add comment</button>
								</div>
	
								<input type="hidden" name="user_id" value="1">
								<input type="hidden" name="meal_id" value="{{$meal->id}}">
							</form>
						</div>
						<div class="col-lg-3 offset-lg-1 mt-5">
							<div class="media contact-info">
								<span class="contact-info__icon"><i class="fas fa-home"></i></span>
								<div class="media-body">
									<h3>Buttonwood, California.</h3>
									<p>Rosemead, CA 91770</p>
								</div>
							</div>
							<div class="media contact-info">
								<span class="contact-info__icon"><i class="fas fa-mobile-alt"></i></span>
								<div class="media-body">
									<h3>+1 253 565 2365</h3>
									<p>Mon to Fri 9am to 6pm</p>
								</div>
							</div>
							<div class="media contact-info">
								<span class="contact-info__icon"><i class="far fa-envelope"></i></span>
								<div class="media-body">
									<h3>support@colorlib.com</h3>
									<p>Send us your query anytime!</p>
								</div>
							</div>
						</div>
					</div>
					  


					@foreach ($reviews as $item)
						
					
						<div class="backg-comment p-3 border rounded mb-2 border-0">
							<div class="flex-w flex-sb-m p-b-1">
								<span class="mtext-107 cl2 p-r-20 font-weight-bold">
									{{$item->review_title}}
								</span>

							</div>
							<p class="stext-102 cl6">
								{{$item->review_body}}
							
							</p>
						</div>

					@endforeach
				</div>


				{{-- ///////////////////////////////////////////// --}}
				

          		
          	</div>
          </div> <!-- .col-md-8 -->
          
            

		</div>
        </div>
      </div>
    </section> 


    @endsection
