<?php

/**
 * Created by PhpStorm.
 * User: olga
 * Date: 14/8/15
 * Time: 13:45
 */
class GaleriaController extends BaseController
{


    public function crear()
    {
        $respuesta = Galeria::crear(Input::all());

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        } else {
            return Redirect::back()->with('mensaje', $respuesta['mensaje']);
        }
    }

    public function añadirImagen($id)
    {
        $respuesta = Galeria::añadirImagen($id, Input::all());

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        } else {
            return Redirect::back()->with('mensaje', $respuesta['mensaje']);
        }
    }

    public function eliminar($id)
    {
        $respuesta = Galeria::eliminar($id);

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        } else {
            return Redirect::to('administrador/galeria')->with('mensaje', $respuesta['mensaje']);
        }
    }

    public static function galerias(){

        $galerias=DB::table('galerias')->paginate(10);

        return View::make('modGaleria')->with(['galerias' => $galerias])->render();
    }

    public static function galeriasMostrar(){

        $galerias=DB::table('galerias')->paginate(10);

        return View::make('galeria')->with(['galerias' => $galerias])->render();
    }
    public static function imagenesMostrar($id){

        $galeria=Galeria::find($id);
        $imagenes=DB::table('imagenes')->where('idGaleria','=',$id)->where('nombre','!=','Cortex-Galeria-'.$id.'.jpg')->get();

        return View::make('imagenes')->with(['galeria' => $galeria, 'imagenes'=>$imagenes])->render();
    }
}