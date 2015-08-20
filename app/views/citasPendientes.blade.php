@include("header")
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="col-sm-7 col-md-9 col-xs-12">
            <!-- Tabla Citas -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title" style="text-align: center"; ><i class="fa fa-calendar-o"></i> Citas pendientes de aceptación</h3>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <h5 style="text-align: center"><p>Las citas recogidas aquí aún no han sido confirmadas por Corte'x.</p> <p> Si acaba de solicitar una,
                            espere unas horas hasta que podamos responderle.</p>
                        <p>Una vez la cita sea aceptada, podrá verla en su calendario.</p>
                   Gracias</h5>
                    <br>
                    <table id="table" class="table table-bordered table-hover table-responsive">
                        <thead>
                        <tr>
                            <th>Fecha de la Cita</th>
                            <th>Hora de la Cita</th>
                            <th>Estado</th>

                            <th class="no-sorting" width="60">Detalles</th>
                            <th class="no-sorting" width="60">Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Fecha de la Cita</td>
                            <td>Hora de la Cita</td>
                            <td>Estado</td>
                            <td><a href="{{URL::asset('cita/detalles/')}}">
                                    <i class="fa fa-diamond"></i></a></td>
                            <td><a href="{{URL::asset('cita/eliminar/')}}">
                                    <i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                            <td>dd/mm/yyyy</td>
                            <td>HH::mm</td>
                            <td>Aceptada/Pendiente de aceptación</td>
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
        <div class="col-sm-5 col-md-3 col-xs-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-reply"></i> Añadir Oferta</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <label for="InputNombre">Nombre</label>
                        <input class="form-control" id="nombre" placeholder="Nombre" type="text">
                    </div>
                    <div class="form-group">
                        <label for="InputDescuento">Descuento</label>
                        <input class="form-control" id="porcentaje" placeholder="%" type="number">
                    </div>
                    <div class="form-group">
                        <label for="InputPrecio">Fecha de Fin de la oferta</label>
                        <input class="form-control" id="fechaFin" placeholder="%" type="date">
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

@include( "footer")


<script type="text/javascript">
    $(function () {
        $('#table').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
    });
</script>