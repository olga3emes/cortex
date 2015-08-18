<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 26/7/15
 * Time: 20:38
 */

class Ticket extends Eloquent{

    protected $table = 'tickets';

    protected $fillable = array('id','fecha','total','iva');

    //Inicio: Relaciones

    public function cita(){
        return $this->hasOne('Cita', 'idTicket', 'id');
    }

    public function productosTickets(){
        return $this->belongsTo('ProductosTicket', 'idTicket', 'id');
    }


    //Fin: Relaciones

}