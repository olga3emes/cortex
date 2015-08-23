<?php

/**
 * Created by PhpStorm.
 * User: olga
 * Date: 26/7/15
 * Time: 20:42
 */
class Galeria extends Eloquent
{

    protected $table = 'galerias';

    protected $fillable = array('id', 'nombre');

    //Inicio: Relaciones

    public function imagenes()
    {
        return $this->hasMany('Imagen', 'idGaleria', 'id');
    }

    //Fin: Relaciones

    public static function crear($input)
    {
        $respuesta = array();

        $reglas = array(
            'nombre' => array('required', 'min:3', 'max:200'),
            'imagen' => array('required'),
        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = $validator;
            $respuesta['error'] = true;
        } else {

            $galeria = new Galeria();
            $galeria->nombre = $input['nombre'];
            $galeria->save();

            $imagenarchivo = Input::file('imagen');
            $nombreImagen = 'Cortex-Galeria-' .$galeria->id. ".jpg";
            $directorio = public_path('img/portada');

            if (!file_exists($directorio)) {
                mkdir($directorio, 0777, true);
            }
            $path = $directorio . '/' . $nombreImagen;

            Image::make($imagenarchivo->getRealPath())->save($path);
            //Image es una libreria, hay que instalarla con composer.phar.

            $imagen = new Imagen();
            $imagen->nombre = $nombreImagen;
            $imagen->idGaleria = $galeria->id;
            $imagen->save();

            $respuesta['mensaje'] = 'Su perfil ha sido actualizado';
            $respuesta['error'] = false;
            $respuesta['data'] = $galeria;

        }



        return $respuesta;


    }


    public static function añadirImagen($id, $input)
    {
        $respuesta = array();

        $reglas = array(
            'imagen' => array('required'),
        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = $validator;
            $respuesta['error'] = true;
        } else {

            $galeria = Galeria::find($id);

            $imagenarchivo = Input::file('imagen');

            $random= Tools::random_string(10);

            $nombreImagen = 'Cortex-Imagen-'.$random . ".jpg";
            $directorio = public_path('img/galeria/'.$galeria->id);

            if (!file_exists($directorio)) {
                mkdir($directorio, 0777, true);
            }
            $path = $directorio . '/' . $nombreImagen;

            Image::make($imagenarchivo->getRealPath())->save($path);
            //Image es una libreria, hay que instalarla con composer.phar.

            $imagen = new Imagen();
            $imagen->nombre = $nombreImagen;
            $imagen->idGaleria = $galeria->id;
            $imagen->save();

            $respuesta['mensaje'] = 'Imagen añadida';
            $respuesta['error'] = false;
            $respuesta['data'] = $galeria;

        }

        return $respuesta;


    }

    public static function eliminar($id){

        $respuesta = array();

        $galeria = Galeria::find($id);

        $imagenes= DB::table('imagenes')->where('idGaleria','=',$id)->get();

        foreach($imagenes as $imagen){

           Imagen::eliminar($imagen->id);
        }

        $galeria->delete();

        //Mensajes de exito
        $respuesta['mensaje'] = 'Galeria eliminada';
        $respuesta['error'] = null;

        return $respuesta;

    }


}