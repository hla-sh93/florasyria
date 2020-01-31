@extends('pages.layout')
    @section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h1 class="mt-2 bread">OUR Team</h1>
            </div>
          </div>
        </div>
      </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">

                <div class="col-md-12 wrap-about pr-md-4 ftco-animate">
                    <h2 class="mb-4">فريق العمل</h2>
                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                        إذا كنت تحتاج إلى عدد أكبر</p>
                    <div class="row mt-5">
                        @for($i=0;$i<4;$i++)
                    
                       <div class="col-lg-6">
                        <a  href="{{route('about',app()->getLocale())}}">
                            <div class="services text-center">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center">
                                   <img src="{{asset('images/person_1.jpg')}}" alt="" class="rounded-circle user-img" >
                                </div>
                                <div class="text media-body">
                                    <h3>اسم الموظف</h3>
                                    <p>العمل - الدراسة - الخبرة - أو أي معلومات أخرى.</p>
                                </div>
                            </div>
                        </a> 
                        </div>
                      
                         @endfor   
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection