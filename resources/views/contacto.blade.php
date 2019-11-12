@extends('layouts.app')
@section('description', 'IESA')
@section('title', 'Home')
@section('content')





<section>
    <img src="{{ URL::asset('img/hero-contacto.jpg')}}">
</section>


<section class="container-gral">
    
    
    <div id="container-faq" class="margin-10">
        
    	<div class="text-center bottommargin-lg">
        	<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras placerat eros lectus, et placerat purus lobortis et</h2>

        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    	</div>

        <div class="row nomargin ">
            <div class="col-md-6 nomargin row nomargin">
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.6277240649997!2d-99.19561618681189!3d19.428484486886635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d201ff11a77f6d%3A0x18848b36c0d7d2d9!2sIESA!5e0!3m2!1ses-419!2sve!4v1573338741143!5m2!1ses-419!2sve" style="width: 100%;height:300px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                 <div class="col-md-6 col-xl-4 d-flex topmargin-sm">
                    <i style="margin-right: 15px;margin-top: 20px" class="fa fa-map-marker fa-2x"></i>
                    <h3>Showroom CDMX</h3>
                </div>
                <div class="col-md-6 col-xl- topmargin-sm">
                    <p class="nomargin">Galileo 8 Segundo piso<br> Col. Polanco Chapultepec<br> México, DF 11560</p>
                    <a href="tel:+525552809648"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px">+52 (55) 5280 9648</p></a>
                    <a href="mailto:showroom@iesa.cc"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/email.png')}}" style="margin-right: 15px;width: 20px">showroom@iesa.cc</p></a>

                </div>
            </div>
            <div class="col-md-6 nomargin row nomargin">
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.656346959698!2d-100.4540079!3d25.682684199999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86629816d52a561b%3A0x708d48dbe192e667!2sImportaciones%20Electrodom%C3%A9sticas%2C%20S.A.%20De%20C.V.!5e0!3m2!1ses-419!2sve!4v1573338887727!5m2!1ses-419!2sve" style="width: 100%;height:300px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <div class="col-md-6 col-xl-4 d-flex topmargin-sm">
                    <i style="margin-right: 15px;margin-top: 20px" class="fa fa-map-marker fa-2x"></i>
                    <h3>Showroom MTY</h3>
                </div>

                <div class="col-md-6 col-xl-5 topmargin-sm">
                    <p class="nomargin">Carr. Monterrey – Saltillo 3061<br>Fracc. Bosques del Poniente<br> Santa Catarina, NL 66350</p>
                    <a href="tel:+528183894372"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px">+52 (81) 8389 4372</p></a>
                    <a href="mailto:recepción@iesa.cc"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/email.png')}}" style="margin-right: 15px;width: 20px">recepción@iesa.cc</p></a>

                </div>
            </div>
        </div>

        <div class="row nomargin topmargin-lg">
            <div class="col-lg-8 text-center">
                    <div class="col-12 text-center bottommargin-sm">
                        <h2 class="">FORMULARIO</h2>
                    </div>
                    <form>
                        <div class="row nomargin">
                            <div class="form-group  col-12">
                                <input type="text" class="form-control form-custom" placeholder="NOMBRE COMPLETO">
                            </div> 
                            <div class="form-group  col-md-12">
                                <input type="text" class="form-control form-custom" placeholder="TELÉFONO">
                            </div> 
                            <div class="form-group  col-md-12">
                                <input type="text" class="form-control form-custom" placeholder="EMAIL">
                            </div> 
                            <div class="form-group  col-md-12">
                                <input type="text" class="form-control form-custom" placeholder="EMAIL">
                            </div> 

                            <div class="form-group  col-xl-4 offset-xl-4  col-md-4 offset-md-4 text-center topmargin-sm">
                                <a class="btn btn-cyan btn-block" href=""><i style="margin-right: 15px" class="fa fa-paper-plane fa-2x"></i> ENVIAR</a>
                            </div>    
                        </div>
                    </form>        
            </div>
            <div class="col-lg-4">
                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-4 d-flex h-100">
                    <div class="justify-content-center align-self-center">
                        <div class="col-md-12">
                            <p class="bold nomargin">MONTERREY</p>
                            <a href="tel:+528183894372"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px">+52 (81) 8389 4372</p></a>
                            <a target="_blank" href="https://wa.me/528183894372"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/whatsapp.png')}}" style="margin-right: 15px;width: 20px">+52 (81) 8389 4372</p></a>
                        </div>
                        
                        <div class="col-md-12 topmargin-sm">
                            <p class="bold nomargin">CUIDAD DE MÉXICO</p>
                            <a href="tel:+528183894372"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/telefono.png')}}" style="margin-right: 15px;width: 20px">+52 (81) 8389 4372</p></a>
                            <a target="_blank" href="https://wa.me/+528183894372"><p class="nomargin"><img src="{{ URL::asset('img/icono-btn/whatsapp.png')}}" style="margin-right: 15px;width: 20px">+52 (81) 8389 4372</p></a>
                        </div>
                    </div>
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
