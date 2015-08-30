@include('header')

    <!-- Content Wrapper. Contains page content -->


    <div class="content-wrapper">
        <!-- Semanal -->
        <section>
            <div class="col-md-12">
                <div class="box box-solid" style="margin-top: 1%;">
                    <div class="box-header with-border">
                        <h4 style="color:#000000;text-align: center"><i class="fa fa-calendar"></i> Horario de apertura</h4>
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
                            <td >9:30 - 13:30</td>
                            <td>9:30 - 13:30</td>
                            <td style="background-color: #C02942; color: #fff;">Cerrado</td>
                            <td>9:30 - 13:30</td>
                            <td>9:30 - 13:30</td>
                            <td>9:30 - 14:00</td>
                            <td style="background-color: #C02942; color: #fff;">Cerrado</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">16:30 - 20:00</td>
                            <td>16:30 - 20:00</td>
                            <td style="background-color: #C02942; color: #fff;">Cerrado</td>
                            <td>16:30 - 20:00</td>
                            <td>16:30 - 20:00</td>
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
                <div class="col-md-5">

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
                            <form name="crearForm" id="crearForm" action="{{URL::asset('cita/clienteCrear')}}" method="POST">
                            <div class="form-group">
                                <label>Fecha</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" min="{{date('Y-m-d')}}" required id="fecha" name="fecha" class="form-control" placeholder="dd/mm/aaaa"/>


                                </div>
                            </div>

                            <label style="margin-top: 5%;">Servicio a contratar</label>
                            <div class="col-md-12 col-xs-12">
                                <select id="servicio" name="servicio"class="form-control">
                                    @foreach($servicios as $servicio)
                                    <option value="{{$servicio->id}}">
                                        {{$servicio->nombre.': '.Tools::precioConIva($servicio->precio,$servicio->iva).'€'}}</option>
                                    @endforeach
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
                                </div>
                            </div>

                            <label style="margin-top: 5%;">Comentario:</label>
                            <div class="col-md-12 col-xs-12">
                                <textarea required class="form-control" id="comentario" name="comentario" style="resize: vertical;" rows="3"
                                          placeholder="¿Entre qué horas desea obtener la cita?"></textarea>
                            </div>

                            <div class="col-md-12 col-xs-12" style="margin-top: 5%;">
                                Una vez solicite la cita, puede consultar el estado de la misma en el apartado "Mis citas".
                            </div>

                                <div class="col-md-12 col-xs-12" style="margin-top: 5%;">
                                    <button type="submit" class="btn btn-primary pull-right">Solicitar</button>
                                </div>
                            </form>
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->


                <div class="col-md-7">
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




    @include('footer')



    <script type="text/javascript">
        $(function () {
            /* initialize the external events
             -----------------------------------------------------------------*/
            function ini_events(ele) {
                ele.each(function () {

                    var eventObject = {
                        title: $.trim($(this).text())
                    };


                    $(this).data('eventObject', eventObject);

                    // make the event draggable using jQuery UI
                    $(this).draggable({
                        zIndex: 1070,
                        revert: true,
                        revertDuration: 0
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
                // events : Formato de la fecha año-mes (del 0 al 11)- dia- hora- minuto
                events: [
                    @foreach($citas as $cita)
                    {
                        id: '{{$cita->id}}',
                        title: 'Ocupado',
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
                        url: '{{URL::asset('evento/clienteDetalles/'.$evento->id)}}',
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


    </script>