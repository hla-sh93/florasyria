@extends('layout.layout')

@section('title', 'Floram Map')
    @section('content')
    <section class="hero-wrap hero-wrap-2"  style="background-image: url('/images/bg_1.jpg');" >
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h1 class="mb-2 bread">Flora Map</h1>
              <h4 class="subhead"> <span>F</span>lora <span>S</span>yria <span>O</span>n <span>L</span>ine</h4>
            </div>
          </div>
        </div>
      </section>

<section class="ftco-section">
    <div class="container">
      <div class="row">
      <div class="col-md-4"> <span style="color:#59CA75"> عدد الأنواع المدخلة : </span> <span> {{ $species}}</span></div>
      <div class="col-md-4"> <span style="color:#59CA75"> عدد الأجناس المدخلة : </span> <span> {{ $genus}}</span></div>
      <div class="col-md-4"> <span style="color:#59CA75"> عدد العائلات المدخلة : </span> <span> {{ $families}}</span></div>
      </div><br><br>
      <div class="row">
        <div class="col-md-12">
          <h4> الأنواع:</h4>
        </div>
      </div>
    <div class="row">
        <table class="table table-sm table-striped" dir="rtl">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">الجنس</th>
                <th scope="col">الاسم</th>
                <th scope="col">القيمة الاقتصادية</th>
                <th scope="col">الانتماء الجغرافي</th>
                <th scope="col">دورة الحياة</th>
                <th scope="col">بداية الازهار</th>
                <th scope="col">نهاية الازهار</th>
                <th scope="col">حذف</th>
              </tr>
            </thead>
            <tbody>
                @foreach($s as $item)
              <tr>
              <th scope="row"> {{$item->id}} </th>
                <td>{{$item->species['name']}}</td>
                <td>{{ $item->name}}</td>
                <td>
                    @foreach ($item->ecovalue as $eco) 
                    {{$eco->ar_name}} ,
                     @endforeach
                </td>
                <td>
                    @if( $item->area_id !="")
                        {{$item->area->name}}
                    @endif
                </td>
                <td>
                    @if( $item->life1_id !="")
                        {{$item->life_1->ar_name}}
                    @endif 
                    @if( $item->life2_id !="")
                        , {{$item->life_2->ar_name}}
                    @endif 
                </td>
                <td> {{$item->start_flower}}</td>
                <td>{{$item->end_flower}}</td>
                <td> <a href="{{ route('sort.delete',[app()->getLocale(), $item->id] )}}"><button type="button" class="btn btn-danger btn-sm"> حذف</button></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>

            <p>{{ $s->links() }}</p>
    </div>   
  </div>
</section>


    @endsection


    
@section('footer')	
@include('layout.footer')
@endsection

@section('script')
    <script>
    $('.myMap').click(function(){
      var src=$(this).attr('src');
      var alt=$(this).attr('alt');
      $('.modal').modal('show');
      $('.popup-img').attr('src',src);
      $('.text-white').html(alt);
    });  
    </script>    
@endsection