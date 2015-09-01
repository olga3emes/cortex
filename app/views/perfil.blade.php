
@include('header')
<style>
    .file-drop-zone-title {
        color: #AAA;
        font-size: 20px !important;
        padding: 55px 10px !important;
    }

    .file-preview {
        border-radius: 5px;
        border: 1px solid #DDD;
        padding: 5px;
        width: 50%;
        margin-left: 25%;
        margin-right: 25%;
        margin-bottom: 20px;
        height: 200px !important;
    }

    .file-drop-zone {
        height: 87% !important;
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row profile">
            <div class="col-md-2">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        @if(isset($imagen))
                        <img src="{{URL::asset('img/perfil/'.$imagen->nombre)}}" class="img-responsive" alt="">
                        @else
                            <img src="{{URL::asset('img/perfil/default.jpg')}}" class="img-responsive" alt="">
                        @endif
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name" style="color: #C02942">{{$usuario->username}}</div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->

                    <!-- SIDEBAR USER FOOTER -->
                    <div class="profile-userfooter">
                        <h3>Mi Perfil</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-10">
                <div class="profile-content">

                    @if(Administrador::esAdministrador())

                    <div class="row">
                        <form name="perfilCrear" id="perfilCrear" action="{{URL::asset('perfilAdmin/actualizar/'.$administrador->id)}}" enctype="multipart/form-data" method="POST">
                            <div class="box-header with-border">
                                <h3 class="box-title"> <i class="fa fa-user"></i> </i>Mis Datos</h3>
                            </div>
                            <div class="col-md-12">
                                <br>
                            <div class="form-group">
                                    <label>Cambiar Imagen</label>
                                    <input id="imagen"  name="imagen" type="file" class="file" data-preview-file-type="text">
                                <script>
                                    $('#imagen').fileinput({
                                        language: 'es',
                                        uploadUrl: '#',
                                        allowedFileExtensions: ['jpg','jpeg', 'png', 'gif']
                                    });
                                    $(".btn-warning").on('click', function () {
                                        if ($('#file-4').attr('disabled')) {
                                            $('#file-4').fileinput('enable');
                                        } else {
                                            $('#file-4').fileinput('disable');
                                        }
                                    });
                                    $(".btn-info").on('click', function () {
                                        $('#file-4').fileinput('refresh', {
                                            previewClass: 'bg-info'
                                        });
                                    });
                                </script>
                            </div>
                        </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="InputUser">Nombre de Usuario</label>
                                    <p>En uso:{{$usuario->username}} </p>
                                    <input class="form-control" id="username"name="username" placeholder="Introduce un nuevo nombre de usuario"
                                           type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="InputEmail">Email</label>
                                    <p>En uso:{{$usuario->email}} </p>
                                    <input class="form-control" id="email" name="email"value=""placeholder="Introduce un nuevo email"
                                           type="email">
                                </div>
                            </div>

                            <button type="submit "class="btn btn-block btn-primary" style="width: 50%;margin-left: 25%;margin-right: 25%; margin-bottom: 10%;">Guardar</button>
                            </form>

                        <form id="cambiar" name="cambiar" action="{{URL::asset('administrador/cambiarPassword/'.$administrador->id)}}" method="POST">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="InputPassword">Contraseña</label>
                                    <input class="form-control" required id="password" name="password" placeholder="Contraseña"
                                           type="password">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="InputPassword">Repetir Contraseña</label>
                                    <input class="form-control" required id="password2" name="password2" placeholder="Repetir Contraseña"
                                           type="password">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Confirmar nueva contraseña</label>
                                    <button type="submit" class="btn btn-block btn-primary">Cambiar</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    @else
                        @if(Cliente::esCliente())
                        <div class="row">
                            <form name="perfilCrear" id="perfilCrear" action="{{URL::asset('perfil/actualizar/'.$cliente->id)}}" enctype="multipart/form-data" method="POST">
                                <div class="box-header with-border">
                                    <h3 class="box-title"> <i class="fa fa-user"></i> </i>Mis Datos</h3>
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <div class="form-group">
                                        <label>Cambiar Imagen</label>
                                        <input id="imagen"  name="imagen" type="file" class="file" data-preview-file-type="text">
                                        <script>
                                            $('#imagen').fileinput({
                                                language: 'es',
                                                uploadUrl: '#',
                                                allowedFileExtensions: ['jpg','jpeg', 'png', 'gif']
                                            });
                                            $(".btn-warning").on('click', function () {
                                                if ($('#file-4').attr('disabled')) {
                                                    $('#file-4').fileinput('enable');
                                                } else {
                                                    $('#file-4').fileinput('disable');
                                                }
                                            });
                                            $(".btn-info").on('click', function () {
                                                $('#file-4').fileinput('refresh', {
                                                    previewClass: 'bg-info'
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                                <!--SOLO CLIENTE-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="InputName">Nombre</label>
                                        <input class="form-control" id="name" name="nombre" value="{{$cliente->nombre}}"placeholder="Introduce tu nombre"
                                               type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="InputApellidos">Apellidos</label>
                                        <input class="form-control" id="apellidos" name="apellidos"
                                               placeholder="Introduce tus apellidos" value="{{$cliente->apellidos}}" type="text">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="InputTelefono">Teléfono</label>
                                        <input class="form-control" id="telefono" name="telefono" value="{{$cliente->telefono}}" placeholder="Teléfono de contacto"
                                               type="text">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 style="text-align: justify; ">El teléfono que introduzca es un dato esencial
                                            para comunicarse con usted en caso de imprevisto. Por favor, introduzca un
                                            número válido, de lo contrario no podremos avisarle.</h5>
                                    </div>
                                </div>

                                <!--FIN SOLO CLIENTE -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="InputUser">Nombre de Usuario</label>
                                        <p>Actual:{{$usuario->username}} </p>
                                        <input class="form-control" id="username"name="username" value="" placeholder="Introduce un nuevo usuario"
                                               type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="InputEmail">Email</label>
                                        <p>Actual:{{$usuario->email}} </p>
                                        <input class="form-control" id="email" name="email" placeholder="Introduce un nuevo email"
                                               type="email">
                                    </div>
                                </div>

                                <button type="submit "class="btn btn-block btn-primary" style="width: 50%;margin-left: 25%;margin-right: 25%;">Guardar</button>
                            </form>

                            <form id="cambiar" name="cambiar"action="{{URL::asset('cliente/cambiarPassword/'.$cliente->id)}}" method="POST">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="InputPassword">Contraseña</label>
                                    <input class="form-control" required id="password" name="password" placeholder="Contraseña"
                                           type="password">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="InputPassword">Repetir Contraseña</label>
                                    <input class="form-control" required id="password2" name="password2" placeholder="Repetir Contraseña"
                                           type="password">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Confirmar nueva contraseña</label>
                                    <button type="submit" class="btn btn-block btn-primary">Cambiar</button>
                                </div>
                            </div>
                                </form>

                            @if(Cliente::esCliente())
                                <div class="col-md-12">
                                    <p>Si desea darse de baja en el sistema, por favor póngase en contacto con: <strong>infopeluqueriacortex@gmail.com</strong> y tramitaremos su petición lo más rápido posible. Gracias.</p>
                                </div>
                            @endif
                        </div>
                        @endif
                    @endif


                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@include('footer')



