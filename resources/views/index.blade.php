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
								<p><a href="/details" class="btn btn-primary py-2 px-4">متابعة القراءة</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-7  pr-md-4 ftco-animate">
					  <h2 class="mb-4">Flowering Now</h2>
					  @for ($i = 0; $i < 3; $i++)
                    <!-- Card No1-->
                    <a href="/details" class="card mt-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <img src="{{asset('images/anabasis syriaca.jpg')}}" alt="" class=" float-right" width="100px">
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

    <section class="ftco-section ftco-consult " style="background-image: url(images/bg_5.jpg); color:#fff !important;" data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
    	<div class="container">
			<div class="row justify-content-center mb-2">
				<div class="col-md-12 ftco-animate">
					<h2 class="mb-4 text-center heading-section" style="color:#fff !important;">رؤيتنا</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="text-justify text-center ">
						رؤيتنا هي تقديم أنفسنا (FSOL) كمجموعة سورية رائدة ، وتجميع التنوع البيولوجي للنبات في بلدنا الأم في شكل سهل الاستخدام ، والعمل كمتطوع لتعزيز الوعي العام على جميع مستويات وقطاعات المجتمع. شاركنا رؤيتنا مع المشاركين من المجتمعات المحلية والطلاب والمنظمات غير الحكومية في مجال الحماية والاستخدام المستدام للتنوع البيولوجي للنبات. مهمتنا هي إطلاق أنشطة في مجال البحث وجمع البيانات وتبادل المعلومات وتوثيق النباتات في سوريا. تستخدم FSOL اللغة العربية لوصف التنوع البيولوجي للنبات في سوريا على مستوى الأنواع كجزء من مهمتها لاتخاذ إجراءات في تطوير المواد التدريبية والمناهج التعليمية للجيل الجديد من علماء النبات وعلماء البيئة في سوريا ، وكذلك في البلدان الأخرى الناطقة باللغة العربية . تهدف FSOL إلى تقديم وصف موحد للنباتات السورية ، مع الصور والرسوم التوضيحية لمعظم الأنواع ، وخرائط توزيع الأصناف التي لها أهمية خاصة. تغطي بيانات FSOL جميع الأراضي السورية. عند الانتهاء من جمع البيانات ، سوف يؤدي مباشرة إلى صياغة مشروع وطني لإصدار النباتات الحديثة في سوريا.
					</p>
				</div>
			</div>
    	</div>
    </section>

	<section class="ftco-section howtohelp-section">
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-md-12 ftco-animate">
                    <h2 class="mb-4 text-center heading-section">كيف نساعد؟</h2>
				</div>
			</div>
			<div class="row">
			<div class="col-md-9">
				<p>
				هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
			  إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
			  ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.
				</p>
			</div>
			  
			  <div class="col-md-3">
				<img src="{{asset('images/logo.jpg')}}" alt="" width="90%" >
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