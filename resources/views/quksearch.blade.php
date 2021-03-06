@extends('layout.layout')
@section('title','Quick Search')
    @section('content')

    <section class="hero-wrap hero-wrap-2" @if($header !="") style="background-image:url('{{Voyager::image($header)}}')" @else style="background-image: url('/images/bg_1.jpg');" @endif>
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h1 class="mb-2 bread">Search</h1>
              <h4 class="subhead"> <span>F</span>lora <span>S</span>yria <span>O</span>n <span>L</span>ine</h4>
            </div>
          </div>
        </div>
      </section>

      <section class="ftco-section contact-section">
        <div class="container">
          <div class="row block-9">

            <div class="col-md-9 mb-md-5">
                <div class="form-row">
                   <div class="col-md-9">
                    <div class="form-group">
                        <label for="Families">{{__('Families')}}</label>
                        <select class="form-control" id="Families" name="Families" >
                          <option value=""> choose a family ..</option>
                          @foreach ($families as $family)
                            <option value="{{$family->id}}">{{$family->name}}</option>
                          @endforeach
                        </select>
                      </div>
                   </div>
                  </div>

                  <div class="form-row">
                   <div class="col-md-9">
                    <div class="form-group">
                        <label for="Genera">{{__('Genera')}}</label>
                        <select class="form-control" id="Genera" name="Genera">
 
                        </select>
                      </div>
                   </div>
                </div>
                
            </div>

            <div class="col-md-3">
              <a href="{{route('advsearch',app()->getLocale())}} " class="btn btn-success" style="padding:4px 60px; border-radius:5px;"> {{__('advanced search')}}</a>
            </div>
          </div>
          <div id="total_records"></div>
            <div class="row d-flex" id="flower_card">

            </div>
        </div>
      </section>

    @endsection

    @section('script')
    <script>
        $(document).ready(function(){
          // Get Genra from families
          $('select[name="Families"]').on('change',function(){
              var family_id=$(this).val();
              if(family_id){
                $.ajax({
                  url:"searchgenera/"+family_id,
                  method:"GET",
                  dataType:"json",
                  success:function(data){
                    console.log(data)
                    $('select[name="Genera"]').empty();
                    $('select[name="Genera"]').append('<option value="">Choose Genus</option>');
                    $.each(data,function(key,value){
                      $('select[name="Genera"]').append('<option value="'+value.id+'">'+value.name+'</option>');
                    });
                  },
                  error: function(jqxhr, status, exception) {
                    alert('Exception:', exception);
                  }
                });

              } else{
                $('select[name="Genera"]').empty();
                $('#flower_card').empty();
              }
          });

          // Get species from genera
          function findSpecies(genera_id = '') {
                $.ajax({
                url:"searchspecies",
                method:'GET',
                dataType:'html',
                data:{genera_id:genera_id},
                success:function(data){
                  
                  $('#flower_card').html(data);
                  var dataCount=$('#countdiv').data('count');
                  if(dataCount){
                  $('#total_records').html('عدد النتائج : '+dataCount);}
                  }
                });
              }

              $('select[name="Genera"]').on('change', function(){
                var genera_id = $(this).val();
                if(genera_id){
                  findSpecies(genera_id);
                }else{
                  $('#flower_card').empty();
                }
                
              });
        });
    </script>
    @endsection
    
@section('footer')	
@include('layout.footer')
@endsection