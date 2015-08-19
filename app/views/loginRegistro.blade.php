@include('headerInicio')

<!-- Page Title
		============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1>Mi Cuenta</h1>
        <ol class="breadcrumb">
            <li><a href="#">Inicio</a>
            </li>
            <li class="active">Login</li>
        </ol>
    </div>

</section>
<!-- #page-title end -->

<!-- Content
		============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">

                <div class="acctitle"><i class="acc-closed icon-lock3"></i><i class="acc-open icon-unlock"></i>Accede a tu cuenta</div>
                <div class="acc_content clearfix">
                    <form id="login-form" name="login-form" class="nobottommargin" action="{{URL::asset('login')}}" method="post">
                        <div class="col_full">
                            <label for="login-form-email">Email</label>
                            <input type="email" required id="email" name="email" value="" class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="login-form-password">Contraseña:</label>
                            <input type="password" required id="password" name="password" value="" class="form-control" />
                        </div>

                        <div class="col_full nobottommargin">
                            <button type="submit" class="button button-rounded button-reveal button-red tright" id="login-form-submit" name="login-form-submit" value="login"><i class="icon-angle-right"></i><span>Acceder</span></button>

                            <a class="fright"data-toggle="modal" data-target="#modalLostPass" data-dismiss="modal" href="#">¿Has olvidado tu contraseña?</a>
                        </div>
                    </form>
                </div>

                <form  name="registroForm" id="registroForm" method="POST" action="{{URL::asset('cliente/registrar')}}">
                <div class="acctitle"><i class="acc-closed icon-circle-arrow-down"></i><i class="acc-open icon-ok-sign"></i>¿Eres Nueva? Regístrate</div>
                <div class="acc_content clearfix">

                        <div class="col_full">
                            <label for="register-form-name">Nombre:</label>
                            <input type="text" required title="Mínimo 3 caracteres" id="nombre" name="nombre" value="" class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="register-form-apellidos">Apellidos:</label>
                            <input type="text" required title="Mínimo 3 caracteres" id="apellidos" name="apellidos" class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="register-form-email">Email:</label>
                            <input type="text" id="email" required name="email"  class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="register-form-phone">Teléfono:</label>
                            <input type="text" id="telefono" required title="9 dígitos " name="telefono" class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="register-form-username"> Nombre de usuario:</label>
                            <input type="text" id="username" required name="username"  class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="register-form-password">Contraseña:</label>
                            <input type="password" id="password" required name="password" placeholder="La contraseña debe tener como mínimo 8 caracteres" class="form-control" />
                        </div>


                        <div class="col_full">

                                <input type="checkbox" id="acepto" required aria-label="Acepto"
                                       onclick="document.registroForm.registro.disabled =!document.registroForm.registro.disabled">
                                <small>Acepto las<a href="{{URL::asset('aviso-legal')}}" target="_blank"
                                                    style="color: #183C64"> Política de Privacidad, Cookies y las
                                        Condiciones de Uso de la Plataforma</a></small>

                        </div>

                        <!--<div class="col_full">
                            <label for="register-form-repassword">Repetir Contraseña:</label>
                            <input type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control" />
                        </div>-->

                        <div class="col_full nobottommargin">
                            <button type="submit" class="button button-rounded button-reveal button-red tright" disabled id="registro" name="registro" ><i class="icon-angle-right"></i><span>Registro</span></button>
                        </div>

                    </div>
                </form>
            </div>

        </div>

    </div>

</section>

<!-- MODAL LOSTPASS -->
<div class="modal fade" id="modalLostPass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Cerrar</span></button>
                <h4 class="modal-title" id="myModalLabel"> ¿Has olvidado la contraseña?</h4>
            </div>
            <form action="{{action('RemindersController@postRemind') }}" method="POST">
                <div class="modal-body">
                        <div class="col_full">
                            Introduce aquí tu email y nos pondremos en contacto contigo para que puedas recuperar tu contraseña.
                        </div>
                        <div class="col_full">
                            <label>Email</label>
                            <input type="email" required id="email" name="email" value="" class="form-control" />
                        </div>

                        <input class="button button-rounded button-reveal button-red tright" type="submit" value="Enviar">

                    </div>
                    </form>
                    </div>
                </div>
        </div>
    </div>
</div>
<!-- End MODAL LOSTPASS -->
<!-- #content end -->
@include('footerInicio')