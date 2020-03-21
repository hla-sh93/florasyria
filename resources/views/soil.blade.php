@extends('layout.layout')
@section('title') Syria Soil @endsection

    @section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h1 class="mb-2 bread">{{__('Syria Soil')}}</h1>
            </div>
          </div>
        </div>
      </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12 ftco-animate">
                    <h2 class="mb-4 text-center heading-section">{{__('Syria Soil')}}</h2>
				</div>
			</div>
			<div class="row">
                <div class="col-md-12">
                <p class="text-center"> {{__('SoilHeader')}}</p>
                </div>
            </div> <br> <br>
            <div class="row">
                <div class="col-md-12">

                @foreach ($soil as $object)	
                
                <h4>
                @if(App::getLocale()=="ar")
                    {{$object->ar_name}}
                @else
                    {{$object->en_name}}
                
                @endif
                </h4>   
                    <div class="row">
                        <div class="col-md-9"> 
                            <p class="text-justify">
                                @if(App::getLocale()=="ar")
                                {!!$object->ar_desc!!}
                            @else
                                {!!$object->en_desc!!}
                            
                            @endif
                            </p>
                        </div>
                        <div class="col-md-3">
                            <img src="{{Voyager::image($object->img)}}" alt="{{$object->en_name}}" width="300px" height="300px">
                        </div>
                    </div> <hr> <br>
                @endforeach

                </div>
            </div>
        </div>
    </section>


    @endsection
    
@section('footer')	
@include('layout.footer')
@endsection