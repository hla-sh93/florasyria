@extends('layout.layout')
@section('title') climate and Topography @endsection
    @section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h1 class="mb-2 bread">climate and Topography</h1>
            </div>
          </div>
        </div>
      </section>

		<section class="ftco-section ">
			<div class="container">
				<div class="row justify-content-center mb-2">
					<div class="col-md-12 ftco-animate">
                    <h2 class="mb-4 text-center heading-section">{{__('Climate and Topography')}}</h2>
					</div>
				</div>
				<div class="row">
				<div class="col-md-9">
					<p class="text-justify">
                        @foreach ($topography as $itme)
                        @if(App::getLocale()=="ar")
                            {{$itme->ar_desc}}
                        @else
                            {{$itme->en_desc}}
                        
                        @endif	
                    
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="{{Voyager::image($itme->file)}}" alt="climateSyria" width="300px" height="">
                    @endforeach
                </div>
				</div>
			</div>
		</section>

	<section class="ftco-section bg-alic">
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12 ftco-animate">
                    <h2 class="mb-4 text-center heading-section">{{__('Rainfall')}}</h2>
				</div>
			</div>
			<div class="row">
                <div class="col-md-12">
                    <p class="text-center">
                        @foreach ($rainfall as $itme)
                        @if(App::getLocale()=="ar")
                            {{$itme->ar_desc}}
                        @else
                            {{$itme->en_desc}}
                        
                        @endif	
                      
                    </p>
                </div>
                <?php $file = (json_decode($itme->file))[0]->download_link; ?>
                <a href="{{Voyager::image( $file ) }}" target="_blank" class="mx-auto d-block">
                <button class="btn btn-primary py-3 px-5 mx-auto d-block">{{__('attachement')}}</button>
                </a>
                @endforeach
			</div>
        </div>
    </section>

    <section class="ftco-section ">
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12 ftco-animate">
                    <h2 class="mb-4 text-center heading-section">{{__('Temperature')}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">
                        @foreach ($temperature as $itme)
                        @if(App::getLocale()=="ar")
                            {{$itme->ar_desc}}
                        @else
                            {{$itme->en_desc}}
                        
                        @endif	
                      
                    </p>
                </div>
                <?php $file = (json_decode($itme->file))[0]->download_link; ?>
                <a href="{{Voyager::image( $file ) }}" target="_blank" class="mx-auto d-block">
                <button class="btn btn-primary py-3 px-5 mx-auto d-block">{{__('attachement')}}</button>
                </a>
                @endforeach
			</div>
        </div>
    </section>

    <section class="ftco-section bg-alic">
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12 ftco-animate">
                    <h2 class="mb-4 text-center heading-section">{{__('Evaporation')}}</h2>
				</div>
			</div>
			<div class="row">
                <div class="col-md-12">
                    <p class="text-center">
                        @foreach ($evaporation as $itme)
                        @if(App::getLocale()=="ar")
                            {{$itme->ar_desc}}
                        @else
                            {{$itme->en_desc}}
                        
                        @endif	
                      @endforeach    
                    </p>
                </div>
			</div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12 ftco-animate">
                    <h2 class="mb-4 text-center heading-section">{{__('Bio-climatic Subdivision')}}</h2>
				</div>
			</div>
			<div class="row">
                <div class="col-md-12">
                    <p class="text-center">
                        @foreach ($bioclimatic as $itme)
                        @if(App::getLocale()=="ar")
                            {{$itme->ar_desc}}
                        @else
                            {{$itme->en_desc}}
                        
                        @endif	
                     
                    </p>
                </div>
                <?php $file = (json_decode($itme->file))[0]->download_link; ?>
                <a href="{{Voyager::image( $file ) }}" target="_blank" class="mx-auto d-block">
                <button class="btn btn-primary py-3 px-5 mx-auto d-block">{{__('attachement')}}</button>
                </a>
                @endforeach 
            </div> <br> <br>
            <div class="row">
                <div class="col-md-12">
                    @foreach ($bioclimatic as $itme)
                    @if(App::getLocale()=="ar")
                        {!!$itme->ar_subdivision!!}
                    @else
                        {!!$itme->en_subdivision!!}
                    
                    @endif	
                  @endforeach 
                </div>
            </div>
        </div>
    </section>


    @endsection
    
@section('footer')	
@include('layout.footer')
@endsection