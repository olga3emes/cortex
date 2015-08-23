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

@include("header")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="col-sm-7 col-md-8 col-xs-12">
            <!-- Tabla Servicios -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-picture-o"></i>Galerías</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="table" class="table table-bordered table-hover table-responsive">
                        <thead>
                            <tr>
                                <th width="200">Nombre de la Galería</th>
                                <th class="no-sorting" width="120">Añadir Imagen</th>
                                <th class="no-sorting" width="60">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($galerias as $galeria)
                            <tr>
                                <td>{{$galeria->nombre}}</td>
                                <td>
                                    <form name="añadir" id="añadir"action="{{URL::asset('galeria/añadirImagen/'.$galeria->id)}}" enctype="multipart/form-data" method="POST">


                                        <input id="imagen" name="imagen" type="file"  required class="file" data-preview-file-type="text">

                                    <script type="text/javascript">
                                        $('#imagen').fileinput({
                                            language: 'es',
                                            uploadUrl: '#',
                                            allowedFileExtensions: ['jpg','jpeg', 'png', 'gif', 'JPEG', 'JPG', 'PNG']
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


                                    </form>
                                </td>
                                <!-- Modal Edición -->

                                <!-- END Modal Edición -->
                                <td><a href="{{URL::asset('galeria/eliminar/'.$galeria->id)}}"><i class="fa fa-trash text-red"></i></a>
                            </tr>
                         @endforeach
                        </tbody>
                    </table>
                    <nav style="text-align: center">
                        {{$galerias->links()}}
                    </nav>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- END Tabla Servicios -->
        </div>

        <form name="crearForm" id="crearForm"action="{{URL::asset('galeria/crear')}}" enctype="multipart/form-data" method="POST">
        <div class="col-sm-5 col-md-4 col-xs-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-reply"></i>  Añadir Galería</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                   <div class="form-group">
                        <label>Imagen de Portada</label>
                        <input id="imagen" name="imagen" type="file"  required class="file" data-preview-file-type="text">

                </div>
                    <script type="text/javascript">
                        $('#imagen').fileinput({
                            language: 'es',
                            uploadUrl: '#',
                            allowedFileExtensions: [['jpg','jpeg', 'png', 'gif', 'JPEG', 'JPG', 'PNG']
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
                    <div class="form-group">
                        <label for="InputNombre">Nombre</label>
                        <input class="form-control" id="nombre" required name="nombre" placeholder="Nombre" type="text">
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Añadir</button>
                </div>
            </div>
        </div>
            </form>
    </section>
    <!-- /.content -->

</div>

<!-- /.content-wrapper -->




@include("footer")



