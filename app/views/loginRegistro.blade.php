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
                            <input type="text" id="email" name="email" value="" class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="login-form-password">Contraseña:</label>
                            <input type="password" id="password" name="password" value="" class="form-control" />
                        </div>

                        <div class="col_full nobottommargin">
                            <button type="submit" class="button button-rounded button-reveal button-red tright" id="login-form-submit" name="login-form-submit" value="login"><i class="icon-angle-right"></i><span>Acceder</span></button>
                            <a href="#" class="fright">¿Has olvidado tu contraseña?</a>
                        </div>
                    </form>
                </div>

                <form  name="registroForm" id="registroForm" method="POST" action="{{URL::asset('cliente/registrar')}}">
                <div class="acctitle"><i class="acc-closed icon-circle-arrow-down"></i><i class="acc-open icon-ok-sign"></i>¿Eres Nueva? Regístrate</div>
                <div class="acc_content clearfix">

                        <div class="col_full">
                            <label for="register-form-name">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" value="" class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="register-form-apellidos">Apellidos:</label>
                            <input type="text" id="apellidos" name="apellidos" class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="register-form-email">Email:</label>
                            <input type="text" id="email" name="email"  class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="register-form-phone">Teléfono:</label>
                            <input type="text" id="telefono" name="telefono" class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="register-form-username"> Nombre de usuario:</label>
                            <input type="text" id="username" name="username"  class="form-control" />
                        </div>

                        <div class="col_full">
                            <label for="register-form-password">Contraseña:</label>
                            <input type="password" id="password" name="password" class="form-control" />
                        </div>

                        <!--<div class="col_full">
                            <label for="register-form-repassword">Repetir Contraseña:</label>
                            <input type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control" />
                        </div>-->

                        <div class="col_full nobottommargin">
                            <button type="submit" class="button button-rounded button-reveal button-red tright" id="registro" name="registro" ><i class="icon-angle-right"></i><span>Registro</span></button>
                        </div>

                    </div>
                </form>
            </div>

        </div>

    </div>

</section>
<!-- #content end -->
@include('footerInicio')