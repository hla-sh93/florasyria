@extends('layout.layout')
@section('title') Founder @endsection
    @section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                  <h1 class="mt-2 bread"> Founder </h1>
                  <h4 class="subhead"> <span>F</span>lora <span>S</span>yria <span>O</span>n <span>L</span>ine</h4>
            </div>
          </div>
        </div>
      </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
              @foreach ($founder as $object)

                <div class="col-md-9 wrap-about pr-md-4 ftco-animate">
                    <h2 class="mb-4">              
                      @if(App::getLocale()=="ar")
                      {{$object->ar_name}}
                      @else
                      {{$object->en_name}}
                      @endif
                    </h2>
                    <p>
                      @if(App::getLocale()=="ar")
                      {!!$object->ar_description!!}
                      @else
                      {!!$object->en_description!!}
                      @endif
                    </p>               
                    </div>
                <div class="col-md-3">
                  <img src="{{Voyager::image($object->img)}}" alt="{{$object->en_name}}" width="100%" class="mt-md-5 mb-md-3">
                  <?php $file = (json_decode($object->cv_file))[0]->download_link; ?>
                  <a href="{{Voyager::image( $file ) }}" target="_blank">
                    <button class="btn btn-primary py-2 px-5"> 
                    {{__('Curriculum Vitae')}}
                  </button>
                </a>
                </div>
             @endforeach   
            </div>
        </div>
    </section>
    @endsection

@section('footer')	
	  @include('layout.footer')
@endsection