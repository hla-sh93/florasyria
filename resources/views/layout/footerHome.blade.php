<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">

      <div class="row">
        <div class="col-md-2">
          <div class="float-right">

            <a href="{{route('changelang', ['lang' => 'ar'])}}"> AR <img src="{{asset('images/ar.png')}}" alt="arabic"> </a> | <a href="{{route('changelang', ['lang' => 'en'])}}"><img src="{{asset('images/en.png')}}" alt="arabic"> EN </a>
          </div>
        </div>
        
        <div class="col-md-10 text-center">

          <p>
&copy;{{ __('All rights reserved | This Website is made  by') }} <a href="#" target="_blank">FloraSyria</a> <script>document.write(new Date().getFullYear());</script>
</p>
        </div>

      </div>
    </div>
  </footer>