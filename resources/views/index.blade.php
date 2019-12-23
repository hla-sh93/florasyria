@extends('pages.layout')
    @section('content')
	
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
      	<div class="overlay"></div>
      </div>

      <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
        </div>
      </div>
    </section>

		<section class="ftco-section">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about align-items-stretch">
						<div class="wrap-about-border ftco-animate">
							<img src="{{asset('images/anabasis syriaca.jpg')}}" alt="anabasis syriaca">
							{{-- <div class="img" style="background-image: url(images/about.jpg); border"></div> --}}
							<div class="text">
								<h3>Pistacia palaestina</h3>
								<p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخ</p>
								<p><a href="#" class="btn btn-primary py-2 px-4">متابعة القراءة</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-7  pr-md-4 ftco-animate">
					  <h2 class="mb-4">Flowering Now</h2>
					  @for ($i = 0; $i < 3; $i++)
                    <!-- Card No1-->
                    <a href="#" class="card mt-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <img src="{{asset('images/anabasis syriaca.jpg')}}" alt="" class=" float-left" width="100px">
                                </div>
                                <div class="col-md-8 col-sm-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5 class="card-title blue float-right mr-0 mt-0">اسم الزهرة</h5>
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
					<!-- End Card No1-->
					@endfor
					</div>
				</div>
			</div>
		</section>
		


    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-end">
    			<div class="col-md-6 py-5 px-md-5">
    				<div class="py-md-5">
		          <div class="heading-section heading-section-white ftco-animate mb-5">
		            <h2 class="mb-4">اتصل بنا</h2>
		            <p>إن كنت ترغب في إرسال رسالة لصاحب الموقع، أو تريد طلب خدمة ما لا تتردد بالاتصال:</p>
		          </div>
		          <form action="#" class="appointment-form ftco-animate">
		    				<div class="d-md-flex">
			    				<div class="form-group">
			    					<input type="text" class="form-control" placeholder="الاسم">
			    				</div>
			    				<div class="form-group ml-md-4">
			    					<input type="text" class="form-control" placeholder="الموضوع">
			    				</div>
		    				</div>
		    				<div class="d-md-flex">
		    					<div class="form-group">
			    					<input type="email" class="form-control" placeholder="E-mail">
			    				</div>
		    				</div>
		    				<div class="d-md-flex">
		    					<div class="form-group">
			              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="نص الرسالة"></textarea>
			            </div>
			            <div class="form-group mt-md-5">
			              <input type="submit" value="أرسل" class="float-right btn btn-white py-2">
			            </div>
		    				</div>
		    			</form>
		    		</div>
    			</div>
        </div>
    	</div>
    </section>


		<section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">الرعاة</h2>
            <p>هذا المشروع تم انجازه بفضل الرعاية الكريمة من </p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">

				@for ($i=1;$i<4;$i++)

				<a href="">
					<div class="item">
					<div class="testimony-wrap d-flex">
						<img src="{{asset('images/ford.jpg')}}" class="sponser-img" alt="">
					</div>
					</div>
				</a>
				@endfor
			
            </div>
          </div>
        </div>
      </div>
    </section>

	@endsection