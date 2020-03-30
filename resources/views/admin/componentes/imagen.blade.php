<div class="row">
    <div class="col-md-6">
         @if(isset($hero[0]->id))
            <input type="hidden" name="idimg" value="{{$hero[0]->id}}">
        @endif
       
            <label>Imagen Principal </label>
            <div class="input-group">
                <span class="input-group-btn">
                    <span class="btn btn-default btn-file  ">
                        buscar… <input type="file" id="imgInp" name="imgInp" class="imgInp" data-idimg="img-upload"  accept=".png, .jpg, .jpeg">
                    </span>
                </span>
                <input type="text" class="form-control @error('imgInp') is-invalid @enderror" readonly placeholder="Dimensiones: 1.920 x 1.080">
                @error('imgInp')
                    <em class="invalid-feedback">
                        {{ $message }}
                    </em>
                @enderror   
            </div>
           
            <br>
            <img class="img-fluid" id='img-upload' src="{{ isset($hero[0]->url) ? asset($hero[0]->url.$hero[0]->name) : ''  }}">
        
          
    </div>

    <div class="col-md-6">
         @if(isset($hero[1]->id))
            <input type="hidden" name="idmobil" value="{{$hero[1]->id}}">
        @endif
       
            <label>Imagen Mobil  </label>
            <div class="input-group">
                <span class="input-group-btn">
                    <span class="btn btn-default btn-file">
                        buscar… <input type="file" id="img_mobil" name="img_mobil" class="imgInp" data-idimg="img-mobil"  accept=".png, .jpg, .jpeg">
                    </span>
                </span>
                <input type="text" class="form-control @error('img_mobil') is-invalid @enderror" readonly placeholder="Dimensiones: 375 x 345">
                @error('img_mobil')
                    <em class="invalid-feedback">
                        {{ $message }}
                    </em>
                @enderror 
            </div>
            <br>
            <img class="img-fluid" id='img-mobil' src="{{ isset($hero[1]->url) ? asset($hero[1]->url.$hero[1]->name) : ''  }}">
    
          

    </div>

</div>

