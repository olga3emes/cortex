@include('headerInicio')


<!-- Page Title
		============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>Contacto</h1>
        <ol class="breadcrumb">
            <li><a href="#">Inicio</a>
            </li>
            <li class="active">Contacto</li>
        </ol>
    </div>

</section>
<!-- #page-title end -->

<!-- Content
		============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="row">

                <div class="col-xs-12">
                    <h3>Escríbenos</h3>
                </div>

                <div class="col-lg-4 col-sm-6 col-xs-12">

                    Si desea ponerse en contacto con nosotros rellene el siguiente formulario y le contestaremos a la mayor brevedad posible.
                    
                    <div class="clear"></div>

                    <div class="widget noborder notoppadding">

                        <a href="#" class="social-icon si-small si-dark si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-dark si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-dark si-pinterest">
                            <i class="icon-pinterest"></i>
                            <i class="icon-pinterest"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-dark si-gplus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>

                    </div>


                </div>
                <div class="col-lg-8 col-sm-6 col-xs-12">

                    <!-- Formulario
                    ============================================= -->
                    <div class="postcontent nobottommargin">



                        <div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

                        <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

                            <div class="form-process"></div>

                            <div class="col_one_third">
                                <label for="template-contactform-name">Nombre <small>*</small>
                                </label>
                                <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                            </div>

                            <div class="col_one_third">
                                <label for="template-contactform-email">Email <small>*</small>
                                </label>
                                <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                            </div>

                            <div class="col_one_third col_last">
                                <label for="template-contactform-phone">Teléfono</label>
                                <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                            </div>

                            <div class="clear"></div>

                            <div class="col_full">
                                <label for="template-contactform-message">Mensaje <small>*</small>
                                </label>
                                <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                            </div>

                            <div class="col_full hidden">
                                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                            </div>

                            <div class="col_full">
                                <button class="button button-rounded button-reveal button-red tright" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit"><i class="icon-angle-right"></i><span>Enviar</span>
                                </button>
                            </div>

                        </form>

                        <script type="text/javascript">
                            $("#template-contactform").validate({
                                submitHandler: function (form) {
                                    $('.form-process').fadeIn();
                                    $(form).ajaxSubmit({
                                        target: '#contact-form-result',
                                        success: function () {
                                            $('.form-process').fadeOut();
                                            $('#template-contactform').find('.sm-form-control').val('');
                                            $('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
                                            SEMICOLON.widget.notifications($('#contact-form-result'));
                                        }
                                    });
                                }
                            });
                        </script>

                    </div>
                    <!-- END formulario -->


                </div>

            </div>

        </div>

    </div>

<!-- Mapa -->
<div id="section-contact" class="page-section notoppadding">

    <div class="row noleftmargin norightmargin common-height">
        <div id="headquarters-map" class="col-md-8 col-sm-6 gmap hidden-xs"></div>
        <div class="col-md-4 col-sm-6" style="background-color: #F5F5F5; color: #282828;">
            <div class="col-padding max-height">
                <h3 class="font-body t400 ls1" style="color: #282828;">Donde Encontrarnos</h3>

                <div style="font-size: 16px; line-height: 1.7;">
                    <address style="line-height: 1.7;">
                        Las Cabezas de San Juan<br>
                        Dos hermanas<br>
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

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/jquery.gmap.js"></script>

    <script type="text/javascript">
        jQuery(window).load(function () {
            jQuery('#headquarters-map').gMap({
                address: 'C/ Las Cabezas de San Juan, Dos Hermanas, Sevilla, 41700',
                maptype: 'SATELLITE',
                zoom: 17,
                markers: [
                    {
                        address: "C/ Las Cabezas de San Juan, Dos Hermanas, Sevilla, 41700",
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
                    zoomControl: false,
                    mapTypeControl: false,
                    scaleControl: false,
                    streetViewControl: false,
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