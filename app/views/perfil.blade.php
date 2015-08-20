
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
                        <img src="{{URL::asset('dist/img/user2-160x160.jpg')}}" class="img-responsive" alt="">
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
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <form enctype="multipart/form-data">
                                    <label>Cambiar Imagen</label>
                                    <input id="imagen" name="imagen" name="file-es[]" type="file" >
                                </form>
                            </div>
                        </div>
                        <!--SOLO CLIENTE-->
                        @if(Cliente::esCliente())
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="InputName">Nombre</label>
                                    <input class="form-control" id="name" value="{{$cliente->nombre}}"placeholder="Introduce tu nombre"
                                           type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="InputApellidos">Apellidos</label>
                                    <input class="form-control" id="apellidos"
                                           placeholder="Introduce tus apellidos" value="{{$cliente->apellidos}}" type="text">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="InputTelefono">Teléfono</label>
                                    <input class="form-control" id="telefono" value="{{$cliente->telefono}}" placeholder="Teléfono de contacto"
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


                            @endif
                                    <!--FIN SOLO CLIENTE -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="InputUser">Nombre de Usuario</label>
                                    <input class="form-control" id="username" value="{{$usuario->username}}" placeholder="Introduce tu usuario"
                                           type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="InputEmail">Email</label>
                                    <input class="form-control" id="email" value="{{$usuario->email}}"placeholder="Introduce tu email"
                                           type="email">
                                </div>
                            </div>

                            <button class="btn btn-block btn-primary" style="width: 50%;margin-left: 25%;margin-right: 25%;">Guardar</button>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="InputPassword">Contraseña</label>
                                    <input class="form-control" id="InputPassword" placeholder="Contraseña"
                                           type="password">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="InputPassword">Repetir Contraseña</label>
                                    <input class="form-control" id="InputPassword" placeholder="Repetir Contraseña"
                                           type="password">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Confirmar nueva contraseña</label>
                                    <button type="" class="btn btn-block btn-primary">Cambiar</button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@include('footer')

<script>
    $('#file-es').fileinput({
        language: 'es',
        uploadUrl: '#',
        allowedFileExtensions: ['jpg', 'png', 'gif']
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

