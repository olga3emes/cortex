<?php

/**
 * Created by PhpStorm.
 * User: olga
 * Date: 26/7/15
 * Time: 20:37
 */
class Administrador extends Eloquent
{

    protected $table = 'administradores';

    protected $fillable = array('id', 'permisoCompleto', 'idUsuario');


    //Inicio: Relaciones

    public function usuario()
    {
        return $this->belongsTo('Usuario', 'idUsuario', 'id');
    }

    public static function esAdministrador()
    {
        if (Auth::check() == true) {
            $id = Auth::user()->id;
            $admin = DB::table('administradores')->where('idUsuario', '=', $id)->first();
            if ($admin != null) {
                return true;
            }
        } else {
            return false;
        }
    }


    public static function actualizarPerfil($id, $input)
    {
        $respuesta = array();

        $reglas = array(
            'email' => array('required', 'email', 'max:100'),
            'username' => array('required', 'min:3', 'max:100'),
        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = $validator;
            $respuesta['error'] = true;
        } else {

            $administrador = Administrador::find($id);
            $usuario = Usuario::find($administrador->idUsuario);

            if (!is_null(Input::file('imagen'))) {
                $imagenarchivo = Input::file('imagen');

                $nombreImagen = 'Cortex-Administrador' . $id . ".jpg";
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


            //Mensajes de exito
            $respuesta['mensaje'] = 'Su perfil ha sido actualizado';
            $respuesta['error'] = false;
            $respuesta['data'] = $administrador;

        }

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

            $administrador = Administrador::find($id);
            $usuario = Usuario::find($administrador->idUsuario);

            if ($input['password'] == $input['password2']) {

                $usuario->password = Hash::make($input['password']);
                $usuario->save();

                $respuesta['mensaje'] = 'Su contraseña ha sido cambiada';
                $respuesta['error'] = false;
                $respuesta['data'] = $administrador;

            }else{

                $respuesta['mensaje'] = 'Las contraseñas introducidas no son iguales';
                $respuesta['error'] = true;
                $respuesta['data'] = $administrador;


            }
        }



        return $respuesta;


    }


}