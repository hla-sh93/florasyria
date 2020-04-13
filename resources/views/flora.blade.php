@extends('layout.layout')
@section('title','Flora')
    @section('content')
    <section class="hero-wrap hero-wrap-2" @if($header !="") style="background-image:url('{{Voyager::image($header)}}')" @else style="background-image: url('/images/bg_1.jpg');" @endif>
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h1 class="mb-2 bread">Flora</h1>
              <h4 class="subhead"> <span>F</span>lora <span>S</span>yria <span>O</span>n <span>L</span>ine</h4>
            </div>
          </div>
        </div>
      </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12 ftco-animate">
                <h2 class="mb-4 text-center heading-section">{{__('Previous Studies')}}</h2>
				</div>
			</div>
			<div class="row">
                <div class="col-md-12">
                    <p class="text-center">
                        @foreach ($pre as $itme)
                        @if(App::getLocale()=="ar")
                            {!!$itme->ar_desc!!}
                        @else
                            {!!$itme->en_desc!!}
                        
                        @endif
                    </p>

                    <?php $file = (json_decode($itme->file))[0]->download_link; ?>
                    <a href="{{Voyager::image( $file ) }}" target="_blank" class="mx-auto d-block">
                    <button class="btn btn-primary py-3 px-5 mx-auto d-block">{{__('attachement')}}</button>
                    </a>
                    @endforeach
                </div>
            </div> <br> <br>
            <div class="row">
                <div class="col-md-12">

                    @foreach ($flo as $itme) 
                <h4>
                    @if(App::getLocale()=="ar")
                        {{$itme->ar_name}}
                    @else
                        {{$itme->en_name}}
                    
                    @endif    
                </h4>   
                    <div class="row">
                        <div class="col-md-9">
                            
                            <p class="text-justify">
                                @if(App::getLocale()=="ar")
                                    {!!$itme->ar_desc!!}
                                @else
                                    {!!$itme->en_desc!!}
                                
                                @endif    
                            </p>
                        </div>
                        <div class="col-md-3">
                            <img src="{{Voyager::image( $itme->image ) }}" alt="{{$itme->en_name}}" width="200px" height="200px">
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