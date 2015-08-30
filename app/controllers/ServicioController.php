<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 14/8/15
 * Time: 13:43
 */

class ServicioController extends BaseController{


    public static function servicios(){

        $servicios=DB::table('servicios')->paginate(10);

        return View::make('servicios')->with(['servicios' => $servicios])->render();
    }



    public function crear()
    {
        $respuesta = Servicio::crear(Input::all());

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        }
        else {
            return Redirect::back()->with('mensaje', $respuesta['mensaje']);
        }
    }

    public function editar($id){
        $respuesta = Servicio::editar($id,Input::all());

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        }
        else {
            return Redirect::back()->with('mensaje', $respuesta['mensaje']);
        }
    }

    public function eliminar($id){
        $respuesta = Servicio::eliminar($id);

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        }
        else {
            return Redirect::to('administrador/servicios')->with('mensaje', $respuesta['mensaje']);
        }
    }

}