@extends('layout.layout')
@section('title','Contact')
    @section('content')

    <section class="hero-wrap hero-wrap-2" @if($header !="") style="background-image:url('{{Voyager::image($header)}}')" @else style="background-image: url('/images/bg_1.jpg');" @endif>
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h1 class="mb-2 bread">Contact Us</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="ftco-section contact-section">
        <div class="container">
          <div class="row d-flex mb-5 contact-info justify-content-center" style="direction:ltr;">
              <div class="col-md-8">
                  <div class="row mb-5">
                    <div class="col-md-4 text-center py-4">
                        <div class="icon">
                            <span class="icon-map-o"></span>
                        </div>
                      <p><span>{{__('Address:')}}</span> P.O.Box 5793
                        Damascus
                        Syria</p>
                    </div>
                    <div class="col-md-4 text-center border-height py-4">
                        <div class="icon">
                            <span class="icon-mobile-phone"></span>
                        </div>
                      <p><span>{{__('Mobile:')}}</span> <a href="tel://+963 944 718291">+ 963 944 718291</a></p>
                    </div>
                    <div class="col-md-4 text-center py-4">
                        <div class="icon">
                            <span class="icon-envelope-o"></span>
                        </div>
                      <p><span>{{__('Email:')}}</span> <a href="mchikh@scs-net.org">mchikh@scs-net.org</a></p>
                    </div>
                  </div>
            </div>
          </div>
          <div class="row block-9 justify-content-center mb-5">
            <div class="col-md-8 mb-md-5">
                <h2 class="text-center">{{__('Or you can send us a message right here')}}</h2>
                @if(session('success'))
                  <div class="alert alert-success" > {{ session('success') }}</div>
                @endif
            <form action="{{route('contact.store',app()->getLocale())}}" method="POST" class="bg-light p-5 contact-form">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="{{__('your Name')}}">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="contact_email" name="contact_email" placeholder="{{__('your Email')}}">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="contact_subject" name="contact_subject" placeholder="{{__('your Subject')}}">
                </div>
                <div class="form-group">
                  <textarea id="contact_message" name="contact_message" cols="30" rows="7" class="form-control" placeholder="{{__('your Message')}}"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="{{__('Send')}}" class="btn btn-primary py-3 px-5">
                </div>
              </form>
            
            </div>
          </div>
        </div>
      </section>

    @endsection