<?php

$nextid = isset( $_POST['portnext'] ) ? $_POST['portnext'] : '';
$previd = isset( $_POST['portprev'] ) ? $_POST['portprev'] : '';
$postid = isset( $_POST['portid'] ) ? $_POST['portid'] : '';

?>

<div id="portfolio-ajax-single" class="clearfix">



    <div id="portfolio-ajax-title" style="position: relative;">
        <h2>{{nombreGaleria}}</h2>

        <div id="portfolio-navigation">
            <?php if( $previd ){ ?><a href="#" id="prev-portfolio" data-id="<?php echo $previd; ?>"><i class="icon-angle-left"></i></a><?php } ?>
            <?php if( $nextid ){ ?><a href="#" id="next-portfolio" data-id="<?php echo $nextid; ?>"><i class="icon-angle-right"></i></a><?php } ?>
            <a href="#" id="close-portfolio"><i class="icon-line-cross"></i></a>
        </div>

        <br>

        <!-- Galería - Compartir -->
        <div class="si-share clearfix">
            <span>Compártelo:</span>
            <div>
                <a href="#" class="social-icon si-borderless si-facebook">
                    <i class="icon-facebook"></i>
                    <i class="icon-facebook"></i>
                </a>
                <a href="#" class="social-icon si-borderless si-twitter">
                    <i class="icon-twitter"></i>
                    <i class="icon-twitter"></i>
                </a>
                <a href="#" class="social-icon si-borderless si-pinterest">
                    <i class="icon-pinterest"></i>
                    <i class="icon-pinterest"></i>
                </a>
                <a href="#" class="social-icon si-borderless si-gplus">
                    <i class="icon-gplus"></i>
                    <i class="icon-gplus"></i>
                </a>

            </div>
        </div>

        <br>

    </div>



    <!-- Galeria Single Imagen
    ============================================= -->
    <div class="col_three_fifth portfolio-single-image nobottommargin">
        <div class="fslider" data-arrows="false" data-thumbs="true" data-animation="fade">
            <div class="flexslider">
                <div class="slider-wrap" >
                    <div class="slide" data-thumb="images/portfolio/single/slider-thumbs/1.jpg"><a href="#"><img src="images/portfolio/single/1.jpg" alt=""></a></div>
                    <div class="slide" data-thumb="images/portfolio/single/slider-thumbs/7.jpg"><a href="#"><img src="images/portfolio/single/7.jpg" alt=""></a></div>
                    <div class="slide" data-thumb="images/portfolio/single/slider-thumbs/10.jpg"><a href="#"><img src="images/portfolio/single/10.jpg" alt=""></a></div>
                </div>
            </div>
        </div>
    </div><!-- END Galeria Single Imagen -->



    </div>

</div>