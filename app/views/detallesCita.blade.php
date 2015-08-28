@include("header")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="col-sm-12 col-md-2 col-xs-12">
            </div>
        <div class="col-sm-12 col-md-8 col-xs-12">
            <!-- Eventos Form -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 style="text-align: center; color: #AA1B30"><i class="fa fa-diamond"></i> Cita - Detalles</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12 col-xs-12" style="text-align: center">
                            <!-- Date dd/mm/yyyy -->
                            <div class="form-group">
                                <h4> Fecha:</h4>
                                  <p>{{Tools::formatearFechaVacia($cita->fecha)}}</p>

                            </div>
                            <!-- /.form group -->
                        </div>

                        <div class="col-md-12 col-xs-12" style="text-align: center">
                            <div class="form-group">
                                <h4>Hora Concreta:</h4>
                                @if($cita->hora=='')
                                    <p>Sin determinar</p>
                                @else
                                    <p>{{Tools::formatearHora($cita->hora)}}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12 col-xs-12" style="text-align: center">
                            <div class="form-group">
                                <h4>Servicio deseado:</h4>

                                <p>{{$servicio->nombre.' '.Tools::precioConIva($servicio->precio,$servicio->iva).'€'}}</p>
                            </div>
                        </div>


                    <!-- /.form group -->
                    <div class="col-md-12 col-xs-12" style="text-align: center">
                        <div class="form-group">
                            <h4>Comentarios:</h4>
                            <p>{{$cita->comentario}}</p>
                        </div>
                    </div>
                    <!-- /.form group -->
                </div>
            </div>
        </div>
    </div>


        <div class="col-sm-12 col-md-2 col-xs-12">
        </div>
    </section>
    <!-- /.content -->

</div>

<!-- /.content-wrapper -->

@include('footer')
