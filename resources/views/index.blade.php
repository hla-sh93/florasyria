@extends('layout.layout')
    @section('content')
	
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
      	<div class="overlay"></div>
      </div>

      <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
        </div>
      </div>
    </section>

		<section class="ftco-section">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about align-items-stretch">
						<div class="wrap-about-border ftco-animate">
							<img src="{{asset('images/anabasis syriaca.jpg')}}" alt="anabasis syriaca">
							{{-- <div class="img" style="background-image: url(images/about.jpg); border"></div> --}}
							<div class="text">
								<h3>Pistacia palaestina</h3>
								<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخ</p>
								<p><a href="{{route('details',app()->getLocale())}}" class="btn btn-primary py-2 px-4">متابعة القراءة</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-7  pr-md-4 ftco-animate">
					  <h2 class="mb-4">{{__('Flowering Now')}}</h2>
					  @for ($i = 0; $i < 3; $i++)
                    <!-- Card No1-->
                    <a href="{{route('details',app()->getLocale())}}" class="card mt-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <img src="{{asset('images/anabasis syriaca.jpg')}}" alt="" class="card_img" width="100px">
                                </div>
                                <div class="col-md-8 col-sm-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5 class="card-title blue card_title mr-0 mt-0">اسم الزهرة</h5>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-md-12">
                                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
					<!-- End Card No1-->
					@endfor
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section ftco-consult " style="background-image: url(images/bg_5.jpg); color:#fff !important;" data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
    	<div class="container">
			<div class="row justify-content-center mb-2">
				<div class="col-md-12 ftco-animate">
					<h2 class="mb-4 text-center heading-section" style="color:#fff !important;">{{__('Our Vision')}}</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="text-justify text-center ">
						@foreach ($vision as $object)
							@if(App::getLocale()=="ar")
								{{$object->ar_vision}}
							@else
								{{$object->en_vision}}
							
							@endif	
						@endforeach
					</p>
				</div>
			</div>
    	</div>
    </section>

	<section class="ftco-section howtohelp-section">
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12 ftco-animate">
                    <h2 class="mb-4 text-center heading-section">{{__('How Can We Help')}}</h2>
				</div>
			</div>
			<div class="row">
			<div class="col-md-9">
				<p>
				@foreach ($howToHelp as $object)
					@if(App::getLocale()=="ar")
						{{$object->ar_desc}}
					@else
						{{$object->en_desc}}
					
					@endif	
				
				</p>
			</div>
			  
			  <div class="col-md-3">
				<img src="{{Voyager::image($object->img)}}" alt="How Can We Help" width="90%" >
			  </div>
			  @endforeach
			</div>
        </div>
    </section>

		<section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">{{__('Sponsors')}}</h2>
            {{-- <p>هذا المشروع تم انجازه بفضل الرعاية الكريمة من </p> --}}
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">

				@foreach ($sponsors as $sponsor)
				<a href="{{$sponsor->url}}" target="_blank">
					<div class="item">
					<div class="testimony-wrap d-flex">
						<img src="{{Voyager::image($sponsor->img)}}" class="sponser-img" alt="{{$sponsor->name}}">
					</div>
					</div>
				</a>
				@endforeach
			
            </div>
          </div>
        </div>
      </div>
    </section>

	@endsection