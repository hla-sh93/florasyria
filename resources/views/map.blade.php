@extends('layout.layout')
@section('title') Flora Map @endsection
    @section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('/images/bg_1.jpg');">
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
            <div class="row d-flex">
                <div class="col-md-12 wrap-about pr-md-4 ftco-animate">
                    <div class="row mt-5">

                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
    
@section('footer')	
@include('layout.footer')
@endsection