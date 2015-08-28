<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 26/7/15
 * Time: 20:42
 */

class ProductosTicket extends Eloquent{

    protected $table = 'productosTickets';

    protected $fillable = array('id','cantidad','precio','iva', 'idTicket','idOferta','idProducto');

    //Inicio: Relaciones

    public function producto(){
        return $this->hasMany('Producto', 'idProducto', 'id');
    }

    public function ticket(){
        return $this->hasOne('Ticket', 'idTicket', 'id');
    }

    public function oferta(){
        return $this->hasOne('Oferta', 'idOferta', 'id');
    }

    //Fin: Relaciones


}

