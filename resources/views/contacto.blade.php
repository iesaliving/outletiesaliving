@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Contacto')
@section('content')





<section id="hero-desktop">
    <img src="{{ URL::asset('img/hero-contacto.jpg')}}" alt="hero contacto">
</section>

<section id="hero-mobile">
    <img src="{{ URL::asset('img/hero-contacto-mobile.jpg')}}" alt="hero contacto mobile">
</section>



<section class="container-gral">


    <div id="container-faq" class="margin-7">




    	<div class="text-center bottommargin-lg">
        	<h2 id="text-contacto" style="text-transform: uppercase;"> Ya sea que esté comprando electrodomésticos o tenga preguntas sobre aquellos que ya posee</h2>

        	<p>Nuestro equipo de Atención al cliente tiene una reputación de servicio tan excepcional como nuestros productos.</p>
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
                    <a href="tel:+5215552809648"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px" alt="telefono icon">+52 (1) 55 5280 9648</p></a>
                    <a href="mailto:showroom@iesa.cc"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/email.png')}}" style="margin-right: 15px;width: 20px" alt="email icon">showroom@iesa.cc</p></a>

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
                    <a href="tel:+5218183894372"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px" alt="telefono icon">+52 (1) 81 8389 4372</p></a>
                    <a href="mailto:recepción@iesa.cc"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/email.png')}}" style="margin-right: 15px;width: 20px" alt="email icon">recepción@iesa.cc</p></a>

                </div>
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
                                <button class="btn btn-cyan btn-block" type="submit"><img style="margin-right: 15px;width: 20px" src="{{ URL::asset('img/icono-btn/enviar.png')   }}" alt="enviar icon"> ENVIAR</button>
                            </div>
                        </div>
                    </form>
            </div>
            <div id="contacto-footer" class="col-xl-5 col-lg-5">
                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-4 d-flex h-100">
                    <div class="justify-content-center align-self-center">
                        <div class="col-md-12">
                            <p class="bold nomargin">MONTERREY</p>
                            <a href="tel:+5218183894372"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px" alt="telefono icon">+52 (1) 81 8389 4372</p></a>
                            <a target="_blank" href="https://wa.me/+5218118021004"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/whatsapp.png')}}" style="margin-right: 15px;width: 20px" alt="whtasapp icon">+52 (1) 81 1802 1004</p></a>
                        </div>

                        <div class="col-md-12 topmargin-sm">
                            <p class="bold nomargin">CUIDAD DE MÉXICO</p>
                            <a href="tel:+52555552809648"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px">+52 (1) 55 5280 9648</p></a>
                            <a target="_blank" href="https://wa.me/+5215549509807"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/whatsapp.png')}}" style="margin-right: 15px;width: 20px" alt="whatsapp icon">+52 (1) 55 4950 9807</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@section('styles')

@endsection



@section('scripts')

@endsection
