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
            @foreach($productos as $producto)
                @if($producto->cantidadMinima < $producto->cantidadActual)
            <div class="col-sm-4 col-md-4 col-xs-12">
                @include('ficha-producto')
            </div>
                @endif
            @endforeach


        </div>

        <div class="col-md-4">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-cubes"></i> Añadir Nuevo Producto</h3>
                </div>
                <!-- /.box-header -->
                <form name="perfilCrear" id="perfilCrear" action="{{URL::asset('producto/crear')}}" enctype="multipart/form-data" method="POST">
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
                        <label for="InputNombre">Nombre</label>
                        <input class="form-control" id="nombre" name="nombre" placeholder="Nombre" type="text">
                    </div>
                    <div class="form-group">
                        <label for="InputPrecio">Precio sin IVA</label>
                        <input class="form-control" id="precio" name="precio" placeholder="Precio" type="text">
                    </div>
                    <div class="form-group">
                        <label for="InputCodigo">Código</label>
                        <input class="form-control" id="codigo" name="codigo" placeholder="Código" type="text">
                    </div>
                    <div class="form-group">
                        <label for="InputCantidadAct">Cantidad Actual</label>
                        <input class="form-control" id="cantidadActual" name="cantidadActual" placeholder="Cantidad Actual" step="any" type="number">
                    </div>
                    <div class="form-group">
                        <label for="InputCantidadMin">Cantidad Mínima</label>
                        <input class="form-control" id="cantidadMinima" name="cantidadMinima" placeholder="Cantidad Mínima" step="any" type="number">
                    </div>
                    <div class="form-group">
                        <label>Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion"style="resize: vertical;" rows="3" placeholder="..."></textarea>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Añadir</button>
                </div>
                    </form>
                <!-- /.box-body -->
            </div>
        </div>
    </section>
    <!-- /.content -->

</div>

<!-- /.content-wrapper -->


@include('footer')
