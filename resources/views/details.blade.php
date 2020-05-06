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
			<div class="row">
                <div class="col-md-8">
                        {{-- Row1 --}}
                        <div class="row">
                            <div class="col-md-4">
                                <h4>الاسم العلمي</h4>
                                <p class="text-justify"> {{$item->species->name}} {{ $item->name}}</p>
                            </div>
                            
                            <div class="col-md-4">
                                @if($item->synonym !="")
                                <h4>الاسم المرادف</h4>
                                <p class="text-justify"> {{$item->synonym}}</p> 
                                @endif                               
                            </div>
                            
                            <div class="col-md-4">
                                <h4>الاسم المحلي</h4>
                                <p class="text-justify"> {{$item->local}}</p>                                
                            </div>
                        </div>
                        <br>
                        {{-- Row2 --}}
                        <div class="row">
                            <div class="col-md-12">
                                <h4>الوصف</h4>
                                <p class="text-justify">
                                    {{$item->desc}}
                                </p>                              
                            </div>
                        </div>
                        <br>
                        {{-- Row3 --}}
                        <div class="row">
                            <div class="col-md-4">
                                <h4>لون الزهرة</h4>
                                <p class="text-justify"> {{$item->color}} </p>
                            </div>
                            <div class="col-md-4">
                                <h4>البيئة</h4>
                                <p class="text-justify">{{$item->habitat}} </p>
                            </div>
                            <div class="col-md-4">
                                <h4>أشهر الإزهار</h4>
                                <p class="text-justify">
                                    @for($i=$item->start_flower; $i<=$item->end_flower;$i++)
                                    {{$i.' '}}
                                    @endfor
                                </p>
                            </div>
                        </div>
                        <br>
                        {{-- Row4 --}}
                        <div class="row">
                            <div class="col-md-4">
                                <h4>القيمة الاقتصادية</h4>
                                <p class="text-justify">
                                    @foreach ($item->ecovalue as $eco) 
                                        {{$eco->ar_name}} ,
                                    @endforeach                            
                                </p>
                            </div>
                            <div class="col-md-4">
                                <h4>الانتماء الجغرافي </h4>
                                <p class="text-justify">
                                    @if( $item->area_id !="")
                                    {{$item->area->name}}
                                    @endif
                                </p>                                
                            </div>
                            <div class="col-md-4">
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
                        </div>
                        <br>
                        {{-- Row5 --}}
                        <div class="row">
                            <div class="col-md-12">
                                <h4>المميزات</h4>
                                <p class="text-justify"> {{$item->characterization}}</p>                                
                            </div>
                        </div>
                        <br>
                        {{-- Row6 --}}
                        <div class="row">
                            <div class="col-md-12">
                                <h4>التوزع في سورية حسب المناطق</h4>
                                <p class="text-justify">
                                    @if($item->location !="")
                                        @foreach ($item->location as $loc) 
                                            <p><strong>{{$loc->village->city->gov->name}} </strong>: {{$loc->village->city->name}} -> {{$loc->village->name}} -> {{$loc->name}}  </p>
                                        @endforeach
                                    @endif
                                </p>
                            </div>
                        </div>
                        {{-- row 7 --}}
                        <div class="row">
                            <div class="col-md-12">
                                @if( $item->reference_id !="")
                                <h4>المراجع</h4>
                                <p class="text-justify">
                                    Reference:
                                    <a href="{{$item->reference->source}}" target="_blank">{{$item->reference->title}}</a>
                                </p>
                                @endif 
                            </div>
                        </div>
                </div>
                <div class="col-md-4">
                    @if($item->img == "") 
                        <img src="{{asset('images/defaul.jpg')}}" alt="{{$item->species->name}} {{ $item->name}}" height="200px" width="200px" class="m-2 mx-auto d-block">
                    @else 
                        <img src="{{Voyager::image( $item->img ) }}" alt="{{$item->species->name}} {{ $item->name}}" class="myImg" data-title="{{ $item->image_title}}">
                    @endif

                    @if($item->imgs !="")
                        @foreach (json_decode($item->imgs,true) as $im)
                        <img src="{{Voyager::image( $im ) }}" class="myImg" data-title="{{ $item->image_title}}" alt="{{$item->species->name}} {{ $item->name}}">
                        @endforeach 
                        @endif
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary align-items-center justify-content-center" >
                                    <p class="text-white text-center img_title"></p>
                                </div>
                                <div class="modal-body">
                                <img class="popup-img" src="" alt="" >
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div> 
                    
                </div>
			</div>   
        </div>
    </section>


    @endsection
    @endforeach

    
@section('footer')	
@include('layout.footer')
@endsection