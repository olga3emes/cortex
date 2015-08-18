@include("header")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="col-sm-7 col-md-9 col-xs-12">
            <!-- Tabla Servicios -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-scissors"></i>  Servicios</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="table" class="table table-bordered table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>Nombre del Servicio</th>
                                <th width="60">Precio</th>
                                <th class="no-sorting" width="60">Editar</th>
                                <th class="no-sorting" width="60">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lavar - Cortar</td>
                                <td>15,95€</td>
                                <td><a href="#" data-toggle="modal" data-target="#editar"><i class="fa fa-pencil-square text-green"></i></a>
                                </td>
                                <td><a href="#"><i class="fa fa-trash text-red"></i></a>
                            </tr>
                            <tr>
                                <td>Tinte</td>
                                <td>23,65€</td>
                                <td><a href="#" data-toggle="modal" data-target="#editar"><i class="fa fa-pencil-square text-green"></i></a>
                                </td>
                                <td><a href="#"><i class="fa fa-trash text-red"></i></a>
                            </tr>
                            <tr>
                                <td>Depilación Axilas</td>
                                <td>5,95€</td>
                                <td><a href="#" data-toggle="modal" data-target="#editar"><i class="fa fa-pencil-square text-green"></i></a>
                                </td>
                                <td><a href="#"><i class="fa fa-trash text-red"></i></a>
                            </tr>
                            <tr>
                                <td>Depilación Media Pierna</td>
                                <td>8,65€</td>
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

            <!-- END Tabla Servicios -->
        </div>
        <div class="col-sm-5 col-md-3 col-xs-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-reply"></i>  Añadir Servicio</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <label for="InputNombre">Nombre</label>
                        <input class="form-control" id="InputNombre" placeholder="Nombre" type="text">
                    </div>
                    <div class="form-group">
                        <label for="InputPrecio">Precio</label>
                        <input class="form-control" id="InputPrecio" placeholder="Precio" type="text">
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

<!-- Modal Edición -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Editar Servicio</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="InputNombre">Nombre</label>
                    <input class="form-control" id="InputNombre" placeholder="Nombre" type="text">
                </div>
                <div class="form-group">
                    <label for="InputPrecio">Precio</label>
                    <input class="form-control" id="InputPrecio" placeholder="Precio" type="text">
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