<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 26/7/15
 * Time: 20:38
 */

class Cita extends Eloquent{


    protected $table = 'citas';
    protected $fillable = array('id','fecha','hora','horaInicio','horaFin','cliente','aceptada','comentario');


    //Inicio: Relaciones

    public function cliente(){
        return $this->belongsTo('Cliente', 'idCliente', 'id');
    }

    public function oferta(){
        return $this->belongsTo('Oferta', 'idOferta', 'id');
    }

    public function servicio(){
        return $this->belongsTo('Servicio', 'idServicio', 'id');
    }

    public function ticket(){
        return $this->belongsTo('Ticket', 'idTicket', 'id');
    }

    //Fin: Relaciones
}