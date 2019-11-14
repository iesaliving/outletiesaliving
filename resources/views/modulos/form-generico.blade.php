<form>
    <div class="row nomargin">
        <div class="form-group  col-12">
            <input type="text" class="form-control form-custom" placeholder="NOMBRE COMPLETO">
        </div>
        <div class="form-group  col-md-6 col-12">
            <input type="text" class="form-control form-custom" placeholder="TELÉFONO">
        </div>
        <div class="form-group  col-md-6 col-12">
            <input type="email" class="form-control form-custom" placeholder="EMAIL">
        </div>
        <div class="form-group  col-md-12">
            <textarea class="form-control form-custom" rows="5" placeholder="COMENTARIOS"></textarea>
        </div> 
        <div class="form-group  col-lg-2 offset-lg-5 text-center topmargin-sm">
            <a class="btn btn-cyan btn-block" href=""><img style="margin-right: 15px;width: 20px" src="{{ URL::asset('img/icono-btn/enviar.png')   }}"> ENVIAR</a>
        </div>    
    </div>
</form>