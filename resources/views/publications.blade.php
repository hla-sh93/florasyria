@extends('layout.layout')
@section('title') Publications  @endsection
    @section('content')

    <section class="hero-wrap hero-wrap-2" @if($header !="") style="background-image:url('{{Voyager::image($header)}}')" @else style="background-image: url('/images/bg_1.jpg');" @endif>
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h1 class="mt-2 bread">Publications & Useful links</h1>
              <h4 class="subhead"> <span>F</span>lora <span>S</span>yria <span>O</span>n <span>L</span>ine</h4>
            </div>
          </div>
        </div>
      </section>

    <section class="ftco-section">
        <div class="container">
            <div class="col-md-12 ftco-animate">
                <h2 class="mb-4">{{__('Published Articles')}}</h2>
                    <p>{{__('publicationHead')}}</p>
                </div> <br>
                <div class="col-md-10 offset-md-1 ftco-animate">
                @foreach ($publications as $item)
              <!-- Card No1-->
              <?php $file = (json_decode($item->document))[0]->download_link; ?>
              <a href="{{Voyager::image( $file ) }}" class="card mt-4">
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-2 col-sm-6">
                              <img src="{{asset('images/attachement.png')}}" alt="" class="card_img" width="100px">
                          </div>
                          <div class="col-md-10 col-sm-6">
                              <div class="row">
                                  <div class="col-md-12">
                                      <h5 class="card-title blue card_title mr-0 mt-0">{{$item->name}}</h5>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <p class="mb-0 pb-0">{{$item->desc}}</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </a>
              <!-- End Card No1-->
              @endforeach
              </div> <hr>

            <div class="col-md-12 ftco-animate">
                <h2 class="mb-4">{{__('Useful Links')}}</h2>
            </div>
            <div class="row d-flex">
                @foreach ($links as $link)
                <div class="col-md-8">
                <a href="{{$link->url}}" target="_blank">
                    <div class="card m-2" style="background-color:#FAFAFf;">
                        <div class="card-body">
                            <h5 class="card-title" style="color:#333;"> {{$link->name}}</h5>
                            <p class="card-text">{{$link->desc}}</p>
                        </div>
                    </div>
                </a>
            </div>
                @endforeach   
            </div>
        </div>
    </section>
    @endsection
    
@section('footer')	
@include('layout.footer')
@endsection