@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Gracias')
@section('content')



<section id="hero-desktop">
    <img src="{{ asset('img/Hero-Gracias.jpg')}}">
</section>

<section id="hero-mobile">
    <img src="{{ asset('img/hero-gracias-mobile.jpg')}}">
</section>

<section class="container-gral">
    

  <div class="text-center light topmargin-lg col-md-7 mx-auto">
      <h2>HOLA, <span style="color: #01bb9c">NOMBRE</span></h2>

      <h3  class="light topmargin-sm bottommargin-sm">NOS ENCANTARÍA CONOCER SU OPINIÓN ACERCA DE LA INSTALACION DEL EQUIPO <span style="color: #01bb9c;font-weight: 500">$MARCAS</span></h3>

      <p class="nomargin">Para nosotros es muy importante saber cómo podemos mejorar para usted.</p>
   
      <p class="topmargin-sm">Por favor compartanos su evaluacion sobre la instalacion de sus equipos haciendo click en el número de estrellas que usted considere acertado.</p>
  </div>

</section>

<section  id="rating-funnel" style="background-image: url('{{ URL::asset('images/wizerlink/fondo-hero.jpg')}}');">
       <div id="ratingFunnel4">
           <div class="col-md-10 offset-md-1  text-center">
                <h3  class="light topmargin-sm bottommargin-sm">RATING TOTAL DEL SERVICIO DE INSTALACIÓN</h3>
                <p>(CALIDAD, TIEMPO SERVICIO)</p>
                <form id="form-cambios" action="{{ URL::route('confirmarCalificacion')}}" method="POST">
                     @csrf
                    <input type="hidden" name="entregableId" value="">
                    <div  class="col-lg-8 offset-lg-2 topmargin-sm container-input">
                        <input type="hidden" name="calidad" id="calidad">
                        <div class="col-12">
                            <a href="javascript:void(0);"><i id="1"  class="fa fa-star fa-3x pm"></i></a>
                            <a  href="javascript:void(0);"><i id="2"  class="fa fa-star fa-3x pm"></i></a>
                            <a  href="javascript:void(0);"><i id="3"  class="fa fa-star fa-3x pm"></i></a>
                            <a  href="javascript:void(0);"><i id="4"  class="fa fa-star fa-3x pm"></i></a>
                            <a  href="javascript:void(0);"><i id="5"  class="fa fa-star fa-3x pm"></i></a>
                        </div>

                        <div class="form-group col-9 mx-auto topmargin">

                            <textarea class="form-control" placeholder="Mensaje" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="topmargin">
                          
                          <h3  class="">ESPERAMOS HABERTE AYUDADO,</h3>

                          <h3  class="bottommargin-sm"><span style="color: #01bb9c;font-weight: 500">LA FAMILIA PERFECTA. :)</span></h3>
                        </div>
                    </div>

                    <div class="col-md-2 mx-auto offset-md-2 text-center topmargin-sm">                                        
                        <button type="submit" class="btn btn-block btn-cyan" href="javascript:void(0)"><img src="{{ asset('img/icono-btn/enviar.png')   }}"><p>ENVIAR</p></button>
                    </div>

                </form>
            </div>
       </div>
    
</section>

<div class="modal fade" id="confirmacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content col-padding" style="border-radius: 20px;    padding-top: 0;">
      <div class="modal-header" style="border-radius: 20px;border: 0px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="bottommargin text-center">
            {!! trans('web/rating.modal-calif')!!}
        </div>
          <div class="row nomargin">
                <div class="col-6">
                    
                    <button type="button" class="btn btn-secondary button-rounded btn-block" data-dismiss="modal"><b>{!! trans('web/rating.btn-ret')!!}</b></button>
                </div>
                <div class="col-6">
                        <button type="submit" form="form-cambios" class="btn btn-secondary button-rounded btn-block button-blue" ><b>OK</b></button>
                </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection


 

@section('styles')
<style type="text/css">

  .error{
    color: red
  } 
    html,body,div#wrapper,#rating-funnel{
        height: 100%
    }

    button img{
      width: 20px;
      margin-right: 10px;
    }

    button p {
      line-height: 2.0;
      display: inline;
    }

    #rating-funnel i.fa {
        color: #d5d5d5;
        margin: 0 2vw;
        font-size: 5vw
    }

    #rating-funnel i.fa:hover {
        color: #fec299;
    }

    .active i.fa{
      color: #fec299!important;
    }
    #ratingFunnel4 .fa-3x {
        font-size: 2.5vw;
    }

    @media(max-width: 1200px){
      #ratingFunnel4 .fa-3x {
        font-size: 2em;
      }
    }
    @media(max-width: 768px){
    #rating-funnel{
        margin-top: 75px;
        height: 100%
    } 
    #rating-funnel i.fa {
        padding: 0 10px;
        color: #d5d5d5;
    }

    #rating-funnel h2 {
        font-size: 4.5vw;
    }

    #rating-funnel h4 {
        font-size: 4vw;
    }

    #rating-funnel label {
        font-size: 3.5vw;
    }
    #rating-funnel .button {
        font-size: 3.5vw;
    }
}
</style>

@endsection

@section('scripts')
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
<script type="text/javascript">
$("i.fa").click(function(){
    $(this).parent().addClass('active')
    $(this).parent().prevAll().addClass('active')
    $(this).parent().nextAll().removeClass('active')
    $(this).closest('.container-input').find('input').val(this.id)


});

        $(document).ready(function(){

            var form = $( "#form-cambios" );
            form.validate({
                ignore: [],
                rules: {
                    calidad:{
                        required: true,
                    },
                },
                messages: {
                     calidad:{
                        required: "Debe seleccionar una calificacion por favor"
                    },
                },
            });

            $("#btn-modal").click(function(){  // capture the click
                if(form.valid()){   // test for validity
                    $('#confirmacion').modal('show');
                }
            });

        })
</script>

@endsection