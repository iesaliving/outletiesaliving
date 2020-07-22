    <div class="col-12 bottommargin-sm" >
        <h2 class="light  text-center">CONTÁCTENOS Y PRONTO ESTAREMOS CON USTED</h2>
    </div>
    
<form id="form-contactanos" action="{{URL::to('/submit-brand') }}" method="POST">
    @csrf

    <input type="hidden" name="cBrand" value="{{$tag}}">
    <input type="hidden" name="utm_source" value="{{$utm['utm_source']}}">
    <input type="hidden" name="utm_campaign" value="{{$utm['utm_campaign']}}">
    <input type="hidden" name="utm_anuncio_id" value="{{$utm['utm_anuncio_id']}}">
    @if(isset($email))
        <input type="hidden" name="email_envio" value="{{$email}}">
    @endif
    <div class="row nomargin">
        <div class="form-group  col-md-6 col-12">
            <input required type="text" class="form-control form-custom" name="nombre" placeholder="NOMBRE COMPLETO">
            @if($errors->has('nombre'))
            <div class="invalid-feeback">
                {{$errors->first('nombre')}}
            </div>
            @endif
        </div>
    </div>
    <div class="row nomargin">
        <div class="form-group  col-md-6 col-12">
            <select required class="form-control form-custom" id="pais" name="pais">
                <option value="" disabled selected>PAÍS</option>
                <option value="México">México</option>
                <option value="Colombia">Colombia</option>
                <option value="Panamá">Panamá</option>
                <option value="Otro">Otro</option>
            </select>
        </div>
        <div class="form-group  col-md-6 col-12">
            <select required class="form-control form-custom" id="estado" name="estado"> {{--Funcion onchange--}}
                <option value="">ESTADO</option>
            </select>
            @if($errors->has('nombre'))
                <div class="invalid-feeback">
                    {{$errors->first('nombre')}}
                </div>
            @endif
        </div>

        <div class="form-group  col-md-6 col-12">
            <input required type="text" class="form-control form-custom" name="tel" placeholder="TELÉFONO">
            @if($errors->has('tel'))
                <div class="invalid-feeback">
                    {{$errors->first('tel')}}
                </div>
            @endif
        </div>
        <div class="form-group  col-md-6 col-12">
            <input required type="email" class="form-control form-custom" name="email" placeholder="EMAIL">
            @if($errors->has('email'))
                <div class="invalid-feeback">
                    {{$errors->first('email')}}
                </div>
            @endif
        </div>
        <div class="form-group  col-md-12">
            <textarea  class="form-control form-custom" rows="5" name="comentarios" placeholder="¿EN QUÉ PODEMOS AYUDARLE?"></textarea>
            @if($errors->has('comentarios'))
                <div class="invalid-feeback">
                    {{$errors->first('comentarios')}}
                </div>
            @endif
        </div> 


        <div class="form-group col-md-12">
          <div class="custom-control custom-checkbox col-md-12 mx-auto text-center topmargin-sm">
            <input required type="checkbox" class="custom-control-input" id="customCheck" name="example1">
            <label class="custom-control-label" for="customCheck"><a target="_blank" href="{{ URL::to('/aviso-privacidad')}}">Acepta nuestro Aviso de Privacidad</a></label>
          </div>
        </div> 
        <div class="form-group  col-xl-2 offset-xl-5 col-lg-4 offset-lg-4  text-center topmargin-sm">
            <button class="btn btn-cyan btn-block" type="submit"><img style="margin-right: 15px;width: 20px" src="{{ asset('img/icono-btn/enviar.png')   }}"> ENVIAR</button>
        </div>    
    </div>
</form>

@section('scripts')
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnRJ8mwP4Ftwk0_5PoBcnXIPLMxnhPHhI&libraries=places"></script>
    <script src="{{URL::asset('js/store-locator/store-locator.min.js')}}"></script>
    <script src="{{URL::asset('js/store-locator/medicare-static-ds.js')}}"></script>
    <script src="{{URL::asset('js/store-locator/panel.js')}}"></script>
    <script>
        if(location.hash.length){
            $('html, body').animate({
                scrollTop: $("#dealers").offset().top
            }, 2000);
        }

        $('#pais').change(()=>{
            let 
                pais = $('#pais').val();
                colombia = `
                    <option value="" disabled selected>ESTADO</option>
                    <option value="Bogotá">Bogotá</option>
                    <option value="Medellín">Medellín</option>
                `,
                panama = `
                    <option value="" disabled selected>ESTADO</option>
                    <option value="Ciudad de Panamá">Ciudad de Panamá</option>
                `,
                mexico = `
                    <option value="" disabled selected>ESTADO</option>
                    <option value="Distrito Federal">Distrito Federal</option>
                    <option value="Aguascalientes">Aguascalientes</option>
                    <option value="Baja California">Baja California</option>
                    <option value="Baja California Sur">Baja California Sur</option>
                    <option value="Campeche">Campeche</option>
                    <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                    <option value="Colima">Colima</option>
                    <option value="Chiapas">Chiapas</option>
                    <option value="Chihuahua">Chihuahua</option>
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
                `;

                switch (pais) {
                    case 'México':
                            $('#estado').html(mexico);
                        break;
                    case 'Panamá':
                            $('#estado').html(panama);
                        break;
                    case 'Colombia':
                            $('#estado').html(colombia);
                        break;
                
                    default:
                        $('#estado').html(`<option value="">Otro</option>`);
                        break;
                }

            
        })
    </script>
@endsection

