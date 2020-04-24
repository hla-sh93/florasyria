@extends('layout.layout')

@section('title', 'Floram Map')
    @section('content')
    <section class="hero-wrap hero-wrap-2" @if($header !="") style="background-image:url('{{Voyager::image($header)}}')" @else style="background-image: url('/images/bg_1.jpg');" @endif>
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
          <h4> خرائط فلورا :</h4>
        </div>
      </div>
			<div class="row">
        @foreach ( $map as $im)
          <div class="col-md-4">
              <img src="{{Voyager::image( $im->img ) }}"  class="myMap img-fluid" alt="{{$im->desc}}">
          </div>
        @endforeach
          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header bg-primary" dir="rtl">
                  <p class="text-white"></p>
                  </div>
                  <div class="modal-body">
                  <img class="popup-img" src="" alt="">
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                  </div>
              </div>
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