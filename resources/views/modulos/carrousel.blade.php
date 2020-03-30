<div id="marcas" class="margin-10">
  <div class="col-10 offset-1 col-md-12 offset-md-0">
          <div class="owl-carousel owl-theme">
             @foreach($logos as $logo)

             <a href="{{ URL::to($logo->img_text) }}">
                  <div class="item">
                      <img src="{{ asset($logo->url.$logo->name)}}">
                  </div>
                </a>

               @endforeach
                <!-- <a href="{{ URL::to('/sub-zero') }}">
                  <div class="item">
                      <img src="{{ asset('img/nosotros/SubZero.jpg')}}">
                  </div>
                </a>
                <a href="{{ URL::to('/wolf') }}">
                  <div class="item">
                      <img src="{{ asset('img/nosotros/Wolf.jpg')}}">
                  </div>
                </a>
                <a href="{{ URL::to('/cove') }}">
                  <div class="item">
                      <img src="{{ asset('img/nosotros/Cove.jpg')}}">
                  </div>
                </a>
                <a href="{{ URL::to('/asko') }}">
                  <div class="item">
                      <img src="{{ asset('img/nosotros/Asko.jpg')}}">
                  </div>
                </a>
                <a href="{{ URL::to('/dexa') }}">
                  <div class="item">
                      <img src="{{ asset('img/nosotros/Dexa.jpg')}}">
                  </div>
                </a>
                <a href="{{ URL::to('/scotsman') }}">
                  <div class="item">
                      <img src="{{ asset('img/nosotros/Scotsman.jpg')}}">
                  </div>
                </a> -->
          </div>
  </div>
</div>