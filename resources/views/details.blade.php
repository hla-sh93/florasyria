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
                        {{$item->desc}} {{ $item->name}}
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="{{Voyager::image($item->img)}}" alt="{{$item->species->name}}" height="150px">
                </div>
            </div> <br> <br>
            <div class="row">
                <div class="col-md-12">

                    <div class="row">
                        <div class="col-md-6">
                            <h4>الاسم العلمي</h4>
                            <p class="text-justify"> {{$item->species->name}} {{ $item->name}}</p>
                        </div>
                        <div class="col-md-6">
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