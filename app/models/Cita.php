<?php

/**
 * Created by PhpStorm.
 * User: olga
 * Date: 26/7/15
 * Time: 20:38
 */
class Cita extends Eloquent
{


    protected $table = 'citas';
    protected $fillable = array('id', 'fecha', 'hora', 'horaInicio', 'horaFin', 'cliente', 'aceptada', 'comentario', 'idServicio', 'idCliente', 'idOferta', 'idTicket');


    //Inicio: Relaciones

    public function cliente()
    {
        return $this->belongsTo('Cliente', 'idCliente', 'id');
    }

    public function oferta()
    {
        return $this->hasOne('Oferta', 'idOferta', 'id');
    }

    public function servicio()
    {
        return $this->hasOne('Servicio', 'idServicio', 'id');
    }

    public function ticket()
    {
        return $this->hasOne('Ticket', 'idTicket', 'id');
    }

    //Fin: Relaciones

    public static function clienteCrear($input)
    {

        $respuesta = array();

        $reglas = array(
            'fecha' => array('required'),
            'comentario' => array('required'),

        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = $validator;
            $respuesta['error'] = true;

        } else {


            $cita = new Cita();

            $idUsuario = Auth::getUser()->id;
            $cliente = DB::table('clientes')->where('idUsuario', '=', $idUsuario)->first();

            $cita->idCliente = $cliente->id;
            $cita->cliente = $cliente->nombre . ' ' . $cliente->apellidos;


            $cita->idServicio = $_POST['servicio'];

            $input['fecha'] = Tools::formatearFechaBD($input['fecha']);
            $cita->fecha = $input['fecha'];
            $cita->comentario = $input['comentario'];
            $cita->aceptada = 0;

            $cita->save();


            $ticket = new Ticket();
            $ticket->fecha = $input['fecha'];
            $servicio = Servicio::find($cita->idServicio);
            $ticket->total = Tools::precioConIva($servicio->precio, $servicio->iva);
            $ticket->save();

            $cita->idTicket = $ticket->id;
            $cita->save();


            $respuesta['mensaje'] = 'Cita solicitada';
            $respuesta['error'] = false;
            $respuesta['data'] = $cita;

        }
        return $respuesta;
    }

    public static function administradorCrear($input)
    {

        $respuesta = array();

        $reglas = array(
            'fecha' => array('required'),
            'servicio' => array('required'),
            'hora' => array('required'),
            'horaInicio' => array('required'),
            'horaFin' => array('required'),


        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = $validator;
            $respuesta['error'] = true;

        } else {


            $cita = new Cita();

            //Fecha

            $input['fecha'] = Tools::formatearFechaBD($input['fecha']);
            $cita->fecha = $input['fecha'];

            //Hora
            $cita->horaInicio = $input['horaInicio'];
            $cita->horaFin = $input['horaFin'];


            //Cliente

            if (isset($_POST['clienteRegistrado']) and $_POST['clienteRegistrado'] != 0) {
                $cita->idCliente = $_POST['clienteRegistrado'];
                $cliente = DB::table('clientes')->where('id', '=', $cita->idCliente)->first();
                $cita->cliente = $cliente->nombre . ' ' . $cliente->apellidos;

            } else {
                $cita->cliente = $input['cliente'];
            }

            //Servicio

            $cita->idServicio = $_POST['servicio'];


            //Hora fijada

            $cita->hora = $input['hora'];

            //Comentario

            $cita->comentario = $input['comentario'];

            //Aceptada por el Administrador

            if (isset($_REQUEST['aceptada'])) {
                $cita->aceptada = 1;
            } else {
                $cita->aceptada = 0;
            }

            $cita->save();


            $ticket = new Ticket();
            $ticket->fecha = $input['fecha'];
            $servicio = Servicio::find($cita->idServicio);
            $ticket->total = Tools::precioConIva($servicio->precio, $servicio->iva);
            $ticket->save();

            $cita->idTicket = $ticket->id;
            $cita->save();


            $respuesta['mensaje'] = 'Cita solicitada';
            $respuesta['error'] = false;
            $respuesta['data'] = $cita;

        }
        return $respuesta;
    }


    public static function editar($id, $input)
    {

        $respuesta = array();

        $reglas = array(
            'fecha' => array('required'),
            'servicio' => array('required'),
            'hora' => array('required'),
            'horaInicio' => array('required'),
            'horaFin' => array('required'),


        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = $validator;
            $respuesta['error'] = true;

        } else {


            $cita = Cita::find($id);

            //Fecha

            $input['fecha'] = Tools::formatearFechaBD($input['fecha']);
            $cita->fecha = $input['fecha'];

            //Horas
            $cita->horaInicio = $input['horaInicio'];
            $cita->horaFin = $input['horaFin'];


            //Servicio

            $cita->idServicio = $_POST['servicio'];

            //Oferta
            if ($input['oferta'] != 0) {
                $cita->idOferta = $_POST['oferta'];
            } else {
                $cita->idOferta = null;
            }


            //Hora fijada

            $cita->hora = $input['hora'];

            //Comentario

            $cita->comentario = $input['comentario'];

            //Aceptada por el Administrador

            if (isset($_REQUEST['aceptada'])) {
                $cita->aceptada = 1;
            } else {
                $cita->aceptada = 0;
            }

            $cita->save();

            //RECORDAR QUE EL TICKET SE GUARDA CON EL IVA YA APLICADO

            $ticket = Ticket::find($cita->idTicket);
            $ticket->fecha = $input['fecha'];
            $servicio = Servicio::find($cita->idServicio);
            $ticket->total = $servicio->precio;
            if ($cita->idOferta != '' or $cita->idOferta != 0) {
                $oferta = Oferta::find($cita->idOferta);
                $ticket->total = Tools::aplicaOferta(Tools::precioConIva($servicio->precio, $servicio->iva), $oferta->porcentaje);
            } else {
                $ticket->total = Tools::precioConIva($servicio->precio, $servicio->iva);
            }
            $productosTickets = DB::table('productosTickets')->where('idTicket', '=', $cita->idTicket)->get();
            if ($productosTickets != "") {
                foreach ($productosTickets as $pticket) {

                    if ($pticket->idOferta != "" or $pticket->idOferta != 0) {

                        $oferta = Oferta::find($pticket->idOferta);

                        $ofertaAplicada = Tools::aplicaOferta(Tools::precioConIva($pticket->precio * $pticket->cantidad, $pticket->iva), $oferta->porcentaje);

                        $ticket->total = $ticket->total + $ofertaAplicada;

                    } else {
                        $ticket->total = $ticket->total + (Tools::precioConIva($pticket->precio * $pticket->cantidad, $pticket->iva));
                    }
                }
            }


            $ticket->save();

            $respuesta['mensaje'] = 'Cita actualizada';
            $respuesta['error'] = false;
            $respuesta['data'] = $cita;

        }
        return $respuesta;
    }

    public static function eliminar($id)
    {

        $respuesta = array();

        $cita = Cita::find($id);

            $ticket = DB::table('tickets')->where('id','=',$cita->idTicket)->first();

            $productosTickets = DB::table('productosTickets')->where('idTicket', '=', $cita->idTicket)->get();

            $cita->delete();

        if ($productosTickets != "") {
            foreach ($productosTickets as $pticket) {

                $producto=Producto::find($pticket->idProducto);

                $producto->cantidadActual=($producto->cantidadActual+$pticket->cantidad);

                $producto->save();

                ProductosTicket::eliminar($pticket->id);
            }
        }

        Ticket::eliminar($cita->idTicket);




        //Mensajes de exito
        $respuesta['mensaje'] = 'Cita Eliminada';
        $respuesta['error'] = null;
        $respuesta['data'] = $cita;

        return $respuesta;

    }

    public static function eliminarCliente($id)
    {

        $respuesta = array();

        $cita = Cita::find($id);

        $ticket = DB::table('tickets')->where('id','=',$cita->idTicket)->first();

        $productosTickets = DB::table('productosTickets')->where('idTicket', '=', $cita->idTicket)->get();



        $cita->delete();

        Ticket::eliminar($cita->idTicket);

        if ($productosTickets != "") {
            foreach ($productosTickets as $pticket) {

                $producto=Producto::find($pticket->idProducto);

                $producto->cantidadActual=($producto->cantidadActual+$pticket->cantidad);

                $producto->save();

                $pticket->delete();
            }
        }






        //Mensajes de exito
        $respuesta['mensaje'] = 'Cita Eliminada';
        $respuesta['error'] = null;
        $respuesta['data'] = $cita;

        return $respuesta;

    }


    public static function añadirProducto($id, $input)
    {


        $respuesta = array();

        $reglas = array(
            'producto' => array('required'),
            'cantidad' => array('required'),

        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = $validator;
            $respuesta['error'] = true;

        } else {


            $cita = Cita::find($id);
            $ticket = Ticket::find($cita->idTicket);


            $pticket = new ProductosTicket();

            //Producto

            $pticket->idProducto = $_POST['producto'];



            //Cantidad

            $pticket->cantidad = $input['cantidad'];

            //Ticket

            $pticket->idTicket = $ticket->id;

            $producto = DB::table('productos')->where('id', '=', $_POST['producto'])->first();

            $pticket->precio = $producto->precio;

            $pticket->iva = $producto->iva;


            if ($input['oferta'] != 0) {

                $pticket->idOferta = $_POST['oferta'];

                $pticket->save();

                $oferta = Oferta::find($pticket->idOferta);

                $ofertaAplicada = Tools::aplicaOferta(Tools::precioConIva($pticket->precio * $pticket->cantidad, $pticket->iva), $oferta->porcentaje);

                $ticket->total = $ticket->total + $ofertaAplicada;

                $ticket->save();

                $respuesta['mensaje'] = 'Producto añadido';
                $respuesta['error'] = false;
                $respuesta['data'] = $cita;

            } else {

                $pticket->save();

                $producto=Producto::find($pticket->idProducto);

                $producto->cantidadActual=($producto->cantidadActual-$pticket->cantidad);

                $ticket->total = $ticket->total + (Tools::precioConIva($pticket->precio * $pticket->cantidad, $pticket->iva));

                $ticket->save();

                $producto->save();

                $respuesta['mensaje'] = 'Producto añadido';
                $respuesta['error'] = false;
                $respuesta['data'] = $cita;


            }


        }

        return $respuesta;

    }


    public static function quitarProducto($idPticket)
    {


        $pticket = ProductosTicket::find($idPticket);
        $ticket = Ticket::find($pticket->idTicket);


        if ($pticket->idOferta != "") {

            $oferta = Oferta::find($pticket->idOferta);

            $ofertaAplicada = Tools::aplicaOferta(Tools::precioConIva($pticket->precio * $pticket->cantidad, $pticket->iva), $oferta->porcentaje);

            $ticket->total = $ticket->total - $ofertaAplicada;

            $ticket->save();

            $pticket->delete();

            $respuesta['mensaje'] = 'Producto quitado';
            $respuesta['error'] = false;
            $respuesta['data'] = $pticket;

        } else {

            $ticket->total = $ticket->total - (Tools::precioConIva($pticket->precio * $pticket->cantidad, $pticket->iva));

            $ticket->save();

            $producto=Producto::find($pticket->idProducto);

            $producto->cantidadActual=($producto->cantidadActual+$pticket->cantidad);

            $producto->save();

            $pticket->delete();


            $respuesta['mensaje'] = 'Producto quitado';
            $respuesta['error'] = false;
            $respuesta['data'] = $pticket;


        }

        return $respuesta;

    }

}