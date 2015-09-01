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
                    <h3 style="text-align: center; color: {{$evento->color}}"><i class="fa fa-diamond"></i> Evento - Detalles</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12 col-xs-12" style="text-align: center">
                            <!-- Date dd/mm/yyyy -->
                            <div class="form-group">
                                <h4> Nombre:</h4>
                                <p>{{($evento->nombre)}}</p>

                            </div>
                            <!-- /.form group -->
                        </div>
                        <div class="col-md-12 col-xs-12" style="text-align: center">
                            <!-- Date dd/mm/yyyy -->
                            <div class="form-group">
                                <h4> Fecha:</h4>
                                <p>{{Tools::formatearFechaVacia($evento->fecha)}}</p>

                            </div>
                            <!-- /.form group -->
                        </div>
                        @if($evento->diaCompleto==0)
                        <div class="col-md-12 col-xs-12" style="text-align: center">
                            <div class="form-group">
                                <h4>Hora Inicio:</h4>
                                    <p>{{Tools::formatearHora($evento->horaInicio)}}</p>

                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12" style="text-align: center">
                            <div class="form-group">
                                <h4>Hora Fin:</h4>
                                    <p>{{Tools::formatearHora($evento->horaFin)}}</p>
                            </div>
                        </div>
                        @else

                            <div class="col-md-12 col-xs-12" style="text-align: center">
                                <div class="form-group">
                                    <h4>Duración:</h4>
                                    <p>El día completo</p>
                                </div>
                                </div>

                        @endif
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
