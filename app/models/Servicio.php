<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 26/7/15
 * Time: 20:39
 */

class Servicio extends Eloquent
{

    protected $table = 'servicios';

    protected $fillable = array('id', 'nombre', 'precio', 'iva');

    //Inicio: Relaciones


    public function cita(){
        return $this->belongsTo('Cita', 'idServicio', 'id');
    }
    //Fin: Relaciones

    public static function getServicio($id){

       return $servicio=Servicio::find($id);
    }




    public static function crear($input){

        $respuesta = array();

        $reglas = array(
            'precio' => array('required', 'min:0', 'max:9999'),
            'nombre' => array('required', 'min:3', 'max:100'),


        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = $validator;
            $respuesta['error'] = true;

        } else {
            $servicio = new Servicio($input);
            $servicio->iva='21';
            $servicio->save();

            $respuesta['mensaje'] = 'Servicio creado';
            $respuesta['error'] = false;
            $respuesta['data'] = $servicio;

        }
        return $respuesta;
    }

    public static function editar($id,$input){

        $respuesta = array();

        $reglas = array(
            'precio' => array('required', 'min:0', 'max:9999'),
            'nombre' => array('required', 'min:3', 'max:20'),

        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = $validator;
            $respuesta['error'] = true;
        } else {
            $servicio= Servicio::find($id);
            $servicio->nombre=$input['nombre'];
            $servicio->precio=$input['precio'];
            $servicio->iva='21';
            $servicio->save();

            $respuesta['mensaje'] = 'Servicio editado';
            $respuesta['error'] = false;
            $respuesta['data'] = $servicio;
        }
        return $respuesta;
    }

    public static function eliminar($id){

        $respuesta = array();

        $servicio = Servicio::find($id);
        $citas= DB::table('citas')->where('idServicio','=',$id)->get();
        if(empty($citas)) {
            $servicio->delete();

            //Mensajes de exito
            $respuesta['mensaje'] = 'Servicio Eliminado';
            $respuesta['error'] = null;
            $respuesta['data'] = $servicio;
        }else{
            $respuesta['mensaje'] = 'Este servicio no podrá borrarse mientras esté asociado a citas en el sistema.';
            $respuesta['error'] = null;
            $respuesta['data'] = $servicio;
        }
        return $respuesta;

    }




}