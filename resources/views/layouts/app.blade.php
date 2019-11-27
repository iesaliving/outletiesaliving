<!DOCTYPE html>
<html dir="ltr" lang="es-MX">
<head>
<!-- Google Tag Manager -->


<!-- End Google Tag Manager -->
    <meta property="og:image" content="{{ asset('images/meta_image.png') }}" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="@yield('description')" />
    <meta name="author" content="Omar Ramirez"/>
    <meta name="keywords" content="@yield('keywords')">
    <title>IESA | @yield('title')</title>

    <!-- Stylesheets

    ============================================= -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" onload="if(media!='all')media='all'">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" onload="if(media!='all')media='all'">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

    <style type="text/css">

/* Preloader */

#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #fff;
  /* change if the mask should have another color then white */
  z-index: 99;
  /* makes sure it stays on top */
}

#status {
  width: 200px;
  height: 200px;
  position: absolute;
  left: 50%;
  /* centers the loading animation horizontally one the screen */
  top: 50%;
  /* centers the loading animation vertically one the screen */
  background-image: url(https://raw.githubusercontent.com/niklausgerber/PreLoadMe/master/img/status.gif);
  /* path to your loading animation */
  background-repeat: no-repeat;
  background-position: center;
  margin: -100px 0 0 -100px;
  /* is width and height divided by two */
}
    </style>


    @yield('styles')

</head>
<body>
  <div id="preloader" style="z-index: 1000">
      <div id="status">&nbsp;</div>
  </div>


    

    @include('elements.header')

    @yield('content')

     @include('elements.footer')




    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" media="none" onload="if(media!='all')media='all'">


    <!-- Custom scripts -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(window).on('load', function() { // makes sure the whole site is loaded 
          $('#status').fadeOut(); // will first fade out the loading animation 
          $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
          //$('body').delay(350).css({'overflow':'visible'});
        })
    </script>



    <script async src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script async async src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script async src="{{ asset('js/gallery.js') }}"></script>
    @yield('scripts')

    <script async type="text/javascript">
      $(document).ready(function(){


          $(".menu-trigger").click(function(){
            $("#menu-container").toggleClass("collapse");
          });


          var lastPositionScrollTop =100;
          $(window).scroll(function () {
              var position = $(this).scrollTop();

              if ((position > lastPositionScrollTop) && (position > 200)){
                  $("#header-custom").attr('style',  'opacity: 0;z-index:-1'); 


                  
              } else {  
                   $("#header-custom").attr('style',  'opacity: 1;z-index:10'); 
                   
              }
              lastPositionScrollTop = position;
              if (position<600 ){
                   $("#header").attr('style',  'position: relative'); 

              } else{
                    $("#header").attr('style',  'position: fixed');
                    $("#header").attr('style',  'background-color: #fff');  
              }
          });
        });


    </script>


</body>
</html>

