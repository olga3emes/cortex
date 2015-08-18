<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 26/7/15
 * Time: 20:42
 */

class ProductosTicket extends Eloquent{

    protected $table = 'productosTickets';

    protected $fillable = array('id','cantidad','precio','iva');

    //Inicio: Relaciones

    public function producto(){
        return $this->belongsTo('Producto', 'idProducto', 'id');
    }

    public function ticket(){
        return $this->hasOne('Ticket', 'idTicket', 'id');
    }

    //Fin: Relaciones


}

