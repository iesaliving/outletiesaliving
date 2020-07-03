<footer id="footer-iesa" style="background-color: #e7e8ea">
    <div class="row nomargin">
        <div class="col-xl-3 col-lg-4 topmargin nopadding">
            <div class="img-footer">
                <a href=""><img style="width: 80%" src="{{ asset('img/logo-header.png')   }}"></a>
            </div>
            <div class="col-12 nopadding topmargin">
                <h5>IESA Latinoamérica</h5>
                <a href="tel:+5218183894321"><p class="nomargin">Tel.: +52 (1) 81 8389 4321</p></a>
                <a href="mailto:Jorge@iesa.cc"><p>ozayas@iesa.cc</p></a>
            </div>



            <div class="col-12 nopadding topmargin bottommargin">
                <h5>IESA México</h5>
                <a href="tel:+5218183894372 "><p class="nomargin">Tel.: +52 (1) 81 8389 4372 </p></a>
                <a href="mailto:marketing@iesa.cc"><p>marketing@iesa.cc</p></a>
                
            </div>
            @if(isset($footer))
            <div class="col-12 nopadding topmargin bottommargin">
                <a href="{{$footer}}" target="_blank" rel="nofollow"><h5>Website</h5></a>
            </div>
            @endif
        </div>
        <div class="col-xl-6 col-lg-4" style="overflow: hidden;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.627723761257!2d-99.1934275!3d19.4284845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d201ff11a77f6d%3A0x18848b36c0d7d2d9!2sIESA!5e0!3m2!1ses-419!2sve!4v1592579972142!5m2!1ses-419!2sve" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-xl-3 col-lg-4 topmargin nopadding">
            <div class="row nomargin col-12 nopadding">
                <div class="col-1">
                    <i class="fa fa-map-marker fa-2x"></i>
                </div>
                <div class="col-lg-8 col-8  leftmargin-xs">
                    <h5>Showroom CDMX</h5>
                    <a target="_blank" href="https://www.google.co.ve/maps/place/IESA/@19.4284845,-99.1956162,17z/data=!3m1!4b1!4m5!3m4!1s0x85d201ff11a77f6d:0x18848b36c0d7d2d9!8m2!3d19.4284845!4d-99.1934275"><p class="nomargin">Galileo 8 Segundo piso<br> Col. Polanco Chapultepec<br> México, DF 11560</p></a>
                    <a href="tel:+5215552809648"><p class="nomargin">Tel.: +52 (1) 55 5280 9648</p></a>
                    <a href="mailto:showroom@iesa.cc"><p>showroom@iesa.cc</p></a>
                </div>
            </div>
            <div class="row nomargin col-12 nopadding topmargin">
                <div class="col-1">
                    <i class="fa fa-map-marker fa-2x"></i>
                </div>
                <div class="col-lg-8 col-8  leftmargin-xs">
                    <h5>Showroom MTY</h5>
                    <a target="_blank" href="https://www.google.co.ve/maps/place/Importaciones+Electrodom%C3%A9sticas,+S.A.+De+C.V./@25.682615,-100.4560607,17z/data=!3m1!4b1!4m5!3m4!1s0x86629816d52a561b:0x708d48dbe192e667!8m2!3d25.682615!4d-100.453872"><p class="nomargin">Carr. Monterrey – Saltillo 3061<br> Fracc. Bosques del Poniente<br> Santa Catarina, NL 66350</p></a>
                    <a href="tel:+5218183894372 "><p class="nomargin">Tel.: +52 (1) 81 8389 4372</p></a>
                    <a href="mailto:recepción@iesa.cc"><p>recepción@iesa.cc</p></a>
                </div>    
            </div>
        </div>
        
    </div>
    <div class="topmargin-sm" style="border-top: 1px solid #000; width: 100% "> 
        
    </div>
    <div class="topmargin-sm">
        <p>© 2019 Importaciones Electrodomésticas S.A de C.V. | 01 800 400 4372 |  <a href="{{ URL::to('/aviso-privacidad')}}">Aviso de Privacidad</a></p>
    </div>
    
</footer><!-- #footer end -->