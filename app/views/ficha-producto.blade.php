

    <div class="box box-solid">

        <div class="box-header with-border">

            <img src="{{URL::asset('img/producto/Cortex-Producto-' . $producto->id . '.jpg')}}" class="img-responsive">
            <div class="precio"><h4 style="color: #AA1B30;"><strong>{{Tools::precioConIva($producto->precio,$producto->iva)}} €</strong></h4></div>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <ul class="list-unstyled productos">

                <li>Nombre: <span>{{$producto->nombre}}</span>
                </li>
                <li>Código: <span>{{$producto->codigo}}</span>
                </li>
                <li>Quedan: <span>{{$producto->cantidadActual}}</span>
                </li>

            </ul>
        </div>

        <!-- /.box-body -->
        <div class="box-footer">

            <a type="button" class="btn btn-danger" data-toggle="modal"  href="" data-target="{{'#editar'.$producto->id}}">
                <i class="fa fa-pencil-square"></i> Editar
            </a>
            <!-- Modal Editar -->
            <div class="modal fade" id="{{'editar'.$producto->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Modificar Producto</h4>
                        </div>
                        <form name="producto" id="productor" action="{{URL::asset('producto/editar/'.$producto->id)}}" enctype="multipart/form-data" method="POST">

                            <div class="box-body">
                                <div class="form-group" style="margin-bottom: 10px; margin-left: 10%; margin-right: 10%;">
                                    <label>Imagen del producto</label>
                                    <input id="imagen" name="imagen" type="file"  class="file" data-preview-file-type="text">

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
                                <div class="col-md-12" style="margin-bottom: 10px;">
                                    <label for="InputNombre">Nombre</label>
                                    <input class="form-control" id="nombre" name="nombre" value="{{$producto->nombre}}" placeholder="Nombre" type="text">
                                </div>

                                <div class="col-md-6" style="margin-bottom: 10px;">
                                    <label for="InputPrecio">Precio</label>
                                    <input class="form-control" id="precio" name="precio"  value="{{Tools::precioConIva($producto->precio,$producto->iva)}}"placeholder="Precio" type="text">
                                </div>
                                <div class="col-md-6" style="margin-bottom: 10px;">
                                    <label for="InputCodigo">Código</label>
                                    <input class="form-control" id="codigo" name="codigo" value="{{$producto->codigo}}" placeholder="Código" type="text">
                                </div>

                                <div class="col-md-6" style="margin-bottom: 10px;">
                                    <label for="InputCantidadAct">Cantidad Actual</label>
                                    <input class="form-control" id="cantidadActual" name="cantidadActual" value="{{$producto->cantidadActual}}" placeholder="Cantidad Actual" type="number">
                                </div>
                                <div class="col-md-6" style="margin-bottom: 10px;">
                                    <label for="InputCantidadMin">Cantidad Mínima</label>
                                    <input class="form-control" id="cantidadMinima" name="cantidadMinima" value="{{$producto->cantidadMinima}}" placeholder="Cantidad Mínima" type="number">
                                </div>
                                <div class="col-md-12">
                                    <label>Descripción</label>
                                    <textarea class="form-control" id="descripcion" name="descripcion"style="resize: vertical;" rows="3" placeholder="...">{{$producto->descripcion}}"</textarea>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="checkbox">

                                        <label>
                                            @if($producto->publicado==0)
                                            <input id="publicadoCheck" name="publicadoCheck" value="0" type="checkbox"> Publicar para clientes
                                            @else
                                                <input id="publicadoCheck"  name="publicadoCheck" checked="checked" value="1" type="checkbox"> Publicar para clientes
                                            @endif
                                        </label>

                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <a type="button" class="btn btn-danger" href="{{URL::asset('producto/eliminar/'.$producto->id)}}">
                <i class="fa fa-trash"></i> Quitar</a>


        </div>
        <!-- /.box-body -->
    </div>



