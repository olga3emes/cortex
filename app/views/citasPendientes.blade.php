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
                        @foreach($citasAceptadas as $cita)
                        <tr>
                            <td>{{Tools::formatearFechaVacia($cita->fecha)}}</td>
                            <td>{{Tools::formatearHora($cita->hora)}}</td>
                            <td>Aceptada</td>
                            <td><a href="{{URL::asset('cita/clienteDetalles/'.$cita->id)}}">
                                    <i class="fa fa-diamond text-green"></i></a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <nav style="text-align: center">
                        {{$citasAceptadas->links()}}
                    </nav>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

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
                        @foreach($citasPendientes as $cita)
                            <tr>
                                <td>{{Tools::formatearFechaVacia($cita->fecha)}}</td>

                                <td>Pendiente</td>
                                <td><a href="{{URL::asset('cita/clienteDetalles/'.$cita->id)}}">
                                        <i class="fa fa-diamond text-red"></i></a></td>
                                <td><a href="{{URL::asset('cita/clienteEliminar/'.$cita->id)}}">
                                        <i class="fa fa-trash text-red"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <nav style="text-align: center">
                        {{$citasPendientes->links()}}
                    </nav>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>

    </section>
    <!-- /.content -->

</div>

<!-- /.content-wrapper -->

@include( "footer")


