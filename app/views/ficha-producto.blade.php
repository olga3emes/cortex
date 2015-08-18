<div class="box box-solid">
    <div class="box-header with-border">
        <img src="{{URL::asset('dist/img/productos/product_001.jpg')}}" class="img-responsive">
        <div class="precio">Precio</div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <ul class="list-unstyled productos">
            <li>Nombre:<span>NombreProducto</span>
            </li>
            <li>Código:<span>CodigoProducto</span>
            </li>
            <li>Cantidad:<span>CantidadProducto</span>
            </li>
        </ul>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <div class="btn-group btn-group-justified" role="group">
            <button type="button" class="btn btn-info">
                <i class="fa fa-check-square"></i>
            </button>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editar">
                <i class="fa fa-pencil-square"></i>
            </button>
            <button type="button" class="btn btn-danger">
                <i class="fa fa-trash"></i>
            </button>
        </div>
    </div>
    <!-- /.box-body -->
</div>

<!-- Modal Editar -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Modificar Producto</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <form enctype="multipart/form-data">
                        <label>Subir Imagen</label>
                        <input id="file-es" name="file-es[]" type="file">
                    </form>
                </div>
                <div class="form-group">
                    <label for="InputPrecio">Precio</label>
                    <input class="form-control" id="InputPrecio" placeholder="Precio" type="text">
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
                <div class="form-group">
                    <label>Comentarios</label>
                    <textarea class="form-control" style="resize: vertical;" rows="3" placeholder="..."></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary pull-right">Guardar</button>
            </div>
        </div>
    </div>
</div>
