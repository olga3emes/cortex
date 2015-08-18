@include("header")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="col-sm-7 col-md-9 col-xs-12">
            <!-- Eventos Form -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-diamond"></i> Eventos y Citas - Detalles</h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                            <!-- Date dd/mm/yyyy -->
                            <div class="form-group">
                                <label>Fecha:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                                <label>Servicio deseado</label>
                                <select class="form-control">
                                    <option>opción 1</option>
                                    <option>opción 2</option>
                                    <option>opción 3</option>
                                    <option>opción 4</option>
                                    <option>opción 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                                <label>Oferta</label>
                                <input class="form-control" placeholder="%" type="number">
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 30px; border-top: 1px solid #ededed; padding-top: 15px;">
                        <div class="col-md-6 col-xs-12">
                            <div class="row" style="border-right: 1px solid #ededed;">
                                <div class="col-xs-12">
                                    <h4>Hora</h4>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <!-- Time 00:00 -->
                                    <div class="form-group">
                                        <label>Desde las:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <input type="text" class="form-control" placeholder="00:00">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <!-- Time 00:00 -->
                                    <div class="form-group">
                                        <label>Hasta las:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <input type="text" class="form-control" placeholder="00:00">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xs-12">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h4>Hora Concreta</h4>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <!-- Time 00:00 -->
                                    <div class="form-group">
                                        <label>Desde las:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <input type="text" class="form-control" placeholder="00:00">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <!-- Time 00:00 -->
                                    <div class="form-group">
                                        <label>Hasta las:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <input type="text" class="form-control" placeholder="00:00">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 30px; border-top: 1px solid #ededed; padding-top: 15px;">
                        <div class="col-xs-12">
                            <div class="row" style="border-right: 1px solid #ededed;">
                                <div class="col-xs-12">
                                    <h4>Cliente</h4>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <!-- Time 00:00 -->
                                    <div class="form-group">
                                        <label>Cliente sin Registrar:</label>
                                        <input class="form-control" id="InputNombre" placeholder="Nombre" type="text">
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <!-- Time 00:00 -->
                                    <div class="form-group">
                                        <label>Cliente Registrado</label>
                                        <select class="form-control">
                                            <option>opción 1</option>
                                            <option>opción 2</option>
                                            <option>opción 3</option>
                                            <option>opción 4</option>
                                            <option>opción 5</option>
                                        </select>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>Comentarios</label>
                                        <textarea class="form-control" style="resize: vertical;" rows="3" placeholder="..."></textarea>
                                    </div>
                                </div>
                                <!-- /.form group -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Aceptada
                                </label>
                            </div>
                        </div>
                        <div class="col-md-8 col-xs-12">
                            <div class="btn-group btn-group-justified" role="group">
                                <button type="button" class="btn btn-labeled btn-warning">
                                    <span class="btn-label"><i class="fa fa-times"></i></span> <span class="btn-text">Cancelar</span>
                                </button>

                                <button type="button" class="btn btn-labeled btn-success">
                                    <span class="btn-label"><i class="fa fa-pencil-square"></i></span> <span class="btn-text">Guardar</span>
                                </button>

                                <button type="button" class="btn btn-labeled btn-danger">
                                    <span class="btn-label"><i class="fa fa-trash"></i></span> <span class="btn-text">Eliminar</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box -->

            <!-- END Tabla Servicios -->
        </div>
        <div class="col-sm-5 col-md-3 col-xs-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-reply"></i> Producto</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <label>Producto</label>
                        <select class="form-control">
                            <option>opción 1</option>
                            <option>opción 2</option>
                            <option>opción 3</option>
                            <option>opción 4</option>
                            <option>opción 5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Cantidad</label>
                        <select class="form-control">
                            <option>opción 1</option>
                            <option>opción 2</option>
                            <option>opción 3</option>
                            <option>opción 4</option>
                            <option>opción 5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ofertas</label>
                        <select class="form-control">
                            <option>opción 1</option>
                            <option>opción 2</option>
                            <option>opción 3</option>
                            <option>opción 4</option>
                            <option>opción 5</option>
                        </select>
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

@include('footer')


<script type="text/javascript">
    $(function () {
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {
            "placeholder": "dd/mm/yyyy"
        });
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {
            "placeholder": "mm/dd/yyyy"
        });
        //Datemask3 mm/dd/yyyy
        $("#datemask3").inputmask("00:00", {
            "placeholder": "00:00"
        });
        //Money Euro
        $("[data-mask]").inputmask();
    });
</script>