@extends('layout.layout')
@section('title','Home')
    @section('content')

@if($header =="")
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
		  <div class="overlay"></div>
      </div>
	  <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
		<div class="overlay"></div>
	</div>
    </section>
@else
	<section class="home-slider owl-carousel">
		@foreach (json_decode($header,true) as $im)
		<div class="slider-item" style="background-image:url('{{Voyager::image( $im ) }}');">
			<div class="overlay"></div>
		</div>
		@endforeach 
	</div>
	</section>
  @endif
		<section class="ftco-section">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about align-items-stretch">
						@foreach($rand as $item)
						
						<div class="wrap-about-border ftco-animate">
							
							@if($item->img =="")
							<img src="{{asset('images/defaul.jpg')}}" alt="{{$item->species->name}} {{ $item->name}}" >
							  @else 
							 <img src="{{Voyager::image( $item->img ) }}" alt="{{$item->species->name}} {{ $item->name}}">
					   		@endif

							<div class="text">
								<h3>{{$item->species->name}} {{ $item->name}}</h3>
								<p>{{ substr($item->desc,0,200 ) }} ...</p>
								<p><a href="{{ route('details',[app()->getLocale(), $item->id] )}}" class="btn btn-primary py-2 px-4">متابعة القراءة</a></p>
							</div>
						</div>
						@endforeach
					</div>
					<div class="col-md-7  pr-md-4 ftco-animate">
					  <h2 class="mb-4">{{__('Flowering Now')}}</h2>
					  @foreach ($species as $item)
						@if(date('m') >= $item->start_flower && date('m') <= $item->end_flower)
					<!-- Card No1-->
                    <a href="{{ route('details',[app()->getLocale(), $item->id] )}}" class="card mt-4">
                        <div class="card-body p-1">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 align-items-center d-flex justify-content-center">
									@if ($item->img == "")
										<img src="{{asset('images/defaul.jpg')}}" alt="{{$item->species->name}} {{ $item->name}}" width="90px" height="90px">
									@else
										<img src="{{Voyager::image( $item->img ) }}" alt="{{$item->species->name}} {{ $item->name}}" width="90px" height="90px">
									@endif
                                </div>
                                <div class="col-md-8 col-sm-6">
                                    <div class="row">
                                        <div class="col-md-12">
										<h5 class="card-title blue card_title mr-0 mt-0">{{$item->species->name}} {{ $item->name}}</h5>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-md-12">
										<p>{{ substr($item->desc,0,100 ) }} ...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</a>
					@endif
					<!-- End Card No1-->
					@endforeach
					<p>{{$species->links()}}</p>
					
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section ftco-consult " style="background-image: url(images/image_5.jpg); color:#fff !important;" data-stellar-background-ratio="0.5">
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
						<img src="{{Voyager::image($sponsor->img)}}" class="sponser-img mx-auto d-block" alt="{{$sponsor->name}}" width="100%">
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

@section('footer')	
	@include('layout.footerHome')
@endsection