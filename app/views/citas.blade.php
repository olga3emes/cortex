
@include("header")
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="col-sm-7 col-md-6 col-xs-12">
            <!-- Tabla Citas -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 style="text-align: center; color: #21a117;"><i class="fa fa-calendar-o"></i> Próximas Citas</h3>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <h5 style="text-align: center"><p>Aquí figuran las próximas citas de Corte'x.</p>
                        <p>Para más información consulte los detalles.</p></h5>
                    <br>
                    <table id="table" class="table table-bordered table-hover table-responsive">
                        <thead>
                        <tr>
                            <th>Fecha </th>
                            <th>Hora</th>
                            <th>Cliente</th>
                            <th class="no-sorting" width="60">Detalles</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($proximasCitas as $proxCita)
                        <tr>

                            <td>{{Tools::formatearFechaVacia($proxCita->fecha)}}</td>
                            <td>{{Tools::formatearHora($proxCita->hora)}}</td>
                            <td>{{$proxCita->cliente}}</td>
                            <td><a href="{{URL::asset('cita/detalles/')}}">
                                    <i class="fa fa-diamond text-green"></i></a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <nav style="text-align: center">
                        {{$proximasCitas->links()}}
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
                    <h5 style="text-align: center"><p>Las citas recogidas aquí aún no han sido aceptadas por Corte'x.</p>
                        <p>Para aceptar la cita pulse sobre los detalles de la misma.</p></h5>
                    <br>
                    <table id="table" class="table table-bordered table-hover table-responsive">
                        <thead>
                        <tr>
                            <th>Fecha </th>
                            <th>Hora</th>
                            <th>Cliente</th>
                            <th class="no-sorting" width="60">Detalles</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($citasPendientes as $cita)
                            <tr>

                                <td>{{Tools::formatearFechaVacia($cita->fecha)}}</td>
                                <td>Sin determinar</td>
                                <td>{{$cita->cliente}}</td>
                                <td><a href="{{URL::asset('cita/detalles/')}}">
                                        <i class="fa fa-diamond text-red"></i></a></td>
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

