@include('header')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="col-xs-12">
            <!-- Tabla Clientes -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-users"></i> Clientes</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="table" class="table table-bordered table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Teléfono</th>
                                <th>Email</th>
                                <th class="no-sorting" width="60">Ficha</th>
                                <th class="no-sorting" width="60">Ver foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>nombre</td>
                                <td>apellidos</td>
                                <td>teléfono</td>
                                <td>email</td>
                                <td><a href="#" data-toggle="modal" data-target="#ficha"><i class="fa fa-pencil-square text-green"></i></a>
                                </td>
                                <td><a href="#" data-toggle="modal" data-target="#foto"><i class="fa fa-eye text-blue"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- END Tabla Clientes -->
        </div>
    </section>
    <!-- /.content -->

</div>

<!-- /.content-wrapper -->

@include('footer')

<!-- Modal Ficha -->
<div class="modal fade" id="ficha" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Ficha del Cliente</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="fichaCliente">Ficha</label>
                    <textarea class="form-control" id="fichaCliente" placeholder="Ficha del Cliente" rows="15" type="text"></textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary pull-right">Guardar</button>
            </div>
        </div>
    </div>
</div>
<!-- END Modal ficha -->

<!-- Modal Foto -->
<div class="modal fade" id="foto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Nombre Apellidos</h4>
            </div>
            <div class="modal-content">
                <div class="modal-body">
                    <img class="img-responsive" src="{{URL::asset('dist/img/Clientes/client-300x300.jpg')}}" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Modal Foto -->

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