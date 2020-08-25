<div class="container-hero-image-mobile" style="background-color: #e7e8ea;">
    <div>
        <img src="<?php echo e(URL::asset('img/exteriores/mobile.jpg')); ?>" alt="exteriores mobile">
    </div>
    <div class="col-11 offset-1 col-padding d-flex <?php echo e((request()->segment('1')==null)?'m-height':''); ?>">
        <div class="justify-content-center align-self-center">
            <div class="col-12 nopadding" style="display: inherit; margin-bottom: 10px">
                    <a href="<?php echo e(URL::to('/sub-zero')); ?>"><img id="img-SubZero" style="" src="<?php echo e(URL::asset('img/cintillos/SubZero.png')); ?>" alt="subzero cintillos"></a>

                    <a href="<?php echo e(URL::to('/wolf')); ?>"><img id="img-wolf" style="" src="<?php echo e(URL::asset('img/cintillos/Wolf.png')); ?>" alt="cintillos wolf"></a>
            </div> 
            <h2 class="light h2-text">COCINA</h2>
            <h2 class="light"><b class="bold"><i>EXTERIOR</i></b></h2>
        </div>
    </div>
</div>


             