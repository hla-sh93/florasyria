@extends('layout.layout')
@section('title') Team @endsection
    @section('content')
  
    <section class="hero-wrap hero-wrap-2" @if($header !="") style="background-image:url('{{Voyager::image($header)}}')" @else style="background-image: url('/images/bg_1.jpg');" @endif>
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h1 class="mt-2 bread">OUR Team</h1>
              <h4 class="subhead"> <span>F</span>lora <span>S</span>yria <span>O</span>n <span>L</span>ine</h4>
            </div>
          </div>
        </div>
      </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">

                <div class="col-md-12 wrap-about pr-md-4 ftco-animate">
                    <h2 class="mb-4">فريق العمل</h2>
                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                        إذا كنت تحتاج إلى عدد أكبر</p>
                    <div class="row mt-5">
                        @foreach ($teams as $team)
                       <div class="col-lg-6">
                        <a  href="{{ route('profile',[app()->getLocale(), $team->id] )}}">
                            <div class="services text-center">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center">
                                    <?php 
                                    if(Voyager::image($team->img) =="") {  ?>
                                    <img src="{{asset('images/user.jpg')}}" alt="{{$team->en_name}}" class="rounded-circle user-img" >
                                    <?php 
                                     } else { ?>
                                     
                                   <img src="{{Voyager::image($team->img)}}" alt="{{$team->en_name}}" class="rounded-circle user-img" >
                               <?php }?>
                                </div>
                                <div class="text media-body">
                                    <h3>
                                        @if(App::getLocale()=="ar")
                                        {{$team->ar_name}}
                                    @else
                                        {{$team->en_name}}
                                    
                                    @endif
                                    </h3>
                                    <p>
                                        @if(App::getLocale()=="ar")
                                            {{$team->ar_jobTitle}}
                                        @else
                                            {{$team->en_jobTitle}}
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </a> 
                        </div>
                      
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