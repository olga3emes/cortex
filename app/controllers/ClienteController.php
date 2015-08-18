<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 14/8/15
 * Time: 13:42
 */

class ClienteController extends BaseController{

    public function registrar()
    {
        $respuesta =Cliente::registrar(Input::all());

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        } else {
            return Redirect::back()->with('mensaje', ($respuesta['mensaje']));
        }
    }


}