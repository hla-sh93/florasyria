@extends('layout.layout')
@section('title') Profile  @endsection
    @section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                  <h1 class="mt-2 bread"> Profilre</h1>
            </div>
          </div>
        </div>
      </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
              @foreach ($member as $team)
              
                <div class="col-md-9 wrap-about pr-md-4 ftco-animate">
                    <h2 class="mb-4"> 
                      @if(App::getLocale()=="ar")
                      {{$team->ar_name}}
                      @else
                          {{$team->en_name}}
                      
                      @endif
                  </h2>
                  <p>
                    @if(App::getLocale()=="ar")
                        {!!$team->ar_description!!}
                    @else
                        {!!$team->en_description!!}
                    @endif

                  </p>
                </div>
                <div class="col-md-3">
                  <?php 
                    if(Voyager::image($team->img) =="") {  ?>
                    <img src="{{asset('images/user.jpg')}}" alt="{{$team->en_name}}" width="100%" class="mt-md-5 mb-md-3" >
                    <?php 
                      } else { ?>
                      
                    <img src="{{Voyager::image($team->img)}}" alt="{{$team->en_name}}" width="100%" class="mt-md-5 mb-md-3" >
                <?php }?>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @endsection