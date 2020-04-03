        <div id="showroom-container" style="margin: 10%">
            <div class="text-center col-12 nopadding">
                <h2> {{ $showroom->title}} </h2>
                  {!! $showroom->description !!}
              
                <div class="col-md-6 offset-md-3 topmargin nopadding">
                    <a class="btn btn-cyan btn-block showroon-btn" href="{{ URL::to('/showroom') }}"><img src="{{ asset('img/icono-btn/showroon.png')   }}"><p>VISITE NUESTROS SHOWROOM</p></a>
                </div>

            <div id="gallery">
              <div class="container">
                <div id="image-gallery">
                  <div class="row">

                    @if(count($showdetail) > 0)

                      @foreach($showdetail as $key => $showd)


                       @if($showdetail->last()->image ===  $showd->image) 
                       <div class="col-lg-4 offset-lg-0 col-md-6 col-sm-6 col-xs-6 offset-3 col-6 image">
                        @else

                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 col-6 image">
                          @endif
                          <div class="img-wrapper">
                           
                            <a href="{{ asset($showd->image) }}"><img src="{{ asset($showd->image) }}" class="img-responsive"></a>
                            <div class="img-overlay">
                              <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </div>
                          </div>
                        </div>

                      @endforeach

                    @endif

                  </div><!-- End row -->
                </div><!-- End image gallery -->
              </div><!-- End container --> 
            </div>
            </div>
        </div>