<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 14/8/15
 * Time: 13:45
 */

class ProductoController extends BaseController{

    public static function productos(){

        $productos=DB::table('productos')->get();

        return View::make('pendientes')->with(['productos' => $productos])->render();
    }

    public static function disponibles(){

        $productos=DB::table('productos')->get();

        return View::make('disponibles')->with(['productos' => $productos])->render();
    }

    public static function pendientes(){

        $productos=DB::table('productos')->get();

        return View::make('pendientes')->with(['productos' => $productos])->render();
    }



    public function crear()
    {
        $respuesta = Producto::crear(Input::all());

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        }
        else {
            return Redirect::back()->with('mensaje', $respuesta['mensaje']);
        }
    }

    public function editar($id){
        $respuesta = Producto::editar($id,Input::all());

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        }
        else {
            return Redirect::to('administrador/disponibles')->with('mensaje', $respuesta['mensaje']);
        }
    }

    public function eliminar($id){
        $respuesta = Producto::eliminar($id);

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        }
        else {
            return Redirect::to('administrador/disponibles')->with('mensaje', $respuesta['mensaje']);
        }
    }
}