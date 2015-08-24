@include('header')

@if(Auth::check()==true)

    <!-- Content Wrapper. Contains page content -->

    <!-- END Calendario -->
    <div class="content-wrapper">
        <!-- Calendario -->
        <section>
            <div class="col-md-12">
                <div class="box box-solid" style="margin-top: 1%;">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-calendar"> Horario de apertura</i></h3>
                    </div>
                    <table class="table table-bordered table-hover table-responsive" style="text-align: center;">
                        <tr >
                            <th style="text-align: center;">Lunes</th>
                            <th style="text-align: center;">Martes</th>
                            <th style="text-align: center;">Miércoles</th>
                            <th style="text-align: center;">Jueves</th>
                            <th style="text-align: center;">Viernes</th>
                            <th style="text-align: center;">Sábado</th>
                            <th style="text-align: center;">Domingo</th>
                        </tr>
                        <tr>
                            <td >9:00 - 14:00</td>
                            <td>9:00 - 14:00</td>
                            <td style="background-color: #C02942; color: #fff;">Cerrado</td>
                            <td>9:00 - 14:00</td>
                            <td>9:00 - 14:00</td>
                            <td>9:00 - 14:30</td>
                            <td style="background-color: #C02942; color: #fff;">Cerrado</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">16:00 - 20:00</td>
                            <td>16:00 - 20:00</td>
                            <td style="background-color: #C02942; color: #fff;">Cerrado</td>
                            <td>16:00 - 20:00</td>
                            <td>16:00 - 20:00</td>
                            <td style="background-color: #C02942; color: #fff;">Cerrado</td>
                            <td style="background-color: #C02942; color: #fff;">Cerrado</td>
                        </tr>
                    </table>

                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-4">

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h4 style="color:#AA1B30;text-align: center"><i class="fa fa-calendar"></i> Coger Cita</h4>
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


                            <div class="timepicker">
                                <label style="margin-top: 5%;">Cita Fijada a las:</label>
                                <div class="col-md-12 col-xs-12">
                                    <div class="input-group">
                                        <input type="time" placeholder="0:00"  disabled class="form-control timepicker"/>
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
                                          placeholder="¿Entre qué horas desea obtener la cita?"></textarea>
                            </div>

                            <div class="col-md-12 col-xs-12" style="margin-top: 5%;">
                                Una vez solicite la cita, puede consultar el estado de la misma en el apartado "Mis citas".
                            </div>

                                <div class="col-md-12 col-xs-12" style="margin-top: 5%;">
                                    <button type="submit" class="btn btn-primary pull-right">Solicitar</button>
                                </div>
                                <!-- /.form group -->
                            </div>
                            <!-- /.form group -->
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->
                <div class="col-md-1">
                </div>

                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h4 style="color:#AA1B30;text-align: center"><i class="fa fa-calendar"></i> Consulta nuestra disponibilidad</h4>
                        </div>
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

    <div class="col-md-1">
    </div>


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