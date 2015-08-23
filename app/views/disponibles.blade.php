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
        <div class="col-md-8">
            <div class="col-sm-4 col-md-4 col-xs-12">
                @include("ficha-producto")
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12">
                @include("ficha-producto")
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12">
                @include("ficha-producto")
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-cubes"></i> Añadir Nuevo Producto</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <label>Imagen del producto</label>
                        <input id="imagen" name="imagen" type="file"  required class="file" data-preview-file-type="text">

                    </div>
                    <script type="text/javascript">
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
                    <div class="form-group">
                        <label for="InputPrecio">Precio</label>
                        <input class="form-control" id="InputPrecio" placeholder="Precio" type="number">
                    </div>
                    <div class="form-group">
                        <label for="InputNombre">Nombre</label>
                        <input class="form-control" id="InputNombre" placeholder="Nombre" type="text">
                    </div>
                    <div class="form-group">
                        <label for="InputCodigo">Código</label>
                        <input class="form-control" id="InputCodigo" placeholder="Código" type="text">
                    </div>
                    <div class="form-group">
                        <label for="InputCantidadAct">Cantidad Actual</label>
                        <input class="form-control" id="InputCantidadAct" placeholder="Cantidad Actual" type="number">
                    </div>
                    <div class="form-group">
                        <label for="InputCantidadMin">Cantidad Mínima</label>
                        <input class="form-control" id="InputCantidadMin" placeholder="Cantidad Mínima" type="number">
                    </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Añadir</button>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </section>
    <!-- /.content -->

</div>

<!-- /.content-wrapper -->

@include('footer')
