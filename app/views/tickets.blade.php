@include("header")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="col-xs-12">
            <!-- Tabla Clientes -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-ticket"></i> Mis Tickets</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="table" class="table table-bordered table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th class="no-sorting">Descargar Ticket en PDF</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>dd/mm/aaaa</td>
                                <td><button class="btn btn-success btn-sm">Descargar</button></td>
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