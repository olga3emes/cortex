<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 26/7/15
 * Time: 20:43
 */

class Oferta extends Eloquent{

    protected $table = 'ofertas';

    protected $fillable = array('id','nombre','porcentaje','fechaFin');


    //Inicio: Relaciones

    public function cita(){
        return $this->belongsTo('Cita', 'idOferta', 'id');
    }
    //Fin: Relaciones

    public static function crear($input){

        $respuesta = array();

        $reglas = array(
            'porcentaje' => array('required', 'min:0', 'max:9999'),
            'nombre' => array('required', 'min:3', 'max:100'),
        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = $validator;
            $respuesta['error'] = true;

        } else {

            $input['fechaFin']=Tools::formatearFechaBD($input['fechaFin']);
            if($input['fechaFin']=='1970-01-01'){
                $input['fechaFin']='0000-00-00';
            }
            $oferta = new oferta($input);
            $oferta->save();

            $respuesta['mensaje'] = 'oferta creado';
            $respuesta['error'] = false;
            $respuesta['data'] = $oferta;

        }
        return $respuesta;
    }

    public static function editar($id,$input){

        $respuesta = array();

        $reglas = array(
            'porcentaje' => array('required', 'min:0', 'max:9999'),
            'nombre' => array('required', 'min:3', 'max:100'),

        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = $validator;
            $respuesta['error'] = true;
        } else {

            $input['fechaFin']=Tools::formatearFechaBD($input['fechaFin']);
            if($input['fechaFin']=='1970-01-01'){
                $input['fechaFin']='0000-00-00';
            }

            $oferta= oferta::find($id);
            $oferta->nombre=$input['nombre'];
            $oferta->porcentaje=$input['porcentaje'];
            $oferta->fechaFin=$input['fechaFin'];
            $oferta->save();

            $respuesta['mensaje'] = 'oferta editado';
            $respuesta['error'] = false;
            $respuesta['data'] = $oferta;
        }
        return $respuesta;
    }

    public static function eliminar($id){

        $respuesta = array();

        $oferta = oferta::find($id);
        $oferta->delete();

        //Mensajes de exito
        $respuesta['mensaje'] = 'oferta Eliminado';
        $respuesta['error'] = null;
        $respuesta['data'] = $oferta;

        return $respuesta;

    }

}