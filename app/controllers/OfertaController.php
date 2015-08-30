<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 14/8/15
 * Time: 13:43
 */

class OfertaController extends BaseController{

    public static function ofertas(){

        $ofertas=DB::table('ofertas')->paginate(10);

        return View::make('ofertas')->with(['ofertas' => $ofertas])->render();
    }



    public function crear()
    {
        $respuesta = Oferta::crear(Input::all());

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
            return Redirect::to('administrador/ofertas')->with('mensaje', $respuesta['mensaje']);
        }
    }

}