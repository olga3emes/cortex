@include("header")
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
     <section class="content">
         @if(Administrador::esAdministrador())
             <div class="col-sm-7 col-md-9 col-xs-12">
                 @else

                     <div class="col-sm-7 col-md-2 col-xs-12">
                     </div>
                     <div class="col-sm-7 col-md-8 col-xs-12">
                         @endif
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
                                @if(Administrador::esAdministrador())
                                <th class="no-sorting" width="60">Editar</th>
                                <th class="no-sorting" width="60">Eliminar</th>
                                    @endif
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($ofertas as $oferta)
                            <tr>
                                <td>{{$oferta->nombre}}</td>
                                <td>{{$oferta->porcentaje}}%</td>
                                @if(Administrador::esAdministrador())
                                <td><a href="#" data-toggle="modal" data-target="{{'#'.$oferta->id}}"><i class="fa fa-pencil-square text-green"></i></a>

                                    <!-- Modal Edición -->
                                    <div class="modal fade" id="{{$oferta->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <form name="crearForm" id="crearForm" action="{{URL::asset('oferta/editar/'.$oferta->id)}}" method="POST">
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
                                                        <input class="form-control" name="nombre"  required value="{{$oferta->nombre}}"  id="nombre" placeholder="Nombre" type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="InputDescuento">Descuento</label>
                                                        <input class="form-control" id="porcentaje" required name="porcentaje" value="{{$oferta->porcentaje}}" placeholder="%" step="any" type="number">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="InputPrecio">Fecha de Fin de la oferta</label>
                                                        <input class="form-control" id="fechaFin"  name="fechaFin" placeholder="dia-mes-20XX" value="{{$oferta->fechaFin}}"  type="date">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                                                </div>
                                            </div>
                                        </div>
                                            </form>
                                    </div>
                                    <!-- END Modal Edición -->
                                </td>
                                <td><a href="{{URL::asset('oferta/eliminar/'.$oferta->id)}}"><i class="fa fa-trash text-red"></i></a>
                            @endif
                            </tr>

                        @endforeach

                        </tbody>
                    </table>

                    <nav style="text-align: center">
                        {{$ofertas->links()}}
                    </nav>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- END Tabla Ofertas -->
        </div>
                     @if(Administrador::esAdministrador())
        <form name="crearForm" id="crearForm"action="{{URL::asset('oferta/crear')}}" method="POST">
        <div class="col-sm-5 col-md-3 col-xs-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-reply"></i> Añadir Oferta</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <label for="InputNombre">Nombre</label>
                        <input class="form-control" name="nombre"  required id="nombre" placeholder="Nombre" type="text">
                    </div>
                    <div class="form-group">
                        <label for="InputDescuento">Descuento</label>
                        <input class="form-control" name="porcentaje" required id="porcentaje" placeholder="%" step="any" type="number">
                    </div>
                    <div class="form-group">
                        <label for="InputPrecio">Fecha de Fin de la oferta</label>
                        <input class="form-control"name="fechaFin" id="fechaFin"  placeholder="dia-mes-20XX" type="date">
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Añadir</button>
                </div>
            </div>
        </div>

            </form>

    </section>
    @endif
    <!-- /.content -->

</div>

<!-- /.content-wrapper -->

@include( "footer")
