<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 26/7/15
 * Time: 20:37
 */


class Cliente extends Eloquent{

    protected $table = 'clientes';
    protected $fillable = array('id','nombre','apellidos','telefono','descripcion', 'idUsuario');


    //Inicio: Relaciones

    public function usuario(){
        return $this->belongsTo('Usuario', 'idUsuario', 'id');
    }

    public function citas(){
        return $this->hasOne('Cita', 'idCliente', 'id');
    }
    //Fin: Relaciones


    public static function registrar($input){
        $respuesta = array();

        $reglas = array(
            'email' => array('required', 'email', 'max:100', 'unique:usuarios,email'),
            'username' => array('required', 'min:3', 'max:100', 'unique:usuarios,username'),
            'password' => array('required', 'min:8', 'max:20'),
            'nombre' => array('required', 'min:3', 'max:100'),
            'apellidos' => array('required', 'min:3', 'max:100'),
            'telefono' => array('required', 'min:9', 'max:12'),
        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = $validator;
            $respuesta['error'] = true;
        } else {

            $usuario = new Usuario;
            $usuario->email = $input['email'];
            $usuario->password = Hash::make($input['password']);
            $usuario->username = $input['username'];
            $usuario->save();

            $cliente = new Cliente;
            $cliente->idUsuario = $usuario->id;
            $cliente->nombre = $input['nombre'];
            $cliente->apellidos = $input['apellidos'];
            $cliente->telefono = $input['telefono'];
            $cliente->descripcion = '';
            $cliente->save();


            //Mensajes de exito
            $respuesta['mensaje'] = Lang::get('notificaciones.clienteCreado');
            $respuesta['error'] = false;
            $respuesta['data'] = $cliente;

            Auth::login($usuario);

        }

        return $respuesta;


    }

    public static function esCliente()
    {
        if (Auth::check()==true) {
            $id=Auth::user()->id;
            $cliente=DB::table('clientes')->where('idUsuario','=',$id)->get();
            if($cliente!=null){
                return true;
            }
        } else {
            return false;
        }
    }




}