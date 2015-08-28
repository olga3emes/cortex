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
        return $this->belongsTo('Cita', 'idTicket', 'id');
    }

    public function productosTickets(){
        return $this->belongsTo('ProductosTicket', 'idTicket', 'id');
    }


    //Fin: Relaciones

    public static function eliminar($id){

        $respuesta = array();

        $ticket = Ticket::find($id);
        $ticket->delete();

        //Mensajes de exito
        $respuesta['mensaje'] = 'Ticket Eliminado';
        $respuesta['error'] = null;
        $respuesta['data'] = $ticket;

        return $respuesta;

    }



}