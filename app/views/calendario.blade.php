@include('header')

@if(Administrador::esAdministrador())




    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-4">

                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h4 class="box-title">Añadir Cita</h4>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body">
                            <!-- Form -->
                            <form name="crearForm" id="crearForm" action="{{URL::asset('cita/administradorCrear')}}" method="POST">
                            <div class="form-group">
                                <label>Fecha</label>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" min="{{date('Y-m-d')}}"required id="fecha" name="fecha" class="form-control" placeholder="dd/mm/yyyy"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- time Picker -->
                            <div class="timepicker">
                                <label>Hora</label>

                                <div class="col-md-12 col-xs-12">
                                    <label>Desde:</label>
                                    <div class="input-group">
                                        <input type="time" id="horaInicio" name="horaInicio" required placeholder="0:00" class="form-control timepicker"/>

                                        <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <label>Hasta:</label>

                                    <div class="input-group">
                                        <input type="time" id="horaFin" name="horaFin" required placeholder="0:00" class="form-control timepicker"/>

                                        <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <label style="margin-top: 5%;">Servicio a contratar</label>
                                <div class="col-md-12 col-xs-12">
                                    <select required id="servicio" name="servicio"class="form-control">
                                        @foreach($servicios as $servicio)
                                            <option value="{{$servicio->id}}">
                                                {{$servicio->nombre.': '.Tools::precioConIva($servicio->precio,$servicio->iva).'€'}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            <div>
                                <label style="margin-top: 5%;">Cliente</label>
                                <div class="col-md-12 col-xs-12">
                                    <!-- Time 00:00 -->
                                    <div class="form-group">
                                        <label>Cliente sin Registrar:</label>
                                        <input class="form-control" id="cliente" name="cliente" placeholder="Nombre" type="text">
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <!-- Time 00:00 -->
                                    <div class="form-group">
                                        <label>Cliente Registrado</label>
                                        <select id="clienteRegistrado" name="clienteRegistrado" class="form-control">
                                            <option value="0">Seleccionar</option>
                                            @foreach($clientes as $cliente)
                                                <option value="{{$cliente->id}}">
                                                    {{$cliente->nombre.' '.$cliente->apellidos}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="timepicker">
                                <label>Cita Fijada a las:</label>
                                <div class="col-md-12 col-xs-12">
                                    <div class="input-group">
                                        <input type="time" required id="hora" name="hora" placeholder="0:00" class="form-control timepicker"/>
                                        <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                            </div>

                            <label style="margin-top: 5%;">Comentario:</label>
                            <div class="col-md-12 col-xs-12">
                                <textarea required id="comentario" name="comentario" class="form-control" style="resize: vertical;" rows="3"
                                          placeholder="..."></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-xs-12" style="margin-top: 5%;">
                                    <div class="checkbox">
                                        <label>
                                            <input id="aceptada" name="aceptada" type="checkbox" checked="checked"> Aceptada
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12" style="margin-top: 5%;">
                                    <button type="submit" class="btn btn-primary pull-right">Añadir</button>
                                </div>
                                <!-- /.form group -->
                            </div>
                            <!-- /.form group -->
                                </form>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->

                    <!--CREAR EVENTO -->
                    <form name="crearEvento" id="crearEvento" action="{{URL::asset('evento/crear')}}" method="POST">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Crear Evento</h3>
                        </div>
                        <div class="box-body">
                            <!-- /btn-group -->
                            <label for="background-color">Elige un color para el evento:</label>
                            <div class="input-group" style="margin-bottom: 5%;">
                                <h4><i class="fa fa-pencil" style="margin-right: 5px;"></i> <input  id="color" name="color" id="background-color" type="color" /></h4>
                                </div>
                            <!-- time Picker -->

                            <div class="col-md-12 col-xs-12" style="margin-bottom: 5%;">
                                <label>Nombre del evento</label>
                                <!-- Time 00:00 -->
                                <div class="input-group">
                                    <input class="form-control" id="nombre" name="nombre" placeholder="Nombre" type="text">
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->
                            </div>



                            <div class="col-md-12 col-xs-12" style="margin-bottom: 5%;">
                                <label>Fecha</label>
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input min='{{date('Y-m-d')}}' type="date" id="fecha" name="fecha" class="form-control"  placeholder="dd/mm/aaaa"/>
                            </div>
                            <label style="margin-bottom: 5%;">Hora</label>

                            <div class="row">
                                <div class="col-md-6 col-xs-12" style="margin-left: 5%;">
                                    <div class="timepicker">
                                        <label>Desde:</label>

                                        <div class="input-group">
                                            <input type="time" placeholder="0:00" id="horaInicio" name="horaInicio"class="form-control timepicker"/>

                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-12" style="margin-left: 5%;">
                                    <div class="timepicker">
                                        <div class="form-group">
                                            <label>Hasta:</label>

                                            <div class="input-group">
                                                <input type="time" placeholder="0:00" id="horaFin" name="horaFin"class="form-control timepicker"/>

                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form group -->
                                    </div>
                                </div>
                                <!-- /.form group -->
                            </div>
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input id="diaCompleto" name="diaCompleto"type="checkbox"> Todo el día
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-12 col-xs-12" style="margin-top: 5%;">
                                <button type="submit" class="btn btn-primary pull-right">Añadir</button>
                            </div>
                                <!-- /btn-group -->

                        </div>
                    </div>
                        </form>
                </div>
                <!-- FIN CREAR EVENTO -->


                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-body no-padding">
                            <!-- THE CALENDAR -->
                            <div id="calendar"></div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('footer')


    <!-- Page specific script -->
    <script type="text/javascript">
        $(function () {

            /* initialize the external events
             -----------------------------------------------------------------*/
            function ini_events(ele) {
                ele.each(function () {

                    // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                    // it doesn't need to have a start or end
                    var eventObject = {
                        title: $.trim($(this).text()) // use the element's text as the event title
                    };

                    // store the Event Object in the DOM element so we can get to it later
                    $(this).data('eventObject', eventObject);

                    // make the event draggable using jQuery UI
                    $(this).draggable({
                        zIndex: 1070,
                        revert: true, // will cause the event to go back to its
                        revertDuration: 0 //  original position after the drag
                    });

                });
            }

            ini_events($('#external-events div.external-event'));

            /* initialize the calendar
             -----------------------------------------------------------------*/
            //Date for the calendar events (dummy data)
            var date = new Date();
            var d = date.getDate(),
                    m = date.getMonth(),
                    y = date.getFullYear();

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                buttonText: {
                    today: 'Hoy',
                    month: 'Mes',
                    week: 'Semana',
                    day: 'Día'
                },

                //Random default events : Formato de la fecha año- mes (del 0 al 11)- dia- hora- minuto
                events: [
                        @foreach($citas as $cita)
                    {
                        id: '{{$cita->id}}',
                        title: '{{$cita->cliente}}',

                        start: new Date(
                                parseInt('{{Tools::year($cita->fecha)}}'),
                                parseInt('{{Tools::month($cita->fecha)-1}}'),
                                parseInt('{{Tools::day($cita->fecha)}}'),
                                parseInt('{{Tools::hour($cita->horaInicio)}}'),
                                parseInt('{{Tools::min($cita->horaInicio)}}')),
                        end: new Date(
                                parseInt('{{Tools::year($cita->fecha)}}'),
                                parseInt('{{Tools::month($cita->fecha)-1}}'),
                                parseInt('{{Tools::day($cita->fecha)}}'),
                                parseInt('{{Tools::hour($cita->horaFin)}}'),
                                parseInt('{{Tools::min($cita->horaInicio)}}')),
                        allDay: false,
                        url: '{{URL::asset('cita/administradorDetalles/'.$cita->id)}}',
                        backgroundColor: "#AA1B30",
                        borderColor: "#AA1B30"

                    },
                        @endforeach

                        @foreach($eventos as $evento)
                    {
                        id: '{{$evento->id}}',
                        title: '{{$evento->nombre}}',

                        start: new Date(
                                parseInt('{{Tools::year($evento->fecha)}}'),
                                parseInt('{{Tools::month($evento->fecha)-1}}'),
                                parseInt('{{Tools::day($evento->fecha)}}'),
                                parseInt('{{Tools::hour($evento->horaInicio)}}'),
                                parseInt('{{Tools::min($evento->horaInicio)}}')),
                        end: new Date(
                                parseInt('{{Tools::year($evento->fecha)}}'),
                                parseInt('{{Tools::month($evento->fecha)-1}}'),
                                parseInt('{{Tools::day($evento->fecha)}}'),
                                parseInt('{{Tools::hour($evento->horaFin)}}'),
                                parseInt('{{Tools::min($evento->horaInicio)}}')),
                        @if($evento->diaCompleto==0)
                        allDay: false,
                        @else
                        allDay:true,
                        @endif
                        url: '{{URL::asset('evento/detalles/'.$evento->id)}}',
                        backgroundColor: "{{$evento->color}}", //Info (aqua)
                        borderColor: "{{$evento->color}}" //Info (aqua)
                    },
                        @endforeach
                ],
                editable: false,
                droppable: true, // this allows things to be dropped onto the calendar !!!
                drop: function (date, allDay) { // this function is called when something is dropped

                    // retrieve the dropped element's stored Event Object
                    var originalEventObject = $(this).data('eventObject');

                    // we need to copy it, so that multiple events don't have a reference to the same object
                    var copiedEventObject = $.extend({}, originalEventObject);

                    // assign it the date that was reported
                    copiedEventObject.start = date;
                    copiedEventObject.allDay = allDay;
                    copiedEventObject.backgroundColor = $(this).css("background-color");
                    copiedEventObject.borderColor = $(this).css("border-color");

                    // render the event on the calendar
                    // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                    $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                    // is the "remove after drop" ckbox checked?
                    if ($('#drop-remove').is(':checked')) {
                        // if so, remove the element from the "Draggable Events" list
                        $(this).remove();
                    }

                }
            });

            /* ADDING EVENTS */
            var currColor = "#3c8dbc"; //Red by default
            //Color chooser button
            var colorChooser = $("#color-chooser-btn");
            $("#color-chooser > li > a").click(function (e) {
                e.preventDefault();
                //Save color
                currColor = $(this).css("color");
                //Add color effect to button
                $('#add-new-event').css({
                    "background-color": currColor,
                    "border-color": currColor
                });
            });
            $("#add-new-event").click(function (e) {
                e.preventDefault();
                //Get value and make sure it is not null
                var val = $("#new-event").val();
                if (val.length == 0) {
                    return;
                }

                //Create events
                var event = $("<div />");
                event.css({
                    "background-color": currColor,
                    "border-color": currColor,
                    "color": "#fff"
                }).addClass("external-event");
                event.html(val);
                $('#external-events').prepend(event);

                //Add draggable funtionality
                ini_events(event);

                //Remove event from text input
                $("#new-event").val("");
            });
        });

        @endif


    </script>