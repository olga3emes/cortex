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
                                @if(Administrador::esAdministrador())
                                <th class="no-sorting" width="60">Editar</th>
                                <th class="no-sorting" width="60">Eliminar</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($servicios as $servicio)
                        <tr>
                            <td>{{$servicio->nombre}}</td>
                            <td>{{Tools::precioConIva($servicio->precio,$servicio->iva)}}€</td>
                            @if(Administrador::esAdministrador())
                            <td><a href="#" data-toggle="modal" data-target="{{'#'.$servicio->id}}">
                                    <i class="fa fa-pencil-square text-green"></i></a>
                                <!-- Modal Edición -->
                                <div class="modal fade" id="{{$servicio->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <form name="crearForm" id="crearForm" action="{{URL::asset('servicio/editar/'.$servicio->id)}}" method="POST">
                                        <div class="modal-dialog" role="form">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h4 class="modal-title" id="myModalLabel">Editar Servicio</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="InputNombre">Nombre</label>
                                                        <input class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{$servicio->nombre}}" type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="InputPrecio">Precio sin IVA</label>
                                                        <input class="form-control" id="precio" name="precio" placeholder="Precio" value="{{$servicio->precio}}" type="text">
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
                            <td><a href="{{URL::asset('servicio/eliminar/'.$servicio->id)}}">
                                    <i class="fa fa-trash text-red"></i></a></td>
                            @endif

                            <!-- <td><a href="#" onclick="confirmacion('¿Seguro que quiere eliminar este Servicio?',null,'{{'servicio/eliminar/'.$servicio->id}}')">
                                    <i class="fa fa-trash text-red"></i></a></td>-->
                        </tr>
                        @endforeach
                        </tbody>

                    </table>
                            <nav style="text-align: center">
                                {{$servicios->links()}}
                            </nav>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- END Tabla Servicios -->
        </div>
        @if(Administrador::esAdministrador())
        <form name="crearForm" id="crearForm"action="{{URL::asset('servicio/crear')}}" method="POST">
        <div class="col-sm-5 col-md-3 col-xs-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-reply"></i> Añadir Servicio</h3>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <label for="InputNombre">Nombre</label>
                        <input class="form-control" required name="nombre" id="nombre" placeholder="Nombre" type="text">
                    </div>
                    <div class="form-group">
                        <label for="InputPrecio">Precio</label>
                        <input class="form-control" required name="precio"id="precio" placeholder="Precio" type="text">
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Añadir</button>

                </div>

            </div>

        </div>
        </form>

    </section>
    <!-- /.content -->
    @endif

</div>

<!-- /.content-wrapper -->

@include('footer')



