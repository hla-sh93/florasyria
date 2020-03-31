@extends('layout.layout')
@foreach ($spe as $item)
@section('title',$item->species->name .' '.$item->name)
    @section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h1 class="mb-2 bread">{{$item->species->name}} {{ $item->name}}</h1>
              <h4 class="subhead"> <span>F</span>lora <span>S</span>yria <span>O</span>n <span>L</span>ine</h4>
            </div>
          </div>
        </div>
      </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12 ftco-animate">
                    <h2 class="mb-4 text-center heading-section">{{$item->species->name}} {{ $item->name}}</h2>
				</div>
			</div>
			<div class="row">
                <div class="col-md-9">
                    <p class="text-justify">
                        {{$item->desc}}
                    </p>
                    <p class="text-justify">
                        @if( $item->reference_id !="")
                        Reference:
                        <a href="{{$item->reference->source}}" target="_blank">{{$item->reference->title}}</a>
                        @endif 
                    </p>
                </div>
                <div class="col-md-3" width="100%">
                   
                    {{-- SlideShow --}}
                    @if(json_decode($item->imgs,true) != "")
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                        </ul>
                    
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            @if($item->img == "") 
                            <img src="{{asset('images/defaul.jpg')}}" alt="{{$item->species->name}} {{ $item->name}}" height="200px">
                            @else 
                            <img src="{{Voyager::image( $item->img ) }}" alt="{{$item->species->name}} {{ $item->name}}" height="200px">
                            @endif
                        </div>
                    
                        @foreach (json_decode($item->imgs,true) as $im)
                        <div class="carousel-item">
                            <img src="{{Voyager::image($im) }}" alt="{{$item->species->name}} {{ $item->name}}" height="200px">
                        </div>
                        @endforeach
                        </div>
                    
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        </a>
                    
                    </div>                    
                    @else
                    {{-- End SlidShow --}}
                        @if($item->img == "") 
                            <img src="{{asset('images/defaul.jpg')}}" alt="{{$item->species->name}} {{ $item->name}}" height="200px">
                        @else 
                            <img src="{{Voyager::image( $item->img ) }}" alt="{{$item->species->name}} {{ $item->name}}" height="200px">
                        @endif
                    @endif
                </div>
            </div> <br> <br>
            <div class="row">
                <div class="col-md-12">

                    <div class="row">
                        <div class="col-md-4">
                            <h4>الاسم العلمي</h4>
                            <p class="text-justify"> {{$item->species->name}} {{ $item->name}}</p>
                        </div>
                        <div class="col-md-4">
                            <h4>الاسم المرادف</h4>
                            <p class="text-justify"> {{$item->synonym}}</p>
                        </div>
                        <div class="col-md-4">
                            <h4>الاسم المحلي</h4>
                            <p class="text-justify"> {{$item->local}}</p>
                        </div>
                    </div> <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>لون الزهرة</h4>
                            <p class="text-justify"> {{$item->color}} </p>
                        </div>
                        <div class="col-md-6">
                            <h4>المميزات</h4>
                            <p class="text-justify"> {{$item->characterization}}</p>
                        </div>
                    </div> <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>البيئة</h4>
                            <p class="text-justify">{{$item->habitat}} </p>
                        </div>
                        <div class="col-md-6">
                            <h4>دورة الحياة</h4>
                            <p class="text-justify"> 
                                @if( $item->life1_id !="")
                                {{$item->life_1->ar_name}}
                                @endif 
                                @if( $item->life2_id !="")
                                , {{$item->life_2->ar_name}}
                                @endif
                                
                            </p>
                        </div>
                    </div> <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>القيمة الاقتصادية</h4>
                            <p class="text-justify">
                                @if( $item->ecValue_id !="")
                                {{$item->ecovalue->ar_name}}
                                @endif                                
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h4>الانتماء الجغرافي </h4>
                            <p class="text-justify">
                                @if( $item->area_id !="")
                                {{$item->area->name}}
                                @endif
                            </p>
                        </div>
                    </div> <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>التوزع في سورية حسب المناطق</h4>
                            <p class="text-justify">
                                @if( $item->location_id !="")
                                {{$item->location->name}}
                                @endif
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h4>أشهر الإزهار</h4>
                            <p class="text-justify">
                                @for($i=$item->start_flower; $i<=$item->end_flower;$i++)
                                {{$i.' '}}
                                @endfor
                            </p>
                        </div>
                    </div> <hr>
                   
                </div>
            </div>
        </div>
    </section>


    @endsection
    @endforeach

    
@section('footer')	
@include('layout.footer')
@endsection