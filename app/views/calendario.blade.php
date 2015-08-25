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
                            <div class="form-group">
                                <label>Fecha</label>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" class="form-control" placeholder="dd/mm/aaaa"/>
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- time Picker -->
                            <div class="timepicker">
                                <label>Hora</label>

                                <div class="col-md-12 col-xs-12">
                                    <label>Desde:</label>
                                    <div class="input-group">
                                        <input type="time" placeholder="0:00" class="form-control timepicker"/>

                                        <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <label>Hasta:</label>

                                    <div class="input-group">
                                        <input type="time" placeholder="0:00" class="form-control timepicker"/>

                                        <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <label style="margin-top: 5%;">Servicio a contratar</label>
                            <div class="col-md-12 col-xs-12">
                                <select class="form-control">
                                    <option>opción 1</option>
                                    <option>opción 2</option>
                                    <option>opción 3</option>
                                    <option>opción 4</option>
                                    <option>opción 5</option>
                                </select>
                            </div>

                            <div>
                                <label style="margin-top: 5%;">Cliente</label>
                                <div class="col-md-12 col-xs-12">
                                    <!-- Time 00:00 -->
                                    <div class="form-group">
                                        <label>Cliente sin Registrar:</label>
                                        <input class="form-control" id="InputNombre" placeholder="Nombre" type="text">
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                </div>
                                <div class="col-md-12 col-xs-12">
                                    <!-- Time 00:00 -->
                                    <div class="form-group">
                                        <label>Cliente Registrado</label>
                                        <select class="form-control">
                                            <option>opción 1</option>
                                            <option>opción 2</option>
                                            <option>opción 3</option>
                                            <option>opción 4</option>
                                            <option>opción 5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="timepicker">
                                <label>Cita Fijada a las:</label>
                                <div class="col-md-12 col-xs-12">
                                    <div class="input-group">
                                        <input type="time" placeholder="0:00" class="form-control timepicker"/>
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
                                <textarea class="form-control" style="resize: vertical;" rows="3"
                                          placeholder="..."></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-xs-12" style="margin-top: 5%;">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" checked="checked"> Aceptada
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12" style="margin-top: 5%;">
                                    <button type="submit" class="btn btn-primary pull-right">Añadir</button>
                                </div>
                                <!-- /.form group -->
                            </div>
                            <!-- /.form group -->
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->

                    <!--CREAR EVENTO -->
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Crear Evento</h3>
                        </div>
                        <div class="box-body">
                            <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                                <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                                <ul class="fc-color-picker" id="color-chooser">
                                    <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a>
                                    </li>
                                    <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a>
                                    </li>
                                    <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a>
                                    </li>
                                    <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a>
                                    </li>
                                    <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a>
                                    </li>
                                    <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a>
                                    </li>
                                    <li><a class="text-green" href="#"><i class="fa fa-square"></i></a>
                                    </li>
                                    <li><a class="text-olive" href="#"><i class="fa fa-square"></i></a>
                                    </li>
                                    <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a>
                                    </li>
                                    <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a>
                                    </li>
                                    <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a>
                                    </li>
                                    <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /btn-group -->
                            <!-- time Picker -->
                            <label>Fecha</label>

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" class="form-control" placeholder="dd/mm/aaaa"/>
                            </div>
                            <label>Hora</label>

                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="timepicker">
                                        <label>Desde:</label>

                                        <div class="input-group">
                                            <input type="time" placeholder="0:00" class="form-control timepicker"/>

                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="timepicker">
                                        <div class="form-group">
                                            <label>Hasta:</label>

                                            <div class="input-group">
                                                <input type="time" placeholder="0:00" class="form-control timepicker"/>

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
                                        <input type="checkbox"> Todo el día
                                    </label>
                                </div>
                            </div>
                            <div class="input-group">
                                <input id="new-event" type="text" class="form-control"
                                       placeholder="Nombre del evento">

                                <div class="input-group-btn">
                                    <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Añadir
                                    </button>
                                </div>
                                <!-- /btn-group -->
                            </div>
                            <!-- /input-group -->
                        </div>
                    </div>
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
                    {
                        id: 1,
                        title: 'Lunch',
                        start: new Date(2015, 7, 28, 11, 30),
                        end: new Date(2015, 7, 29, 19, 50),
                        allDay: false,
                        url: '{{URL::asset('administrador/eventos')}}',
                        backgroundColor: "#00c0ef", //Info (aqua)
                        borderColor: "#00c0ef" //Info (aqua)

                    }, {
                        id: 2,
                        title: 'Lunch',
                        start: new Date(2015, 8, 30, 12, 0),
                        end: new Date(2015, 8, 30, 14, 30),
                        allDay: false,
                        url: '{{URL::asset('administrador/eventos')}}',
                        backgroundColor: "#02c06f", //Info (aqua)
                        borderColor: "#02c06f" //Info (aqua)
                    },
                    {
                        id: 3,
                        title: '2 días',
                        start: new Date(2015, 7, 1, 0, 0),
                        end: new Date(2015, 7, 1, 0, 0),
                        allDay: true,
                        url: '{{URL::asset('administrador/eventos')}}',
                        backgroundColor: "#09a03f", //Info (aqua)
                        borderColor: "#09a03f" //Info (aqua)
                    }
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

                    // is the "remove after drop" checkbox checked?
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