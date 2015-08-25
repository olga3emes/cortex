<?php

/**
 * Created by PhpStorm.
 * User: olga
 * Date: 26/7/15
 * Time: 20:37
 */
class Cliente extends Eloquent
{

    protected $table = 'clientes';
    protected $fillable = array('id', 'nombre', 'apellidos', 'telefono', 'descripcion', 'idUsuario');


    //Inicio: Relaciones

    public function usuario()
    {
        return $this->belongsTo('Usuario', 'idUsuario', 'id');
    }

    public function citas()
    {
        return $this->hasMany('Cita', 'idCliente', 'id');
    }

    //Fin: Relaciones


    public static function registrar($input)
    {
        $respuesta = array();

        $reglas = array(
            'email' => array('required', 'email', 'max:100', 'unique:usuarios,email'),
            'username' => array('required', 'min:3', 'max:100', 'unique:usuarios,username'),
            'password' => array('required', 'min:8', 'max:200'),
            'password2' => array('required', 'min:8', 'max:200'),
            'nombre' => array('required', 'min:3', 'max:100'),
            'apellidos' => array('required', 'min:3', 'max:100'),
            'telefono' => array('required', 'min:9', 'max:12'),
        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = $validator;
            $respuesta['error'] = true;
        } else {

            if ($input['password'] == $input['password2']) {
                $usuario = new Usuario;
                $usuario->email = $input['email'];
                $usuario->username = $input['username'];
                $usuario->password = Hash::make($input['password']);
                $usuario->save();

                $cliente = new Cliente;
                $cliente->idUsuario = $usuario->id;
                $cliente->nombre = $input['nombre'];
                $cliente->apellidos = $input['apellidos'];
                $cliente->telefono = $input['telefono'];
                $cliente->descripcion = '';
                $cliente->save();
                $usuario->save();

                $respuesta['mensaje'] = Lang::get('notificaciones.clienteCreado');
                $respuesta['error'] = false;
                $respuesta['data'] = $cliente;

                Auth::login($usuario);

            }else{
                $respuesta['mensaje'] = 'Las contraseñas introducidas no son iguales';
                $respuesta['error'] = true;

            }

        }

        return $respuesta;


    }


    public static function actualizarPerfil($id, $input)
    {
        $respuesta = array();

        $reglas = array(
            'email' => array('required', 'email', 'max:100'),
            'username' => array('required', 'min:3', 'max:100'),
            'nombre' => array('required', 'min:3', 'max:100'),
            'apellidos' => array('required', 'min:3', 'max:100'),
            'telefono' => array('required', 'min:9', 'max:12'),
        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = $validator;
            $respuesta['error'] = true;
        } else {

            $cliente = Cliente::find($id);
            $usuario = Usuario::find($cliente->idUsuario);

            if (!is_null(Input::file('imagen'))) {
                $imagenarchivo = Input::file('imagen');

                $nombreImagen = 'Cortex-' . $id . ".jpg";
                $directorio = public_path('img/perfil');

                if (!file_exists($directorio)) {
                    mkdir($directorio, 0777, true);
                }
                $path = $directorio . '/' . $nombreImagen;

                Image::make($imagenarchivo->getRealPath())->save($path);
                //Image es una libreria, hay que instalarla con composer.phar.
                if ($usuario->idImagen == '') {
                    $imagen = new Imagen();
                    $imagen->nombre = $nombreImagen;
                    $imagen->save();

                    $usuario->idImagen = $imagen->id;
                    $usuario->save();
                }
            }

            $usuario->email = $input['email'];
            $usuario->username = $input['username'];
            $usuario->save();

            $cliente->nombre = $input['nombre'];
            $cliente->apellidos = $input['apellidos'];
            $cliente->telefono = $input['telefono'];
            $cliente->save();

            //Mensajes de exito
            $respuesta['mensaje'] = 'Su perfil ha sido actualizado';
            $respuesta['error'] = false;
            $respuesta['data'] = $cliente;

        }

        return $respuesta;

    }

    public static function esCliente()
    {
        if (Auth::check() == true) {
            $id = Auth::user()->id;
            $cliente = DB::table('clientes')->where('idUsuario', '=', $id)->get();
            if ($cliente != null) {
                return true;
            }
        } else {
            return false;
        }
    }

    public static function actualizarFicha($id, $input)
    {
        $respuesta = array();

        $cliente = Cliente::find($id);
        $cliente->descripcion = $input['descripcion'];
        $cliente->save();


        //Mensajes de exito
        $respuesta['mensaje'] = Lang::get('La ficha del cliente se ha actualizado');
        $respuesta['error'] = false;
        $respuesta['data'] = $cliente;

        return $respuesta;

    }


    public static function cambiarPassword($id, $input)
    {
        $respuesta = array();

        $reglas = array(
            'password' => array('required', 'min:8', 'max:100'),
            'password2' => array('required', 'min:8', 'max:100'),
        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = 'La contraseña introducida
             no tiene el tamaño adecuado,éste debe estar entre 8 y 100 caracteres.';
            $respuesta['error'] = true;
        } else {

            $cliente = Cliente::find($id);
            $usuario = Usuario::find($cliente->idUsuario);

            if ($input['password'] == $input['password2']) {

                $usuario->password = Hash::make($input['password']);
                $usuario->save();

                $respuesta['mensaje'] = 'Su contraseña ha sido cambiada';
                $respuesta['error'] = false;
                $respuesta['data'] = $cliente;

            }else{
                $respuesta['mensaje'] = 'Las contraseñas introducidas no son iguales';
                $respuesta['error'] = true;
                $respuesta['data'] = $cliente;

            }
        }



        return $respuesta;


    }


}