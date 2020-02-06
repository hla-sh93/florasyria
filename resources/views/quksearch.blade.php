@extends('layout.layout')
    @section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h1 class="mb-2 bread"> FSOL Quick Search</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="ftco-section contact-section">
        <div class="container">
          <div class="row block-9 mb-5">
            <div class="col-md-12 mb-md-5">
              <form action="#" class="bg-light p-5">
                <div class="form-row">
                   <div class="col">
                    <div class="form-group">
                        <label for="Families">{{__('Families')}}</label>
                        <select class="form-control" id="Families">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                   </div>
                   <div class="col">
                    <div class="form-group">
                        <label for="Genera">{{__('Genera')}}</label>
                        <select class="form-control" id="Genera">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                   </div>
                </div>
                
                <div class="form-group">
                    <input type="submit" value="{{__('Search')}}" class="btn btn-primary py-2 px-5 float-left">
                    <a href="{{route('advsearch',app()->getLocale())}} " class="btn btn-success py-2 px-5 float-right" > {{__('advsearch')}}</a>
                </div>

              </form>
            
            </div>
          </div>

            <div class="row d-flex">
                
                    @for ($i = 0; $i < 3; $i++)
                  <!-- Card No1-->
                  <div class="col-md-6  ftco-animate">
                  <a href="#" class="card mt-4">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-4 col-sm-6">
                                  <img src="{{asset('images/anabasis syriaca.jpg')}}" alt="" class=" mx-auto d-block" width="100px">
                              </div>
                              <div class="col-md-8 col-sm-6">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <h5 class="card-title blue card_title mr-0 mt-0">اسم الزهرة</h5>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </a>
                </div>
                  <!-- End Card No1-->
                  @endfor
                  
            </div>
        </div>
      </section>

    @endsection