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

    public function oferta(){
        return $this->hasOne('Oferta', 'idOferta', 'id');
    }

    public function servicio(){
        return $this->hasOne('Servicio', 'idServicio', 'id');
    }

    public function ticket(){
        return $this->belongsTo('Ticket', 'idTicket', 'id');
    }

    //Fin: Relaciones
}