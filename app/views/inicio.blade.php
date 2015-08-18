@include('headerInicio')

<section id="slider" class="slider-parallax revslider-wrap clearfix">

    <!--
            #################################
                - THEMEPUNCH BANNER -
            #################################
            -->
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <!-- SLIDE 1  -->
<li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="images/slider/rev/ken-2-thumb.jpg" data-delay="15000" data-saveperformance="off" data-title="">
                    <!-- MAIN IMAGE -->
                    <img src="{{URL::asset('images/slider/rev/ken-1.jpg')}}" alt="kenburns6" data-bgposition="center bottom" data-kenburns="on" data-duration="25000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="120" data-bgpositionend="center top">
                </li>
                <!-- SLIDE 2  -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="images/slider/rev/ken-2-thumb.jpg" data-delay="15000" data-saveperformance="off" data-title="">
                    <!-- MAIN IMAGE -->
                    <img src="{{URL::asset('images/slider/rev/ken-2.jpg')}}" alt="kenburns6" data-bgposition="center bottom" data-kenburns="on" data-duration="25000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="120" data-bgpositionend="center top">
                </li>
            </ul>
        </div>
    </div>

    <script type="text/javascript">
        jQuery(document).ready(function () {

            jQuery('.tp-banner').show().revolution({
                dottedOverlay: "none",
                delay: 16000,
                startwidth: 1140,
                startheight: 600,
                hideThumbs: 200,

                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 5,

                navigationType: "bullet",
                navigationArrows: "solo",
                navigationStyle: "preview4",

                touchenabled: "on",
                onHoverStop: "on",

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                parallax: "mouse",
                parallaxBgFreeze: "on",
                parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],

                keyboardNavigation: "off",

                navigationHAlign: "center",
                navigationVAlign: "bottom",
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: "on",
                fullScreen: "off",

                spinner: "spinner4",

                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: "off",

                autoHeight: "off",
                forceFullWidth: "off",
                hideTimerBar: "on",


                hideThumbsOnMobile: "off",
                hideNavDelayOnMobile: 1500,
                hideBulletsOnMobile: "off",
                hideArrowsOnMobile: "off",
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ".header"
            });

        }); //ready
    </script>

    <!-- END REVOLUTION SLIDER -->


</section>

<!-- Content
        ============================================= -->

<section id="content">
    <!-- CTA Cita -->
    <div class="section">
        <div class="container">
            <div class="row" style="margin-left: 20%;margin-right: 20%">
                <ul class="list-inline center">
                            <div class="fancy-title center">
                                <h2>Solicitar<span>Cita</span></h2>
                            </div>
                    <li>
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker1'>
                                <span class="input-group-addon"><span class="icon-calendar"></span></span>
                                <input type='date' placeholder="dd/mm/yyyy" class="form-control" />

                            </div>

                            <div class='input-group date' id='datetimepicker2'>
                                <span class="input-group-addon">
                        <span class="icon-clock"></span>
                                </span>
                                <input type='time' placeholder="00:00"class="form-control" />

                            </div>
                        </div>
                    </li>

                    <div class="row">
                        <a href="{{URL::asset('loginRegistro')}}" class="button button-rounded button-reveal button-red tright info" style="margin-top: 5%"><i class="icon-angle-right"></i><span>Continuar</span></a>
                    </div>
                </ul>
                <br>
            </div>
        </div>
    </div>
    <!-- END CTA Cita -->
    <!-- Precios -->
    <section>
        <div class="container">
            <div class="content-wrap" style="margin-left: 20%;margin-right: 20%">
                <div class="fancy-title title-bottom-border center">
                    <h2>Nuestros <span>Precios</span></h2>
                </div>
                <div class="table-responsive">

                    <table class="table table-hover table-comparison nobottommargin precios">
                        <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lorem Ipsum</td>
                                <td>17€</td>
                            </tr>
                            <tr>
                                <td>Lorem Ipsum</td>
                                <td>17€</td>
                            </tr>
                            <tr>
                                <td>Lorem Ipsum</td>
                                <td>17€</td>
                            </tr>
                            <tr>
                                <td>Lorem Ipsum</td>
                                <td>17€</td>
                            </tr>
                            <tr>
                                <td>Lorem Ipsum</td>
                                <td>17€</td>
                            </tr>
                            <tr>
                                <td>Lorem Ipsum</td>
                                <td>17€</td>
                            </tr>
                            <tr>
                                <td>Lorem Ipsum</td>
                                <td>17€</td>
                            </tr>
                            <tr>
                                <td>Lorem Ipsum</td>
                                <td>17€</td>
                            </tr>
                            <tr>
                                <td>Lorem Ipsum</td>
                                <td>17€</td>
                            </tr>
                            <tr>
                                <td>Lorem Ipsum</td>
                                <td>17€</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </section>
    <!-- END Precios -->
    <!-- Calendario -->
    <section>
        <div class="container">
            <div class="content-wrap">
                <div class="fancy-title title-bottom-border center">
                    <h2><span>Horario</span> de Apertura</h2>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-comparison nobottommargin horario">
                        <tr>
                            <th style="text-align: center;">Lunes</th>
                            <th>Martes</th>
                            <th>Miércoles</th>
                            <th>Jueves</th>
                            <th>Viernes</th>
                            <th>Sábado</th>
                            <th>Domingo</th>
                        </tr>
                        <tr>
                            <td style="text-align: center;">9:00 - 14:00</td>
                            <td>9:00 - 14:00</td>
                            <td style="background-color: #C02942; color: #fff;">Cerrado</td>
                            <td>9:00 - 14:00</td>
                            <td>9:00 - 14:00</td>
                            <td>9:00 - 14:30</td>
                            <td style="background-color: #C02942; color: #fff;">Cerrado</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">16:00 - 20:00</td>
                            <td>16:00 - 20:00</td>
                            <td style="background-color: #C02942; color: #fff;">Cerrado</td>
                            <td>16:00 - 20:00</td>
                            <td>16:00 - 20:00</td>
                            <td style="background-color: #C02942; color: #fff;">Cerrado</td>
                            <td style="background-color: #C02942; color: #fff;">Cerrado</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- END Calendario -->
</section>
<!-- #content end -->

 <!-- Mapa -->
    <div id="section-contact" class="page-section notoppadding">

        <div class="row noleftmargin norightmargin common-height">
            <div id="headquarters-map" class="col-md-8 col-sm-6 gmap hidden-xs"></div>
            <div class="col-md-4 col-sm-6" style="background-color: #F5F5F5; color: #282828;">
                <div class="col-padding max-height">
                    <h3 class="font-body t400 ls1" style="color: #282828;">Dónde Encontrarnos</h3>

                    <div style="font-size: 16px; line-height: 1.7;">
                        <address style="line-height: 1.7;">
										C/Las Cabezas de San Juan<br>
										Dos Hermanas<br>
										41700 Sevilla<br>
									</address>

                        <div class="clear topmargin"></div>

                        <strong>Teléfono:</strong> +34 600 00 00 00
                        <br>
                        <strong>Email:</strong> info@cortex.com
                    </div>
                </div>
            </div>
        </div>

        {{HTML::script('http://maps.google.com/maps/api/js?sensor=true')}}
        {{HTML::script('js/jquery.gmap.js')}}

        <script type="text/javascript">
            jQuery(window).load(function () {
                jQuery('#headquarters-map').gMap({
                    address: 'Las Cabezas de San Juan, Dos Hermanas, Sevilla, 41700',
                    maptype: 'SATELLITE',
                    zoom: 17,
                    markers: [
                        {
                            address: "Las Cabezas de San Juan, Dos Hermanas, Sevilla, 41700",
                            html: "Las Cabezas de San Juan, Dos hermanas, Sevilla, 41700",
                            icon: {
                                image: "images/icons/map-icon-red.png",
                                iconsize: [32, 32],
                                iconanchor: [14, 44]
                            }
         }
        ],
                    doubleclickzoom: false,
                    controls: {
                        panControl: false,
                        zoomControl: true,
                        mapTypeControl: true,
                        scaleControl: true,
                        streetViewControl: true,
                        overviewMapControl: false
                    },
                    styles: [{
                        "featureType": "all",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "saturation": 36
                        }, {
                            "color": "#000000"
                        }, {
                            "lightness": 40
                        }]
                    }, {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "visibility": "on"
                        }, {
                            "color": "#000000"
                        }, {
                            "lightness": 16
                        }]
                    }, {
                        "featureType": "all",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    }, {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#000000"
                        }, {
                            "lightness": 20
                        }]
                    }, {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                            "color": "#000000"
                        }, {
                            "lightness": 17
                        }, {
                            "weight": 1.2
                        }]
                    }, {
                        "featureType": "administrative",
                        "elementType": "labels",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    }, {
                        "featureType": "administrative.country",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    }, {
                        "featureType": "administrative.country",
                        "elementType": "geometry",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    }, {
                        "featureType": "administrative.country",
                        "elementType": "labels.text",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    }, {
                        "featureType": "administrative.province",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    }, {
                        "featureType": "administrative.locality",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "simplified"
                        }, {
                            "saturation": "-100"
                        }, {
                            "lightness": "30"
                        }]
                    }, {
                        "featureType": "administrative.neighborhood",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    }, {
                        "featureType": "administrative.land_parcel",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    }, {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "simplified"
                        }, {
                            "gamma": "0.00"
                        }, {
                            "lightness": "74"
                        }]
                    }, {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#000000"
                        }, {
                            "lightness": 20
                        }]
                    }, {
                        "featureType": "landscape.man_made",
                        "elementType": "all",
                        "stylers": [{
                            "lightness": "3"
                        }]
                    }, {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    }, {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#000000"
                        }, {
                            "lightness": 21
                        }]
                    }, {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    }, {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#000000"
                        }, {
                            "lightness": 17
                        }]
                    }, {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                            "color": "#000000"
                        }, {
                            "lightness": 29
                        }, {
                            "weight": 0.2
                        }]
                    }, {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#000000"
                        }, {
                            "lightness": 18
                        }]
                    }, {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#000000"
                        }, {
                            "lightness": 16
                        }]
                    }, {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#000000"
                        }, {
                            "lightness": 19
                        }]
                    }, {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#000000"
                        }, {
                            "lightness": 17
                        }]
                    }]
                });
            });
        </script>


    </div>
    <!-- END Mapa -->

@include('footerInicio')
