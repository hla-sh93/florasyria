@extends('layout.layout')
@section('title','Advanced Search')
    
    @section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h1 class="mb-2 bread"> FSOL Advanced Search</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="ftco-section contact-section">
        <div class="container">
          <div class="row block-9 mb-5">
            <div class="col-md-12 mb-md-5">
              <form action="advsearch" method="POST" class="bg-light p-5">
                @csrf
                <div class="form-row">
                   <div class="col">
                    <div class="form-group">
                        <label for="flowring-start">{{__('Start Flowering')}}</label>
                        <select class="form-control" id="flowring-start" name="flowring-start">
                          <option value=""> choose One ..</option>
                          @for($i=1;$i<=12;$i++)
                            <option value="{{$i}}">{{$i}}</option>
                          @endfor
                        </select>
                      </div>
                   </div>
                   <div class="col">
                    <div class="form-group">
                        <label for="flowring-end">{{__('End Flowering')}}</label>
                        <select class="form-control" id="flowring-end" name="flowring-end">
                          <option value=""> choose One ..</option>
                          @for($i=1;$i<=12;$i++)
                            <option value="{{$i}}">{{$i}}</option>
                          @endfor
                        </select>
                      </div>
                   </div>
                   <div class="col">
                    <div class="form-group">
                        <label for="life">{{__('life')}}</label>
                        <select class="form-control" id="life" name="life">
                          <option value=""> choose One ..</option>
                          @foreach ($lives as $life)
                            <option value="{{$life->id}}">{{$life->ar_name}}</option>
                          @endforeach
                        </select>
                      </div>
                   </div>
                </div>

                <div class="form-row">
                    <div class="col">
                     <div class="form-group">
                         <label for="econ_value">{{__('Economic Value')}}</label>
                         <select class="form-control" id="econ_value" name="econ_value">
                          <option value=""> choose One ..</option>
                          @foreach ($ecoValues as $item)
                            <option value="{{$item->id}}">{{$item->ar_name}}</option>
                          @endforeach
                         </select>
                       </div>
                    </div>

                    <div class="col">
                     <div class="form-group">
                         <label for="areas">{{__('Areas')}}</label>
                         <select class="form-control" id="areas" name="areas">
                          <option value=""> choose One ..</option>
                          @foreach ($areas as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                          @endforeach
                         </select>
                       </div>
                    </div>
                  </div>
                  
                    <div class="form-row">
                      <div class="col">
                        <div class="form-group">
                            <label for="governorates">{{__('Syrian Governorate')}}</label>
                            <select class="form-control dynamic" id="governorates" name="governorates" data-dependent="cities">
                              <option value=""> choose One ..</option>
                              @foreach ($govs as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                              @endforeach
                            </select>
                          </div>
                       </div>
                       <div class="col">
                        <div class="form-group">
                            <label for="cities">{{__('Syrian Cities')}}</label>
                            <select class="form-control dynamic" id="cities" name="cities" data-dependent="villages">

                            </select>
                          </div>
                       </div>
                       <div class="col">
                        <div class="form-group">
                            <label for="villages">{{__('Syrian Villages')}}</label>
                            <select class="form-control" id="villages" name="villages">

                            </select>
                          </div>
                       </div>
                    </div>
                
                 <div class="form-group">
                    <input type="submit" value="{{__('Search')}}" class="btn btn-primary py-2 px-5 float-left">
                  </div>
              </form>
            
            </div>
          </div>

            <div class="row d-flex">
                
              @foreach ($species as $item)
                  <!-- Card No1-->
                  <div class="col-md-6  ftco-animate">
                  <a href="{{ route('details',[app()->getLocale(), $item->id] )}}" class="card mt-4">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-4 col-sm-6">
                                  <img src="{{Voyager::image( $item->img ) }}" alt="{{$item->species->name}} {{ $item->name}}" class=" mx-auto d-block" width="100px">
                              </div>
                              <div class="col-md-8 col-sm-6">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <h5 class="card-title blue card_title mr-0 mt-0">{{$item->species->name}} {{ $item->name}}</h5>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <p>{{ substr($item->desc,0,100 ) }} ...</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </a>
                </div>
                  <!-- End Card No1-->
                  @endforeach
                  
            </div>
        </div>
      </section>

    @endsection
    @section('script')
    <script>
        $(document).ready(function(){
          $(".dynamic").change(function(){
            if($(this).val() !=""){
              var select=$(this).attr("id");
              var value=$(this).val();
              var dependent=$(this).data("dependent");
              var _token=$('input[name="_token"]').val();
              
              $.ajax({
                url: "advsearchfetch",
                method: "GET",
                data: {select:select,value:value,dependent:dependent},
                success: function(result){
                  $("#"+dependent).html(result);
                }
              });
            }
          });

          $('#governorates').change(function(){
              $('#cities').val('');
              $('#villages').val('');
          });

        $('#cities').change(function(){
          $('#villages').val('');
          });
        });
    </script>
    @endsection