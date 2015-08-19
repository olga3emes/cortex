@include("header")
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="col-sm-7 col-md-9 col-xs-12">
            <!-- Tabla Ofertas -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-certificate"></i> Ofertas</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="table" class="table table-bordered table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>Nombre de la Oferta</th>
                                <th width="60">Descuento</th>
                                <th class="no-sorting" width="60">Editar</th>
                                <th class="no-sorting" width="60">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lavar - Cortar</td>
                                <td>15%</td>
                                <td><a href="#" data-toggle="modal" data-target="#editar"><i class="fa fa-pencil-square text-green"></i></a>
                                </td>
                                <td><a href="#"><i class="fa fa-trash text-red"></i></a>
                            </tr>
                            <tr>
                                <td>Tinte</td>
                                <td>5%</td>
                                <td><a href="#" data-toggle="modal" data-target="#editar"><i class="fa fa-pencil-square text-green"></i></a>
                                </td>
                                <td><a href="#"><i class="fa fa-trash text-red"></i></a>
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

<!-- Modal Edición -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Editar Oferta</h4>
            </div>
            <div class="modal-body">
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
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary pull-right">Guardar</button>
            </div>
        </div>
    </div>
</div>
<!-- END Modal Edición -->

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