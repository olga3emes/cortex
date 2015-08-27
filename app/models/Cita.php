<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 26/7/15
 * Time: 20:38
 */

class Cita extends Eloquent{


    protected $table = 'citas';
    protected $fillable = array('id','fecha','hora','horaInicio','horaFin','cliente','aceptada','comentario','idServicio','idCliente','idOferta','idTicket');


    //Inicio: Relaciones

    public function cliente(){
        return $this->belongsTo('Cliente', 'idCliente', 'id');
    }

    public function cita(){
        return $this->hasOne('Oferta', 'idOferta', 'id');
    }

    public function servicio(){
        return $this->hasOne('Servicio', 'idServicio', 'id');
    }

    public function ticket(){
        return $this->hasOne('Ticket', 'idTicket', 'id');
    }

    //Fin: Relaciones

    public static function clienteCrear($input){

        $respuesta = array();

        $reglas = array(
            'fecha' => array('required'),
            'comentario' => array('required'),

        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = $validator;
            $respuesta['error'] = true;

        } else {


            $cita = new Cita();

            $idUsuario=Auth::getUser()->id;
            $cliente=DB::table('clientes')->where('idUsuario','=',$idUsuario)->first();

            $cita->idCliente=$cliente->id;
            $cita->cliente= $cliente->nombre.' '.$cliente->apellidos;


            $cita->idServicio= $_POST['servicio'];

            $input['fecha']=Tools::formatearFechaBD($input['fecha']);
            $cita->fecha= $input['fecha'];
            $cita->comentario=$input['comentario'];
            $cita->aceptada= 0;

            $cita->save();


            $ticket= new Ticket();
            $ticket->fecha=$input['fecha'];
            $ticket->save();

            $cita->idTicket=$ticket->id;
            $cita->save();


            $respuesta['mensaje'] = 'Cita solicitada';
            $respuesta['error'] = false;
            $respuesta['data'] = $cita;

        }
        return $respuesta;
    }

    public static function administradorCrear($input){

        $respuesta = array();

        $reglas = array(
            'fecha' => array('required'),
            'servicio' => array('required'),
            'hora' => array('required'),
            'horaInicio' => array('required'),
            'horaFin' => array('required'),


        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = $validator;
            $respuesta['error'] = true;

        } else {


            $cita = new Cita();

            //Fecha

            $input['fecha']=Tools::formatearFechaBD($input['fecha']);
            $cita->fecha= $input['fecha'];

            //Hora
            $cita->horaInicio=$input['horaInicio'];
            $cita->horaFin=$input['horaFin'];


            //Cliente

            if(isset($_POST['clienteRegistrado'])and $_POST['clienteRegistrado']!= 0){
                $cita->idCliente=$_POST['clienteRegistrado'];
                $cliente=DB::table('clientes')->where('id','=',$cita->idCliente)->first();
                $cita->cliente=$cliente->nombre.' '.$cliente->apellidos;

            }else{
                $cita->cliente=$input['cliente'];
            }

            //Servicio

            $cita->idServicio= $_POST['servicio'];


            //Hora fijada

            $cita->hora=$input['hora'];

            //Comentario

            $cita->comentario=$input['comentario'];

            //Aceptada por el Administrador

            if(isset($_REQUEST['aceptada'])) {
                $cita->aceptada = 1;
            }else{
                $cita->aceptada = 0;
            }

            $cita->save();


            $ticket= new Ticket();
            $ticket->fecha=$input['fecha'];
            $ticket->save();

            $cita->idTicket=$ticket->id;
            $cita->save();


            $respuesta['mensaje'] = 'Cita solicitada';
            $respuesta['error'] = false;
            $respuesta['data'] = $cita;

        }
        return $respuesta;
    }





    /*public static function editar($id,$input){

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

            $cita= cita::find($id);
            $cita->nombre=$input['nombre'];
            $cita->porcentaje=$input['porcentaje'];
            $cita->fechaFin=$input['fechaFin'];
            $cita->save();

            $respuesta['mensaje'] = 'cita editado';
            $respuesta['error'] = false;
            $respuesta['data'] = $cita;
        }
        return $respuesta;
    }

    public static function eliminar($id){

        $respuesta = array();

        $cita = cita::find($id);
        $cita->delete();

        //Mensajes de exito
        $respuesta['mensaje'] = 'cita Eliminado';
        $respuesta['error'] = null;
        $respuesta['data'] = $cita;

        return $respuesta;

    }*/

}