<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 14/8/15
 * Time: 13:42
 */

class AdministradorController extends BaseController{


    public static function administrador(){

        $usuario=Auth::getUser();

        $idUsuario=$usuario->id;

        $idImagen=$usuario->idImagen;

        $imagen=DB::table('imagenes')->where('id','=',$idImagen)->first();

        $administrador = DB::table('administradores')->where('idUsuario', '=', $idUsuario)->first();

        if($imagen!=null) {

            return View::make('perfil')->with(['administrador' => $administrador, 'usuario' => $usuario, 'imagen' => $imagen])->render();
        }else{
            return View::make('perfil')->with(['administrador' => $administrador, 'usuario' => $usuario])->render();
        }
    }

    public function actualizarPerfil($id){
        $respuesta = Administrador::actualizarPerfil($id,Input::all());

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        } else {
            return Redirect::to('administrador/perfil')->with('mensaje', ($respuesta['mensaje']));
        }
    }

    public function cambiarPassword($id){
        $respuesta = Administrador::cambiarPassword($id,Input::all());

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        } else {
            return Redirect::to('administrador/perfil')->with('mensaje', ($respuesta['mensaje']));
        }
    }



}