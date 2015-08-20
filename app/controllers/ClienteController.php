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

        $ofertas=DB::table('clientes')->paginate(10);

        return View::make('clientes')->with(['clientes' => $ofertas])->render();
    }

    public static function cliente(){

        $usuario=Auth::getUser();

        $idUsuario=$usuario->id;

        $cliente=DB::table('clientes')->where('idUsuario','=',$idUsuario)->first();

        return View::make('perfil')->with(['cliente' => $cliente, 'usuario'=>$usuario])->render();
    }


}