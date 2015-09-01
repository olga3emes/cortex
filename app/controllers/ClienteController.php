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


    public static function clientes(){

        $clientes=DB::table('clientes')->paginate(10);

        return View::make('clientes')->with(['clientes' => $clientes])->render();

    }

    public static function cliente(){

        $usuario=Auth::getUser();

        $idUsuario=$usuario->id;

        $idImagen=$usuario->idImagen;

        $imagen=DB::table('imagenes')->where('id','=',$idImagen)->first();

        $cliente = DB::table('clientes')->where('idUsuario', '=', $idUsuario)->first();

        if($imagen!=null) {

            return View::make('perfil')->with(['cliente' => $cliente, 'usuario' => $usuario, 'imagen' => $imagen])->render();
        }else{
            return View::make('perfil')->with(['cliente' => $cliente, 'usuario' => $usuario])->render();
        }
    }

    public function actualizarPerfil($id){
        $respuesta =Cliente::actualizarPerfil($id,Input::all());

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        } else {
            return Redirect::to('cliente/perfil')->with('mensaje', ($respuesta['mensaje']));
        }
    }

    public function actualizarFicha($id){
        $respuesta =Cliente::actualizarFicha($id,Input::all());

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        } else {
            return Redirect::back()->with('mensaje', ($respuesta['mensaje']));
        }
    }

    public function cambiarPassword($id){
        $respuesta = Cliente::cambiarPassword($id,Input::all());

        if ($respuesta['error'] == true) {
            return Redirect::back()->withErrors($respuesta['mensaje'])->withInput();
        } else {
            return Redirect::back()->with('mensaje', ($respuesta['mensaje']));
        }
    }

    public function eliminar($id){


        $respuesta =Cliente::eliminar($id);

        if ($respuesta['error'] == true) {
            return Redirect::back()->with('mensaje',$respuesta['mensaje']);
        }
        else {
            return Redirect::to('administrador/clientes')->with('mensaje', $respuesta['mensaje']);
        }
    }

}