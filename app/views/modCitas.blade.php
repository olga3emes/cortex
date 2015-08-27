@include("header")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="col-sm-7 col-md-9 col-xs-12">
            <!-- Eventos Form -->
            <div class="box box-solid" style="margin-bottom: 5%;">
                <div class="box-header with-border">
                    <h3 style="text-align: center; color: #AA1B30"><i class="fa fa-diamond"></i> Citas - Detalles</h3>

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
                                    <input type="date" class="form-control"/>
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
                                <label>Oferta Aplicable</label>
                                <select class="form-control">
                                    <option>Ninguna</option>
                                    <option>opción 2</option>
                                    <option>opción 3</option>
                                    <option>opción 4</option>
                                    <option>opción 5</option>
                                </select>
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
                                            <input type="time" class="form-control" placeholder="00:00">
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
                                            <input type="time" class="form-control" placeholder="00:00">
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
                                <div class="col-md-12 col-xs-12">
                                    <!-- Time 00:00 -->
                                    <div class="form-group">
                                        <label>A las:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <input type="time" class="form-control" placeholder="00:00">
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
                                <div class="col-xs-6">
                                    <h4>Cliente:</h4>
                                </div>
                                <div class="col-xs-6">
                                    <h4>Comentarios:</h4>
                                </div>
                                <div class="col-xs-6">
                                    <!-- Time 00:00 -->
                                    <div class="form-group">
                                        <input class="form-control" id="InputNombre" placeholder="Nombre" type="text">
                                    </div>
                                </div>
                                <div class=" col-xs-6">
                                    <div class="form-group">
                                        <textarea class="form-control" style="resize: vertical;" rows="3"
                                                  placeholder="..."></textarea>
                                    </div>
                                    <!-- /.form group -->
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="row">
                        <div class="col-md-12 col-xs-12" style="text-align: center;">
                            <div class="checkbox">
                                <h4>
                                    <input type="checkbox"> Aceptada
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!--PRODUCTO-->
                        <div class="row" style="margin-top: 30px; border-top: 1px solid #ededed; padding-top: 15px;">

                            <div class="col-md-12 col-xs-12" style="text-align: center;padding-bottom: 7px;">
                                <h4>Productos:</h4>
                                </div>

                            <div class="col-md-4 col-xs-12" style="margin-left: 1%;">
                                <!-- Date dd/mm/yyyy -->
                                <div class="form-group">
                                    <label>Nombre del producto:</label>

                                    <div class="input-group">

                                        <h5>Nombre</h5>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                            </div>
                            <div class="col-md-2 col-xs-12">
                                <div class="form-group">
                                    <label>Cantidad:</label>
                                    <div class="input-group">
                                        <h5>Cantidad</h5>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-12">
                                <div class="form-group">
                                    <label>Oferta:</label>
                                    <div class="input-group">
                                        <h5>Descuento</h5>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-12">
                                <div class="form-group">
                                    <label>Eliminar:</label>
                                    <div class="input-group">
                                        <a href="{{URL::asset('')}}">
                                            <h4><i class="fa fa-trash text-red"></i></h4></a>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                        </div>

                    <div class="row" style="margin-top: 30px; border-top: 1px solid #ededed; padding-top: 15px;text-align: center;">
                        <div class="form-group">
                            <h3>Total:</h3>
                            <br>
                                <h4>Precio €</h4>

                            <!-- /.input group -->
                        </div>

                    </div>


                    <div class="row" style="margin-top: 30px; border-top: 1px solid #ededed; padding-top: 15px;">
                        <div class="col-md-12 col-xs-12">

                            <div class="btn-group btn-group-justified" role="group">
                                <a type="button" href="{{URL::asset('administrador/calendario')}}"
                                   class="btn btn-labeled btn-warning">
                                    <i class="fa fa-times"></i> Cancelar
                                </a>

                                <a type="submit" class="btn btn-labeled btn-success">
                                    <i class="fa fa-pencil-square"></i> Guardar
                                </a>

                                <a type="button" class="btn btn-labeled btn-danger">
                                    <i class="fa fa-trash"></i> Eliminar
                                </a>
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
                        <input class="form-control" id="InputNombre" placeholder="Cantidad" type="number">
                    </div>
                    <div class="form-group">
                        <label>Ofertas</label>
                        <select class="form-control">
                            <option>Ninguna</option>
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

        <div class="col-sm-5 col-md-3 col-xs-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-ticket"></i> Generar Ticket</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <p>Recuerde guardar todos los cambios antes de generar un Ticket.</p>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Generar</button>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

</div>

<!-- /.content-wrapper -->

@include('footer')


