@extends('layout.layout')
@section('title','Quick Search')
    @section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h1 class="mb-2 bread">Quick Search</h1>
              <h4 class="subhead"> <span>F</span>lora <span>S</span>yria <span>O</span>n <span>L</span>ine</h4>
            </div>
          </div>
        </div>
      </section>

      <section class="ftco-section contact-section">
        <div class="container">
          <div class="row block-9 mb-5">
            <div class="col-md-12 mb-md-5">

                <div class="form-row">
                   <div class="col-md-6">
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
                   <div class="col-md-3 align-self-center offset-md-3">
                    <div class="form-group">
                      <a href="{{route('advsearch',app()->getLocale())}} " class="btn btn-success" style="padding:4px 60px; border-radius:5px;"> {{__('advanced search')}}</a>
                  </div>
                   </div>
                  </div>
                  <div class="form-row">
                   <div class="col-md-6">
                    <div class="form-group">
                        <label for="Genera">{{__('Genera')}}</label>
                        <select class="form-control" id="Genera" name="Genera">
 
                        </select>
                      </div>
                   </div>
                </div>

              </form>
            
            </div>
          </div>
          <div id="total_records"></div>
            <div class="row d-flex" id="flower_card">>
                
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
                    // console.log(data)
                    $('select[name="Genera"]').empty();
                    $('select[name="Genera"]').append('<option value="">Choose Genus</option>');
                    $.each(data,function(key,value){
                      $('select[name="Genera"]').append('<option value="'+value.id+'">'+value.name+'</option>');
                    });
                  }
                })

              } else{
                $('select[name="Genera"]').empty();
              }
          });

          // Get species from genera
          function findSpecies(genera_id = '') {
                $.ajax({
                url:"searchspecies",
                method:'GET',
                data:{genera_id:genera_id},
                dataType:'json',
                success:function(data){
                  $('#flower_card').html(data.table_data);
                  $('#total_records').html('عدد النتائج : '+data.total_data);
                  }
                });
              }

              $(document).on('change', '#Genera', function(){
                var genera_id = $(this).val();
                findSpecies(genera_id);
              });
        });
    </script>
    @endsection
    
@section('footer')	
@include('layout.footer')
@endsection