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
            'password' => array('required', 'min:8', 'max:64', 'same:password2'),
            'password2' => array('required', 'min:8', 'max:64'),
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


        }

        return $respuesta;


    }


    public static function actualizarPerfil($id, $input)
    {
        $respuesta = array();


        $reglas = array(
            'email' => array('email', 'max:100', 'unique:usuarios,email'),
            'username' => array( 'min:3', 'max:100', 'unique:usuarios,username'),
            'nombre' => array('required', 'min:3', 'max:100'),
            'apellidos' => array('required', 'min:3', 'max:100'),
            'telefono' => array('required', 'min:9'),

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
            if ($input['email'] != "") {
                $usuario->email = $input['email'];
            }
            if ($input['username'] != "") {
                $usuario->username = $input['username'];
            }

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
        $respuesta['mensaje'] = 'La ficha del cliente se ha actualizado';
        $respuesta['error'] = false;
        $respuesta['data'] = $cliente;

        return $respuesta;

    }


    public static function cambiarPassword($id, $input)
    {
        $respuesta = array();

        $reglas = array(
            'password' => array('required', 'min:8', 'max:64', 'same:password2'),
            'password2' => array('required', 'min:8', 'max:64'),
        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = $validator;
            $respuesta['error'] = true;
        } else {

            $cliente = Cliente::find($id);
            $usuario = Usuario::find($cliente->idUsuario);

            $usuario->password = Hash::make($input['password']);
            $usuario->save();

            $respuesta['mensaje'] = 'Su contraseña ha sido cambiada';
            $respuesta['error'] = false;
            $respuesta['data'] = $cliente;

        }

        return $respuesta;


    }

    public static function eliminar($id)
    {

        $respuesta = array();

        $cliente = Cliente::find($id);
        $usuario = Usuario::find($cliente->idUsuario);
        $citas = DB::table('citas')->where('idCliente', '=', $id)->get();
        if (empty($citas)) {
            $usuario->delete();
            $cliente->delete();
            Imagen::eliminar($usuario->idImagen);
            //Mensajes de exito
            $respuesta['mensaje'] = 'Cliente Eliminado';
            $respuesta['error'] = null;
            $respuesta['data'] = $cliente;
        } else {
            $respuesta['mensaje'] = 'El cliente tiene citas en el sistema, bórrelas antes de darle de baja';
            $respuesta['error'] = null;

        }

        return $respuesta;

    }


}