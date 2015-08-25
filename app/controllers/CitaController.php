<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 14/8/15
 * Time: 13:42
 */

class CitaController extends BaseController{

    public static function citasEventosyServicios(){

        $citas=DB::table('citas')->where('aceptada','=',1)->get();
        $servicios=DB::table('servicios')->get();
        $eventos=DB::table('eventos')->get();

        return View::make('calendarioCliente')->with(['citas' => $citas, 'servicios'=> $servicios, 'eventos' => $eventos])->render();
    }

    public static function administrador(){

        $citas=DB::table('citas')->where('aceptada','=',1)->get();
        $servicios=DB::table('servicios')->get();
        $eventos=DB::table('eventos')->get();

        return View::make('calendario')->with(['citas' => $citas, 'servicios'=> $servicios, 'eventos' => $eventos])->render();
    }

    public static function proximasCitas(){

        $citas=DB::table('citas')->where('aceptada','=',1)->where('fecha','>=',date('Y-m-d'))->get();

        return View::make('citas')->with(['citas' => $citas])->render();
    }

    public static function citasPendientes(){

        $citas=DB::table('citas')->where('aceptada','=',0)->get();

        return View::make('citas')->with(['citas' => $citas])->render();
    }

    public static function clienteMisCitas(){

        $idUsuario=Auth::getUser()->id;
        $cliente=DB::table('clientes')->where('idUsuario','=',$idUsuario)->get();


        $citasPendientes=DB::table('citas')->where('aceptada','=',0)->where('idCliente','=',$cliente->id)->get();
        $citasAceptadas=DB::table('citas')->where('aceptada','=',1)->where('idCliente','=',$cliente->id)->get();

        return View::make('citas')->with(['citasPendientes' => $citasPendientes, 'citasAceptadas' => $citasAceptadas])->render();
    }



    public function clienteCrear()
    {
        $respuesta = Cita::clienteCrear(Input::all());

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        }
        else {
            return Redirect::back()->with('mensaje', $respuesta['mensaje']);
        }
    }

    public function editar($id){
        $respuesta = Oferta::editar($id,Input::all());

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        }
        else {
            return Redirect::back()->with('mensaje', $respuesta['mensaje']);
        }
    }

    public function eliminar($id){
        $respuesta = Oferta::eliminar($id);

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        }
        else {
            return Redirect::to('cliente/ofertas')->with('mensaje', $respuesta['mensaje']);
        }
    }




}