<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 26/7/15
 * Time: 20:42
 */

class Evento extends Eloquent{


    protected $table = 'eventos';

    protected $fillable = array('id','tipo','fecha','horaInicio','horaFin','color','diaCompleto');


    //OPERACIONES

    public static function crear($input){

        $respuesta = array();

        $reglas = array(
            'fecha' => array('required'),
            'color' => array('required'),
            'nombre' => array('required'),

        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = $validator;
            $respuesta['error'] = true;

        } else {


            $evento = new Evento();

            //Fecha

            $input['fecha']=Tools::formatearFechaBD($input['fecha']);
            $evento->fecha= $input['fecha'];

            //Horas
            $evento->horaInicio=$input['horaInicio'];
            $evento->horaFin=$input['horaFin'];

            //color
            $evento->nombre=$input['nombre'];

            //Color

            $evento->color=$_POST['color'];

            //Aceptada por el Administrador

            if(isset($_REQUEST['diaCompleto'])) {
                $evento->diaCompleto = 1;
            }else{
                $evento->diaCompleto = 0;
            }

            $evento->save();


            $respuesta['mensaje'] = 'Evento añadido';
            $respuesta['error'] = false;
            $respuesta['data'] = $evento;

        }
        return $respuesta;
    }



    public static function editar($id,$input){

        $respuesta = array();

        $reglas = array(
            'fecha' => array('required'),
            'horaInicio' => array('required'),
            'horaFin' => array('required'),
            'color' => array('required'),
            'nombre' => array('required'),

        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = $validator;
            $respuesta['error'] = true;

        } else {


            $evento = Evento::find($id);

            //Fecha

            $input['fecha']=Tools::formatearFechaBD($input['fecha']);
            $evento->fecha= $input['fecha'];

            //Horas
            $evento->horaInicio=$input['horaInicio'];
            $evento->horaFin=$input['horaFin'];

            //color
            $evento->nombre=$input['nombre'];

            //Color

            $evento->color=$_POST['color'];

            //Aceptada por el Administrador

            if(isset($_REQUEST['diaCompleto'])) {
                $evento->diaCompleto = 1;
            }else{
                $evento->diaCompleto = 0;
            }

            $evento->save();


            $respuesta['mensaje'] = 'Evento modificado correctamente';
            $respuesta['error'] = false;
            $respuesta['data'] = $evento;

        }
        return $respuesta;
    }

    public static function eliminar($id){

        $respuesta = array();

        $evento = Evento::find($id);
        $evento->delete();

        //Mensajes de exito
        $respuesta['mensaje'] = 'Evento Eliminado';
        $respuesta['error'] = null;
        $respuesta['data'] = $evento;

        return $respuesta;

    }

}