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
        <div class="col-sm-7 col-md-9 col-xs-12">
            <!-- Tabla Servicios -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-picture-o"></i> Galerías</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="table" class="table table-bordered table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>Nombre de la Galería</th>
                                <th class="no-sorting" width="120">Añadir Imagen</th>
                                <th class="no-sorting" width="60">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>$galeria</td>
                                <td><a href="#" data-toggle="modal" data-target="#añadir"><i class="fa fa-plus-circle text-green"></i></a>
                                </td>
                                <td><a href="#"><i class="fa fa-trash text-red"></i></a>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- END Tabla Servicios -->
        </div>
        <div class="col-sm-5 col-md-3 col-xs-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-reply"></i>  Añadir Galería</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                   <div class="form-group">
                    <form enctype="multipart/form-data">
                        <label>Imagen de Portada</label>
                        <input id="file-es" name="file-es[]" type="file">
                    </form>
                </div>
                    <div class="form-group">
                        <label for="InputNombre">Nombre</label>
                        <input class="form-control" id="InputNombre" placeholder="Nombre" type="text">
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Añadir</button>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

</div>

<!-- /.content-wrapper -->


<!-- Modal Edición -->
<div class="modal fade" id="añadir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Añadir Imagen</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <form enctype="multipart/form-data">
                        <label>Subir Imagen</label>
                        <input id="file-es" name="file-es[]" type="file">
                    </form>
                </div>
                <div class="form-group">
                    <label for="InputNombre">Nombre</label>
                    <input class="form-control" id="InputNombre" placeholder="Nombre" type="text">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary pull-right">Guardar</button>
            </div>
        </div>
    </div>
</div>
<!-- END Modal Edición -->


@include("footer")

<script type="text/javascript">
    $(function () {
        $('#table').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
    });
</script>

<script type="text/javascript">
    $('#file-es').fileinput({
        language: 'es',
        uploadUrl: '#',
        allowedFileExtensions: ['jpg', 'png', 'gif'],
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