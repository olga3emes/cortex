@include("header")
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="col-sm-7 col-md-6 col-xs-12">
            <!-- Tabla Citas -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3  style="text-align: center; color: #21a117"; ><i class="fa fa-calendar-o"></i> Citas aceptadas</h3>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <h5 style="text-align: center"><p>Aquí figuran sus próximas citas en Corte'x.</p>
                        <p>Para más información consulte los detalles.</p><p>Gracias.</p></h5>
                    <br>
                    <table id="table" class="table table-bordered table-hover table-responsive">
                        <thead>
                        <tr>
                            <th>Fecha </th>
                            <th>Hora</th>
                            <th>Estado</th>

                            <th class="no-sorting" width="60">Detalles</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>dd/mm/yyyy</td>
                            <td>HH::mm</td>
                            <td>Estado</td>
                            <td><a href="{{URL::asset('cita/detalles/')}}">
                                    <i class="fa fa-diamond text-green"></i></a></td>
                        </tr>
                        <tr>
                            <td>dd/mm/yyyy</td>
                            <td>HH::mm</td>
                            <td>Aceptada/Pendiente de aceptación</td>
                            <td><a href="{{URL::asset('cita/detalles/')}}">
                                    <i class="fa fa-diamond text-green"></i></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- END Tabla Ofertas -->
        </div>

        <div class="col-sm-7 col-md-6 col-xs-12">
            <!-- Tabla Citas -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3  style="text-align: center; color: #AA1B30" ><i class="fa fa-calendar-o"></i> Citas pendientes de aceptación</h3>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <h5 style="text-align: center"><p>Las citas recogidas aquí aún no han sido confirmadas por Corte'x.</p> <p> Si acaba de solicitar una,
                            espere un poco hasta que podamos responderle.</p>
                        <p>Una vez la cita sea aceptada, podrá verla tanto en el calendario como en el panel de la izquierda.</p>Gracias.</h5>
                    <br>
                    <table id="table" class="table table-bordered table-hover table-responsive">
                        <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th class="no-sorting" width="60">Detalles</th>
                            <th class="no-sorting" width="60">Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>dd/mm/yyyy</td>
                            <td>Estado</td>
                            <td><a href="{{URL::asset('cita/detalles/')}}">
                                    <i class="fa fa-diamond"></i></a></td>
                            <td><a href="{{URL::asset('cita/eliminar/')}}">
                                    <i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>dd/mm/yyyy</td>
                            <td>Pendiente de aceptación</td>
                            <td><a href="{{URL::asset('cita/detalles/')}}">
                                    <i class="fa fa-diamond"></i></a></td>
                            <td><a href="{{URL::asset('cita/eliminar/')}}">
                                    <i class="fa fa-trash"></i></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- END Tabla Ofertas -->
        </div>

    </section>
    <!-- /.content -->

</div>

<!-- /.content-wrapper -->

@include( "footer")


