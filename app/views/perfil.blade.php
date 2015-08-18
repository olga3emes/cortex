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
        width: 100%;
        margin-bottom: 5px;
        height: 200px !important;
    }

    .file-drop-zone {
        height: 87% !important;
    }
</style>
@include('header')

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
                    <div class="profile-usertitle" >
                        <div class="profile-usertitle-name" style="color: #C02942">Olga M. Moreno</div>
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
                                    <input id="file-es" name="file-es[]" type="file">
                                </form>
                            </div>
                        </div>
                        <!--SOLO CLIENTE-->
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="InputName">Nombre</label>
                            <input class="form-control" id="InputName" placeholder="Introduce tu nombre" type="text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="InputApellidos">Apellidos</label>
                            <input class="form-control" id="InputApellidos" placeholder="Introduce tus apellidos" type="text">
                        </div>
                    </div>
                    <!--FIN SOLO CLIENTE -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="InputUser">Nombre de Usuario</label>
                                <input class="form-control" id="InputUser" placeholder="Introduce tu usuario" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="InputEmail">Email</label>
                                <input class="form-control" id="InputEmail" placeholder="Introduce tu email" type="email">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="InputPassword">Contraseña</label>
                                <input class="form-control" id="InputPassword" placeholder="Contraseña" type="password">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="InputPassword">Repetir Contraseña</label>
                                <input class="form-control" id="InputPassword" placeholder="Repetir Contraseña" type="password">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                               <label>Confirmar nueva contraseña</label>
                                <button class="btn btn-block btn-primary">Cambiar</button>
                            </div>
                        </div>
                            <!--SOLO CLIENTE-->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="InputTelefono">Teléfono</label>
                                    <input class="form-control" id="InputTelefono" placeholder="Teléfono de contacto" type="password">
                                </div>
                            </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <h5 style="text-align: justify; " >El teléfono que introduzca es un dato esencial para comunicarse con usted en caso de imprevisto. Por favor, introduzca un número válido, de lo contrario no podremos avisarle.</h5>
                            </div>
                        </div>

                        <!-- FIN SOLO CLIENTE-->

                                <button class="btn btn-block btn-primary" >Guardar</button>


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

