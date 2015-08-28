<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 14/8/15
 * Time: 13:45
 */

class EventoController extends BaseController{

    public function crear()
    {
        $respuesta = Evento::crear(Input::all());

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        }
        else {
            return Redirect::back()->with('mensaje', $respuesta['mensaje']);
        }
    }

    public function administradorDetalles($id)
    {

        $evento = Evento::find($id);

        return View::make('modEventos')->with(['evento' => $evento])->render();
    }

    public function clienteDetalles($id)
    {

        $evento = Evento::find($id);

        return View::make('detallesEvento')->with(['evento' => $evento])->render();
    }

    public function editar($id)
    {
        $respuesta = Evento::editar($id,Input::all());

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        }
        else {
            return Redirect::to('administrador/calendario')->with('mensaje', $respuesta['mensaje']);
        }
    }

    public function eliminar($id)
    {
        $respuesta = Evento::eliminar($id);

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        }
        else {
            return Redirect::to('administrador/calendario')->with('mensaje', $respuesta['mensaje']);
        }
    }
}