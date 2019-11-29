    <div class="col-12 bottommargin-sm" >
        <h2 class="light  text-center">¿EN QUÉ PODEMOS AYUDARLE?</h2>
    </div>
<form id="form-contactanos" action="{{URL::to('/enviar-correo') }}" method="POST">
    @csrf

    @if(isset($email))
        <input type="hidden" name="email_envio" value="{{$email}}">
    @endif
    <div class="row nomargin">
        <div class="form-group  col-12">
            <input required type="text" class="form-control form-custom" name="nombre" placeholder="NOMBRE COMPLETO">
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
            <textarea  class="form-control form-custom" rows="5" name="comentarios" placeholder="COMENTARIOS"></textarea>
            @if($errors->has('comentarios'))
                <div class="invalid-feeback">
                    {{$errors->first('comentarios')}}
                </div>
            @endif
        </div> 
        <div class="form-group  col-xl-2 offset-xl-5 col-lg-4 offset-lg-4  text-center topmargin-sm">
            <button class="btn btn-cyan btn-block" type="submit"><img style="margin-right: 15px;width: 20px" src="{{ URL::asset('img/icono-btn/enviar.png')   }}"> ENVIAR</button>
        </div>    
    </div>
</form>