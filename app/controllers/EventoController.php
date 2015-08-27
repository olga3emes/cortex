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
}