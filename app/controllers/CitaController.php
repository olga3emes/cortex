<?php

/**
 * Created by PhpStorm.
 * User: olga
 * Date: 14/8/15
 * Time: 13:42
 */
class CitaController extends BaseController
{

    public static function citasEventosyServicios()
    {

        $citas = DB::table('citas')->where('aceptada', '=', 1)->get();
        $servicios = DB::table('servicios')->get();
        $eventos = DB::table('eventos')->get();

        return View::make('calendarioCliente')->with(['citas' => $citas, 'servicios' => $servicios, 'eventos' => $eventos])->render();
    }

    public static function administrador()
    {

        $citas = DB::table('citas')->where('aceptada', '=', 1)->get();
        $eventos = DB::table('eventos')->get();

        $servicios = DB::table('servicios')->get();
        $clientes = DB::table('clientes')->get();

        return View::make('calendario')->with(['citas' => $citas, 'servicios' => $servicios, 'eventos' => $eventos, 'clientes' => $clientes])->render();
    }

    public static function citasPendientes()
    {

        $citasPendientes = DB::table('citas')->where('aceptada', '=', 0)->orderBy('fecha', 'ASC')->paginate(10);

        $proximasCitas = DB::table('citas')->where('aceptada', '=', 1)->where('fecha', '>=', date('Y-m-d'))->orderBy('fecha', 'ASC')->paginate(10);

        return View::make('citas')->with(['citasPendientes' => $citasPendientes, 'proximasCitas' => $proximasCitas])->render();
    }

    public static function clienteMisCitas()
    {

        $idUsuario = Auth::getUser()->id;
        $cliente = DB::table('clientes')->where('idUsuario', '=', $idUsuario)->first();
        $id = $cliente->id;

        $citasPendientes = DB::table('citas')->where('aceptada', '=', 0)->where('idCliente', '=', $id)->orderBy('fecha', 'ASC')->paginate(10);
        $citasAceptadas = DB::table('citas')->where('aceptada', '=', 1)->where('idCliente', '=', $id)->orderBy('fecha', 'ASC')->paginate(10);

        return View::make('citasPendientes')->with(['citasPendientes' => $citasPendientes, 'citasAceptadas' => $citasAceptadas])->render();
    }


    public function clientedetalles($id)
    {

        $cita = Cita::find($id);
        $idUsuario = Auth::getUser()->id;
        $cliente = DB::table('clientes')->where('idUsuario', '=', $idUsuario)->first();
        $id = $cliente->id;
        if ($cita->idCliente == $id) {
            $servicio = Servicio::find($cita->idServicio)->first();

            return View::make('detallesCita')->with(['cita' => $cita, 'servicio' => $servicio])->render();
        }

    }

    public function administradorDetalles($id)
    {

        $cita = Cita::find($id);
        $servicioActual = Servicio::find($cita->idServicio);
        $ofertaActual = Oferta::find($cita->idOferta);
        $ticket = Ticket::find($cita->idTicket);


        $servicios = Servicio::all();
        $ofertas = Oferta::all();
        $productos = Producto::all();

        $productosTickets = DB::table('productosTickets')->where('idTicket', "=", $ticket->id)->get();



        return View::make('modCitas')->with(['cita' => $cita, 'ticket' => $ticket,
            'servicioActual'=>$servicioActual, 'ofertaActual'=>$ofertaActual,
            'productosTickets'=>$productosTickets,
            'servicios' => $servicios, 'ofertas' => $ofertas, 'productos' => $productos])->render();


    }


    public function clienteCrear()
    {
        $respuesta = Cita::clienteCrear(Input::all());

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        } else {
            return Redirect::back()->with('mensaje', $respuesta['mensaje']);
        }
    }

    public function administradorCrear()
    {
        $respuesta = Cita::administradorCrear(Input::all());

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        } else {
            return Redirect::back()->with('mensaje', $respuesta['mensaje']);
        }
    }


    public function editar($id)
    {
        $respuesta = Cita::editar($id, Input::all());

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        } else {
            return Redirect::back()->with('mensaje', $respuesta['mensaje']);
        }
    }

    public function eliminar($id)
    {
        $respuesta = Cita::eliminar($id);

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        } else {
            return Redirect::to('cliente/ofertas')->with('mensaje', $respuesta['mensaje']);
        }
    }


}