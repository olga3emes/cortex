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
                            <th class="no-sorting" width="60">Ficha</th>
                            <th class="no-sorting" width="60">Ver foto</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clientes as $cliente)
                            <tr>

                                <td>{{$cliente->nombre}}</td>
                                <td>{{$cliente->apellidos}}</td>
                                <td>{{$cliente->telefono}}</td>
                                <td><a href="#" data-toggle="modal" data-target="{{'#ficha'.$cliente->id}}">
                                        <i class="fa fa-pencil-square text-green"></i></a></td>
                                <!-- Modal Ficha -->
                                <div class="modal fade" id="{{'ficha'.$cliente->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel">
                                    <form name="ficha" id="ficha"
                                          action="{{URL::asset('administrador/actualizarFicha/'.$cliente->id)}}"
                                          method="POST">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h4 class="modal-title"
                                                        id="myModalLabel">{{'Ficha de'.' '.$cliente->nombre.' '.$cliente->apellidos}}</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="fichaCliente">Ficha</label>
                                                        <textarea class="form-control" id="descripcion"
                                                                  name="descripcion"
                                                                  placeholder="Ficha del Cliente" rows="15"
                                                                  type="text">{{$cliente->descripcion}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary pull-right">Guardar
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Modal ficha -->

                                <td><a href="#" data-toggle="modal" data-target="{{'#foto'.$cliente->id}}"><i
                                                class="fa fa-eye text-blue"></i></a>
                                </td>
                                <!-- Modal Foto -->
                                <div class="modal fade" id="{{'foto'.$cliente->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title"
                                                    id="myModalLabel">{{$cliente->nombre.' '.$cliente->apellidos}}</h4>
                                            </div>
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    @if(Imagen::find(Usuario::find($cliente->idUsuario)->idImagen)!=null)
                                                        <img class="img-responsive"
                                                             src="{{URL::asset('img/perfil/'.Imagen::find(Usuario::find($cliente->idUsuario)->idImagen)->nombre)}}"/>
                                                    @else
                                                        <img class="img-responsive"
                                                             src="{{URL::asset('img/perfil/default.jpg')}}"/>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Modal Foto -->
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <nav style="text-align: center">
                        {{$clientes->links()}}
                    </nav>
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




