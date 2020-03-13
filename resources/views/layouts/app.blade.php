<!DOCTYPE html>
<html dir="ltr" lang="es-MX">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NMC6T84');</script>
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

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" media="none" onload="if(media!='all')media='all'">

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
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NMC6T84"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <div id="preloader" style="z-index: 1000">
      <div id="status">&nbsp;</div>
  </div>


<!-- BTN BOTTOM-IZQUIERDA -->
<div id="container-btn-redes">
  <a data-toggle="modal" data-target="#subZeroModal" href="javascript:void(0)">
    <div  class="btn-fixed hide"  data-toggle="tooltip" data-placement="right" title="Solictar Catálogo">
      <div class="details details-showroom">
        <img src="{{ URL::asset('img/icono-btn/catalogo.png')   }}">
      </div>
    </div>  
  </a>
  <a href="{{ URL::to('/showroom#check') }}">
    <div class="btn-fixed hide"  data-toggle="tooltip" data-placement="right" title="Agendar cita en Showroom">
      <div class="details details-cita">
        <img src="{{ URL::asset('img/icono-btn/showroon.png')   }}">
      </div>
    </div>  
  </a>
  <a target="_blank" rel="nofollow" href="https://wa.me/5215549509808?text=Deseo recibir información sobre sus productos">
    <div class="btn-fixed hide"  data-toggle="tooltip" data-placement="right" title="WhatsApp">
      <div class="details details-what">
        <i style="" class="fa fa-whatsapp"></i>
      </div>
    </div>  
  </a>
  <a href="javascript:void(0)">
    <div class="btn-fixed"  data-toggle="tooltip" data-placement="right" title="Contáctanos">
      <div class="details details-contacto">
        <i style="" class="fa fa-comments-o"></i>
      </div>
    </div>  
  </a>
</div>

<!-- MODALS SALES MANAGO -->
<div class="modal fade" id="catalogo" tabindex="-1" role="dialog" aria-labelledby="scotsmanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" style="max-width: 850px">
    <div class="modal-content">
      <div class="modal-body">
        <iframe id="salesmanagoIframe" style="margin: 0; padding: 0; width:850px; height:520px; overflow-y:hidden; overflow-x:hidden; border:none; background:transparent;max-width:100%;" src=""></iframe>
      </div>
    </div>
  </div>
</div>


    @include('elements.header')

    @yield('content')

    @include('elements.footer')

    @include('modulos.modals')




   


    <!-- Custom scripts -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



    <script  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script   src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script  src="{{ asset('js/gallery.js') }}"></script>
    @yield('scripts')


    <script  type="text/javascript">

      $(document).ready(function(){

          $("[data-toggle=tooltip]").tooltip();

          
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


        $('.solicitar-btn').click(function () {
            var url = $(this).attr('rel');
            console.log($('#salesmanagoIframe').attr('src'))
            $('#salesmanagoIframe').attr('src', url);
             console.log($('#salesmanagoIframe').attr('src'))
            setTimeout(mostrarModal, 1000);

          });
        });

      function mover(){
          var elemento = $("#formulario");
          var posicion = elemento.position();
          $("html, body").animate({scrollTop:posicion.top+"px"},"slow");
      }


      function mostrarModal(){
        $('#catalogo').modal('show'); 
      }

    </script>

    <script type="text/javascript">
    $(window).on('load', function() { // makes sure the whole site is loaded 
          $('#status').fadeOut(); // will first fade out the loading animation 
          $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
          //$('body').delay(350).css({'overflow':'visible'});
        })
    </script>

    <script src="https://app3.salesmanago.pl/dynamic/o28qhomp7m09zozm/popups.js"></script>
    @if (isset($popups))
<script type="text/javascript">    
    $('#{{$popups}}').modal('show'); 
</script>
    @endif
</body>
</html>

