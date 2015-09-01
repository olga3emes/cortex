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
            'email' => array('email', 'max:100', 'unique:usuarios,email'),
            'username' => array('min:3', 'max:100','unique:usuarios,username'),
            'imagen' =>array ('image'),
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
            if($input['email']!="") {
                $usuario->email = $input['email'];
            }
            if($input['username']!=""){
                $usuario->username = $input['username'];
            }
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
            'password' => array('required', 'min:8', 'max:100','same:password2'),
            'password2' => array('required', 'min:8', 'max:100'),
        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = $validator;
            $respuesta['error'] = true;
        } else {

            $administrador = Administrador::find($id);
            $usuario = Usuario::find($administrador->idUsuario);



                $usuario->password = Hash::make($input['password']);
                $usuario->save();

                $respuesta['mensaje'] = 'Su contraseña ha sido cambiada';
                $respuesta['error'] = false;
                $respuesta['data'] = $administrador;


        }



        return $respuesta;


    }


}