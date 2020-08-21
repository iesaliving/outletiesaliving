@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Contacto')
@section('content')

<section id="hero-desktop">
    <img src="{{ asset(isset($images) ? $images[0]->url.$images[0]->name : 'img/hero-contacto.jpg')}}">
</section>

<section id="hero-mobile">
    <img src="{{ asset(isset($images) ? $images[1]->url.$images[1]->name : 'img/hero-contacto-mobile.jpg')}}">
</section>



<section class="container-gral">

    <div id="container-faq" class="margin-7">

    	<div class="text-center bottommargin-lg">
        	<h2 id="text-contacto" style="text-transform: uppercase;"> {{$contact->title}} </h2>

        	<p>{!! $contact->description !!}</p>
    	</div>


        <div class="row nomargin">
            <div class="col-lg-6 nomargin row">
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.6277240649997!2d-99.19561618681189!3d19.428484486886635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d201ff11a77f6d%3A0x18848b36c0d7d2d9!2sIESA!5e0!3m2!1ses-419!2sve!4v1573338741143!5m2!1ses-419!2sve" style="width: 100%;height:300px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                 <div class="col-md-5 col-xl-5 d-flex topmargin-sm">
                    <i  class="fa fa-map-marker fa-2x fa-contacto"></i>
                    <h3>Showroom CDMX</h3>
                </div>
                <div class="col-md-6 offset-md-1 col-xl-5 offset-xl-0 topmargin-sm bottommargin">
                    <p class="nomargin">Galileo 8 Segundo piso<br> Col. Polanco Chapultepec<br> México, DF 11560</p>
                    <a href="tel:+5215552809648"><p class="nomargin"><img src="{{ asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px">+52 (1) 55 5280 9648</p></a>
                    <a href="mailto:showroom@iesa.cc"><p class="nomargin"><img src="{{ asset('img/icono-btn/email.png')}}" style="margin-right: 15px;width: 20px">showroom@iesa.cc</p></a>

                </div>
            </div>
            <div class="col-lg-6 nomargin row">
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.656346959698!2d-100.4540079!3d25.682684199999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86629816d52a561b%3A0x708d48dbe192e667!2sImportaciones%20Electrodom%C3%A9sticas%2C%20S.A.%20De%20C.V.!5e0!3m2!1ses-419!2sve!4v1573338887727!5m2!1ses-419!2sve" style="width: 100%;height:300px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <div class="col-md-5 of col-xl-5 d-flex topmargin-sm">
                    <i  class="fa fa-map-marker fa-2x fa-contacto"></i>
                    <h3>Showroom MTY</h3>
                </div>

                <div class="col-md-6 offset-md-1 col-xl-5 offset-xl-0 topmargin-sm bottommargin">
                    <p class="nomargin">Carr. Monterrey – Saltillo 3061<br>Fracc. Bosques del Poniente<br> Santa Catarina, NL 66350</p>
                    <a href="tel:+5218183894372"><p class="nomargin"><img src="{{ asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px">+52 (1) 81 8389 4372</p></a>
                    <a href="mailto:recepción@iesa.cc"><p class="nomargin"><img src="{{ asset('img/icono-btn/email.png')}}" style="margin-right: 15px;width: 20px">recepción@iesa.cc</p></a>

                </div>
            </div>
        </div>
 
        <div id="dealers">
            <h2 id="text-contacto" class="col-12 text-center my-5 text-uppercase"> encuentra tu distribuidor más cercano</h2>
            <div class="row justify-content-center text-center col-12 mb-4">
                <div class="col-5">
                    <select required class="form-control form-custom select-estado-mex" name="estado-mex"> 
                        <option value="" selected disabled>ESTADO</option>
                    </select>
                </div>
                <div class="col-5">
                    <select required class="form-control form-custom select-ciudad-mex" name="ciudad-mex"> 
                        <option value="" selected disabled>CIUDAD</option>               
                    </select>
                </div>
                <div class="col-2">
                    <button id="btnDealer" class="btn btn-primary btn-block">Buscar</button>
                </div>         
            </div>        
            <div id="dealersfilter">
            </div>
        </div>
        <div class="row nomargin topmargin-lg">
            <div class="col-xl-7 col-lg-7 text-center">

                    <div class="col-12 text-center bottommargin-sm">
                        <h2 class="">FORMULARIO</h2>
                    </div>
                    <form id="form-contactanos" action="{{URL::to('/sumbit-contacto') }}" method="POST">
                        <input type="hidden" name="utm_source" value="{{$utm['utm_source']}}">
                        <input type="hidden" name="utm_campaign" value="{{$utm['utm_campaign']}}">
                        <input type="hidden" name="utm_anuncio_id" value="{{$utm['utm_anuncio_id']}}">


                     @if(isset($utm['source']))
                        <input type="hidden" name="source"    id="source" value="{{(!empty($utm['source']))?$utm['source']:''}}">
                    @endif

                    @if(isset($utm['campaign']))
                        <input type="hidden" name="campaign"   id="campaign" value="{{(!empty($utm['campaign']))?$utm['campaign']:''}}">
                    @endif

                    @if(isset($utm['anuncioId']))
                        <input type="hidden" name="anuncioId"     id="anuncioId" value="{{(!empty($utm['anuncioId']))?$utm['anuncioId']:''}}">
                    @endif
                        @csrf
                        <div class="row nomargin">
                            <div class="form-group  col-12">
                                <input required type="text" name="nombre" class="form-control form-custom" placeholder="NOMBRE COMPLETO">
                            </div>
                            <div class="form-group  col-12">
                                <select required class="form-control form-custom" name="estado"> 
                                    <option value="">ESTADO</option>
                                    <option value="Aguascalientes">Aguascalientes</option>
                                    <option value="Baja California">Baja California</option>
                                    <option value="Baja California Sur">Baja California Sur</option>
                                    <option value="Campeche">Campeche</option>
                                    <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                                    <option value="Colima">Colima</option>
                                    <option value="Chiapas">Chiapas</option>
                                    <option value="Chihuahua">Chihuahua</option>
                                    <option value="Distrito Federal">Distrito Federal</option>
                                    <option value="Durango">Durango</option>
                                    <option value="Guanajuato">Guanajuato</option>
                                    <option value="Guerrero">Guerrero</option>
                                    <option value="Hidalgo">Hidalgo</option>
                                    <option value="Jalisco">Jalisco</option>
                                    <option value="Estado de México">Estado de México</option>
                                    <option value="Michoacán">Michoacán</option>
                                    <option value="Morelos">Morelos</option>
                                    <option value="Nayarit">Nayarit</option>
                                    <option value="Nuevo León">Nuevo León</option>
                                    <option value="Oaxaca">Oaxaca</option>
                                    <option value="Puebla">Puebla</option>
                                    <option value="Querétaro">Querétaro</option>
                                    <option value="Quintana Roo">Quintana Roo</option>
                                    <option value="San Luis Potosí">San Luis Potosí</option>
                                    <option value="Sinaloa">Sinaloa</option>
                                    <option value="Sonora">Sonora</option>
                                    <option value="Tabasco">Tabasco</option>
                                    <option value="Tamaulipas">Tamaulipas</option>
                                    <option value="Tlaxcala">Tlaxcala</option>
                                    <option value="Veracruz">Veracruz</option>
                                    <option value="Yucatán">Yucatán</option>
                                    <option value="Zacatecas">Zacatecas</option>
                                </select>
                                @if($errors->has('nombre'))
                                    <div class="invalid-feeback">
                                        {{$errors->first('nombre')}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group  col-md-12">
                                <input required type="text" name="tel" class="form-control form-custom" placeholder="TELÉFONO">
                            </div>
                            <div class="form-group  col-md-12">
                                <input required type="email" name="email" class="form-control form-custom" placeholder="EMAIL">
                            </div>
                            <div class="custom-control custom-checkbox col-md-12 mx-auto text-center topmargin-sm">
                                <input required type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                                <label class="custom-control-label" for="customCheck"><a target="_blank" href="{{ URL::to('/aviso-privacidad')}}">Acepta nuestro Aviso de Privacidad</a></label>
                            </div>

                            <div class="form-group  col-xl-4 offset-xl-4  col-md-4 offset-md-4 text-center topmargin-sm">
                                <button class="btn btn-cyan btn-block" type="submit"><img style="margin-right: 15px;width: 20px" src="{{ asset('img/icono-btn/enviar.png')   }}"> ENVIAR</button>
                            </div>
                        </div>
                    </form>
            </div>
            <div id="contacto-footer" class="col-xl-5 col-lg-5">
                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-4 d-flex h-100">
                    <div class="justify-content-center align-self-center">
                        <div class="col-md-12">
                            <p class="bold nomargin">MONTERREY</p>
                            <a href="tel:+5218183894372"><p class="nomargin"><img src="{{ asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px">+52 (1) 81 8389 4372</p></a>
                            <a target="_blank" href="https://wa.me/5218118021004"><p class="nomargin"><img src="{{ asset('img/icono-btn/whatsapp.png')}}" style="margin-right: 15px;width: 20px">+52 (1) 81 1802 1004</p></a>
                        </div>

                        <div class="col-md-12 topmargin-sm">
                            <p class="bold nomargin">CUIDAD DE MÉXICO</p>
                            <a href="tel:+52555552809648"><p class="nomargin"><img src="{{ asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px">+52 (1) 55 5280 9648</p></a>
                            <a target="_blank" href="https://wa.me/5215549509807"><p class="nomargin"><img src="{{ asset('img/icono-btn/whatsapp.png')}}" style="margin-right: 15px;width: 20px">+52 (1) 55 4950 9807</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection



@section('styles')
    <link rel="stylesheet" href="{{URL::asset('css/storelocator.css')}}" />
    <style>
        .owl-carousel .owl-stage {
            display: flex;
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
@endsection

@section('scripts')
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" ></script>
    <script>
        if(location.hash.length){
            $('html, body').animate({
                scrollTop: $("#dealers").offset().top
            }, 2000);
        }

        $.getJSON("{{asset('js/dealers/datosDealer.json')}}", function( data ) {
    
            if(data.dealers && data.dealers.length){

                let grupos = data.dealers.reduce((agrupados, item) => ({
                ...agrupados,
                [item.categoria]: [...(agrupados[item.categoria] || []), item]
                }), []);
                
                let html = ''; 
                for(let grupo in grupos){
                    
                    let ctg = ''
                    
                    if(+grupo === 1){
                        ctg = "platino"
                    }
                    
                    if(+grupo === 2){
                        ctg = "diamante"
                    }

                    if(+grupo === 3){
                        ctg = "oro"
                    }

                    if(+grupo === 4){
                        ctg = "plata"
                    }
                    
                    if(+grupo === 5){
                        ctg = "basico"
                    }

                    html +="<h3 class=\"text-uppercase font-weight-bold\">Categoria "+ctg+"</h3>"
                    html +="<div class='dealer"+grupo+" owl-carousel owl-theme mb-5'>\n";
                    grupos[grupo].forEach( async(dealer, index) => {
                        html+="\t<div class=\"card h-100\">\n";
                        html+="\t\t<div class=\"card-body\">\n";
                        html+="\t\t\t<h4 class=\"card-title\">"+dealer.nombre+"</h4>\n";
                        html+="\t\t\t<p class=\"card-text\">"+dealer.direccion1+"</p>\n";
                        html+="\t\t</div>\n";
                        html+="\t\t<div class=\"card-footer\">\n";
                        html+="\t\t\t<span class=\"card-text\">"+dealer.estado+" - "+dealer.ciudad +"</span>\n";
                        html+="\t\t</div>\n";
                        html+="\t</div>\n";
                    });
                    html +="</div>\n";    
                }
                
                $("#dealersfilter").html(html);
                $('.owl-carousel').owlCarousel({
                loop: false,
                nav: true,
                navText: ["<i class='fa fa-chevron-left fa-2x'></i>","<i class='fa fa-chevron-right fa-2x'></i>"],
                margin: 10,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 3,
                    },
                    1000: {
                        items: 4,
                        margin: 20
                    }
                }
            })
                
            }     
        });  

        $.getJSON("{{asset('js/dealers/datosDealer.json')}}", function( data ) {
            if(data.estados && data.estados.length){
                data.estados.map( estado => $(".select-estado-mex").append(`<option value="${estado.id}">${estado.nombre}</option>`));
            }  
        });  

        $(document).ready(function() {
            
            $(".select-ciudad-mex").prop("disabled", true);
            $("#btnDealer").prop("disabled", true);
            
            $(".select-estado-mex").on("change", function(){
                let selected = $(this);
                if(selected.val()){
                    $(".select-ciudad-mex").prop("disabled", false);
                    $(".select-ciudad-mex").empty();
                    $(".select-ciudad-mex").append(`<option value="" disabled selected>CIUDAD</option>`)
                    $.getJSON("{{asset('js/dealers/datosDealer.json')}}", function( data ) {
                        data.ciudades
                        .filter( ciudad => ciudad.estado === +selected.val())
                        .map( ciudad => $(".select-ciudad-mex").append(`<option value="${ciudad.id}">${ciudad.nombre}</option>`));
                    }); 
                }
            });

            $(".select-ciudad-mex").on("change", function(){
                let selected = $(this);
                if(selected.val()){
                    $("#btnDealer").prop("disabled", false);
                }
            });

            $("#btnDealer").on("click", function(event){
                event.preventDefault();
                let selectEstado = $(".select-estado-mex").val();
                let selectCiudad = $(".select-ciudad-mex").val();
                $.getJSON("{{asset('js/dealers/datosDealer.json')}}", function( data ) {
                    let html = ''; 
                    if(data.estados && data.estados.length){
                        let estadosFiltrados = data.dealers.filter( dealer => dealer.estado === +selectEstado);
                        let ciudadFiltrados = estadosFiltrados.filter( dealer => dealer.ciudad === +selectCiudad);
                        
                        if(!estadosFiltrados.length || !ciudadFiltrados.length){
                            //html = "<div class=\"alert alert-info\">No hay dealers disponibles</div>";
                            html = `
                                <div class="row">
                                    <div class="col-md align-self-center text-center mb-4 py-5" style="width: 100vw; background-color: #f4f4f4;">
                                        <h1 class="display-md-4 text-uppercase font-weight-light" style="word-wrap: break-word;">No hay Dealers <br /><span class="font-italic font-weight-bold">disponibles</span></h1>
                                    <div>
                                <div>
                            `
                            return $("#dealersfilter").html(html);
                        }

                        let grupos = ciudadFiltrados.reduce((agrupados, item) => ({
                        ...agrupados,
                        [item.categoria]: [...(agrupados[item.categoria] || []), item]
                        }), []);
                        
                        for(let grupo in grupos){
                            
                            let ctg = ''
                            
                            if(+grupo === 1){
                                ctg = "platino"
                            }
                            
                            if(+grupo === 2){
                                ctg = "diamante"
                            }

                            if(+grupo === 3){
                                ctg = "oro"
                            }

                            if(+grupo === 4){
                                ctg = "plata"
                            }
                            
                            if(+grupo === 5){
                                ctg = "basico"
                            }

                            html +="<h3 class=\"text-uppercase font-weight-bold\">Categoria "+ctg+"</h3>"
                            html +="<div class='dealer"+grupo+" owl-carousel owl-theme mb-5'>\n";
                            grupos[grupo].forEach( (dealer, index) => {
                                html+="\t<div class=\"card h-100\">\n";
                                html+="\t\t<div class=\"card-body\">\n";
                                html+="\t\t\t<h4 class=\"card-title\">"+dealer.nombre+"</h4>\n";
                                html+="\t\t\t<p class=\"card-text\">"+dealer.direccion1+"</p>\n";
                                html+="\t\t</div>\n";
                                html+="\t\t<div class=\"card-footer\">\n";
                                html+="\t\t\t<span class=\"card-text\">"+dealer.estado+" - "+dealer.ciudad +"</span>\n";
                                html+="\t\t</div>\n";
                                html+="\t</div>\n";
                            });
                            html +="</div>\n";    
                        }

                        $("#dealersfilter").html(html);
                        $('.owl-carousel').owlCarousel({
                            loop: false,
                            nav: true,
                            navText: ["<i class='fa fa-chevron-left fa-2x'></i>","<i class='fa fa-chevron-right fa-2x'></i>"],
                            margin: 10,
                            responsive: {
                                0: {
                                    items: 1,
                                },
                                600: {
                                    items: 3,
                                },
                                1000: {
                                    items: 4,
                                    margin: 20
                                }
                            }
                        })
                       // data.estados.map( estado => $(".select-estado-mex").append(`<option value="${estado.id}">${estado.nombre}</option>`));
                    }else{
                        //html +="<div class=\"alert alert-info\">No hay dealers disponibles</div>"
                        html = `
                                <div class="row">
                                    <div class="col-md align-self-center text-center mb-4 py-5" style="width: 100vw; background-color: #f4f4f4;">
                                        <h1 class="display-md-4 text-uppercase font-weight-light" style="word-wrap: break-word;">No hay Dealers <br /><span class="font-italic font-weight-bold">disponibles</span></h1>
                                    <div>
                                <div>
                            `
                        $("#dealersfilter").html(html);
                    }
                });  
            });
           
           
        }) 
    </script>
@endsection

