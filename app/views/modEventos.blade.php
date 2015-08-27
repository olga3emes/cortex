@include("header")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

            <!-- Eventos Form -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 style="text-align: center; color: #AA1B30"><i class="fa fa-diamond"></i> Eventos - Detalles</h3>

                </div>

                <!-- /.box-header -->
                <div class="box-body">

                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="row" style="border-right: 1px solid #ededed;">
                                <div>
                                <div class="col-xs-12">
                                    <h4>Fecha</h4>
                                </div>
                                <div class="col-xs-12">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control"/>
                                    </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <h4>Nombre del evento:</h4>
                                    </div>
                                    <div class=" col-xs-12">

                                        <input class="form-control" id="InputNombre" placeholder="Nombre" type="text">
                                        <!-- /.input group -->

                                        <!-- /.form group -->
                                    </div>
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
                                <div class="col-md-23 col-xs-12">
                                    <!-- Time 00:00 -->
                                    <label>
                                      <h4><input id="diaCompleto" name="diaCompleto"type="checkbox"> Todo el día</h4>
                                    </label>
                                    <!-- /.form group -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 30px; border-top: 1px solid #ededed; padding-top: 15px;">

                                <!-- /.form group -->
                                <div class="col-xs-12" style="text-align: center;">
                                    <h4>Elige un color para el evento:</h4>

                                    <h4 style="text-align: center"><i class="fa fa-pencil"></i> <input
                                                style="text-align: center" id="color" name="color" id="background-color"
                                                type="color"/></h4>

                                </div>
                                <!-- /.form group -->
                            </div>
                        </div>
                <div class="box-footer">
                    <div class="row">

                        <div class="col-md-12 col-xs-12">
                            <div class="btn-group btn-group-justified" role="group">
                                <a type="button" href="{{URL::asset('administrador/calendario')}}" class="btn btn-labeled btn-warning">
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

                <!-- /.box-body -->



            <!-- /.box -->

            <!-- END Tabla Servicios -->


    </section>
    <!-- /.content -->

</div>

<!-- /.content-wrapper -->

@include('footer')
