@extends('layout.layout')
@section('title') Flora Map @endsection
    @section('content')

    <section class="hero-wrap hero-wrap-2" @if($header !="") style="background-image:url('{{Voyager::image($header)}}')" @else style="background-image: url('/images/bg_1.jpg');" @endif>
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h1 class="mt-2 bread">Flora Map</h1>
              <h4 class="subhead"> <span>F</span>lora <span>S</span>yria <span>O</span>n <span>L</span>ine</h4>
            </div>
          </div>
        </div>
      </section>

    <section class="ftco-section">
        <div class="container">
          <div class="row mt-5">
            <h2 class="mb-4"> FloraSyria Statistics</h2>
          </div>
            <div class="row">
                <div class="col-md-4">
                  <span style="color:#59CA75">عدد الأنواع المدخلة : </span><span>{{$species}}</span>
                </div>
                <div class="col-md-4">
                  <span style="color:#59CA75"> عدد الأجناس المدخلة :</span><span> {{$genus}}</span>
                </div>
                <div class="col-md-4">
                  <span style="color:#59CA75">عدد العائلات المدخلة :</span><span> {{$families}}</span>
                </div>          
            </div>

          <br>

          <div class="row d-flex">
              <div class="col-md-12 pr-md-4 ftco-animate">
                  <div class="row mt-5">
                    <h2 class="mb-4"> FloraSyria Map</h2>
                  </div>
                  <div class="row">
                    @foreach ($map as $item)
                    
                      <img src="{{Voyager::image($item->img)}}" alt="FloraSyria Map" class="myimage mx-auto d-block" style="border:1px solid #000;">
                    
                    @endforeach
                  </div>
              </div>
          </div>
          
        </div>
    </section>
    @endsection

@section('footer')	
@include('layout.footer')
@endsection

@section('script')

@endsection