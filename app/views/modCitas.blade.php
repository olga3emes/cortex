@include("header")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="col-sm-7 col-md-9 col-xs-12">



            <div class="box box-solid" style="margin-bottom: 5%;">
                <div class="box-header with-border">
                    <h3 style="text-align: center; color: #AA1B30"><i class="fa fa-diamond"></i> Citas - Detalles</h3>

                </div>
                <!-- /.box-header -->

                <form name="editarForm" id="editarForm"action="{{URL::asset('cita/editar/'.$cita->id)}}" method="POST">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                            <!-- Date dd/mm/yyyy -->
                            <div class="form-group">
                                <label>Fecha:</label>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input id="fecha" name="fecha" type="date" class="form-control"
                                           value="{{$cita->fecha}}"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                                <label>Servicio deseado</label>
                                <select id="servicio" name="servicio" class="form-control">
                                    <option value="{{$servicioActual->id}}">{{$servicioActual->nombre.': '.Tools::precioConIva($servicioActual->precio,$servicioActual->iva).'€'}}</option>
                                    @foreach($servicios as $servicio)
                                        <option value="{{$servicio->id}}">
                                            {{$servicio->nombre.': '.Tools::precioConIva($servicio->precio,$servicio->iva).'€'}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="form-group">
                                <label>Oferta Aplicable</label>
                                <select id="oferta" name="oferta" class="form-control">
                                    @if(isset($ofertaActual))
                                        <option value="{{$ofertaActual->id}}">{{$ofertaActual->nombre.': '.$ofertaActual->porcentaje.'%'}}</option>
                                        <option value="0">
                                            Ninguna</option>
                                        @foreach($ofertas as $oferta)

                                            <option value="{{$oferta->id}}">
                                                {{$oferta->nombre.': '.$oferta->porcentaje.'%'}}</option>
                                        @endforeach
                                    @else
                                        <option value="0">Ninguna</option>

                                        @foreach($ofertas as $oferta)
                                            <option value="{{$oferta->id}}">
                                                {{$oferta->nombre.': '.$oferta->porcentaje.'%'}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 30px; border-top: 1px solid #ededed; padding-top: 15px;">
                        <div class="col-md-6 col-xs-12">
                            <div class="row" style="border-right: 1px solid #ededed;">
                                <div class="col-xs-12">
                                    <h4>Hora</h4>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <!-- Time 00:00 -->
                                    <div class="form-group">
                                        <label>Desde las:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <input type="time" id="horaInicio" name="horaInicio" class="form-control"
                                                   value="{{$cita->horaInicio}}" placeholder="00:00">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <!-- Time 00:00 -->
                                    <div class="form-group">
                                        <label>Hasta las:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <input type="time" id="horaFin" name="horaFin" class="form-control"
                                                   value="{{$cita->horaFin}}" placeholder="00:00">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xs-12">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h4>Hora Concreta</h4>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <!-- Time 00:00 -->
                                    <div class="form-group">
                                        <label>A las:</label>

                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <input type="time" id="hora" name="hora" value="{{$cita->hora}}"
                                                   class="form-control" placeholder="00:00">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 30px; border-top: 1px solid #ededed; padding-top: 15px;">
                        <div class="col-xs-12">
                            <div class="row" style="border-right: 1px solid #ededed;">
                                <div class="col-xs-6">
                                    <h4>Cliente:</h4>
                                </div>
                                <div class="col-xs-6">
                                    <h4>Comentarios:</h4>
                                </div>
                                <div class="col-xs-6">
                                    <!-- Time 00:00 -->
                                    <div class="form-group">
                                       <p style="text-align: center">{{$cita->cliente}}</p>
                                    </div>
                                </div>
                                <div class=" col-xs-6">
                                    <div class="form-group">
                                        <textarea class="form-control" id="comentario" name="comentario"
                                                  style="resize: vertical;" rows="3"
                                                  placeholder="...">{{$cita->comentario}}</textarea>
                                    </div>
                                    <!-- /.form group -->
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="row">
                        <div class="col-md-12 col-xs-12" style="text-align: center;">
                            <div class="checkbox">
                                <h4>
                                    @if($cita->aceptada=='0')
                                        <input id="aceptada" name="aceptada" type="checkbox"> Aceptada
                                    @else
                                        <input id="aceptada" checked="checked" name="aceptada" type="checkbox"> Aceptada
                                    @endif
                                </h4>
                            </div>
                        </div>
                    </div>


                    <div class="row" style="margin-top: 30px; border-top: 1px solid #ededed; padding-top: 15px;">

                        <div class="col-md-12 col-xs-12" style="text-align: center;padding-bottom: 7px;">
                            <h4>Productos:</h4>
                        </div>
                        @foreach($productosTickets as $pticket)
                        <div class="col-md-4 col-xs-12">
                            <!-- Date dd/mm/yyyy -->
                            <div class="form-group">
                                <label>Nombre del producto:</label>

                                <div class="input-group">

                                    <h5>{{Producto::encontrarProducto($pticket)->nombre}}</h5>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                        </div>
                            <div class="col-md-1 col-xs-12">
                                <div class="form-group">
                                    <label>Precio:</label>

                                    <div class="input-group">
                                        <h5>{{Tools::precioConIva($pticket->precio,$pticket->iva).'€'}}</h5>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                        <div class="col-md-2 col-xs-12">
                            <div class="form-group">
                                <label>Cantidad:</label>

                                <div class="input-group">
                                    <h5>{{$pticket->cantidad}}</h5>
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-12">
                            <div class="form-group">
                                <label>Oferta:</label>

                                <div class="input-group">
                                    @if(Oferta::encontrarOferta($pticket)!='')
                                    <h5>{{Oferta::encontrarOferta($pticket)->nombre.''.Oferta::encontrarOferta($pticket)->porcentaje.'%'}}</h5>
                                    @else
                                        <h5>Ninguna</h5>
                                    @endif
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-12">
                            <div class="form-group">
                                <label>Eliminar:</label>
                                <div class="input-group">
                                    <a href="{{URL::asset('cita/quitarProducto/'.$pticket->id)}}">
                                        <h4><i class="fa fa-trash text-red"></i></h4></a>
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        @endforeach
                    </div>




                    <div class="row"
                         style="margin-top: 30px; border-top: 1px solid #ededed; padding-top: 15px;text-align: center;">
                        <div class="form-group">
                            <div class="col-md-6 col-xs-12">
                                <h3>Total con IVA:</h3>
                            <br>
                            <h4>{{$ticket->total}}€</h4>
                                </div>

                            <div class="col-md-6 col-xs-12">
                                <h3>Total sin IVA:</h3>
                                <br>
                                <h4>{{(Tools::precioQuitarIva($ticket->total,$ticket->iva))}}€</h4>
                            </div>

                            <!-- /.input group -->
                        </div>

                    </div>


                    <div class="row" style="margin-top: 30px; border-top: 1px solid #ededed; padding-top: 15px;">
                        <div class="col-md-12 col-xs-12">

                            <div class="btn-group btn-group-justified" role="group">
                                <a type="button" href="{{URL::asset('administrador/calendario')}}"
                                   class="btn btn-labeled btn-warning">
                                    <i class="fa fa-times"></i> Cancelar
                                </a>

                                <button type="submit" class="btn btn-labeled btn-success">
                                    <i class="fa fa-pencil-square"></i> Guardar
                                </button>

                                <a type="button" href="{{URL::asset('cita/administradorEliminar/'.$cita->id)}}" class="btn btn-labeled btn-danger">
                                    <i class="fa fa-trash"></i> Eliminar
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                </form>
            </div>

            <!-- /.box -->

            <!-- END Tabla Servicios -->
        </div>

        <form name="productoAdd" id="productoAdd" action="{{URL::asset('cita/añadirProducto/'.$cita->id)}}" method="POST">
        <div class="col-sm-5 col-md-3 col-xs-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-reply"></i> Producto</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <label>Producto</label>
                        <select id="producto" name="producto" class="form-control">
                            @foreach($productos as $producto)
                                <option value="{{$producto->id}}">
                                    {{$producto->nombre.': '.$producto->codigo}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Cantidad</label>
                        <input class="form-control" required id="cantidad" name="cantidad" placeholder="Cantidad" type="number">
                    </div>
                    <div class="form-group">
                        <label>Ofertas</label>
                        <select id="oferta" name="oferta" class="form-control">
                            <option value="0">Ninguna</option>
                            @foreach($ofertas as $oferta)
                                <option value="{{$oferta->id}}">
                                    {{$oferta->nombre.': '.$oferta->porcentaje.'%'}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Añadir</button>
                </div>
            </div>
        </div>

        <div class="col-sm-5 col-md-3 col-xs-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-ticket"></i> Generar Ticket</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <p>Recuerde guardar todos los cambios antes de generar un Ticket.</p>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Generar</button>
                </div>
            </div>
        </div>
            </form>
    </section>
    <!-- /.content -->

</div>

<!-- /.content-wrapper -->

@include('footer')


