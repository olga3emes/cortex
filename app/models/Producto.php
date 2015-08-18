<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 26/7/15
 * Time: 20:38
 */

class Producto extends Eloquent{

    protected $table = 'productos';

    protected $fillable = array('id','codigo','cantidadActual','cantidadMinima','descripcion','precio','iva');

    //Inicio: Relaciones

    public function imagen(){
        return $this->hasOne('Imagen', 'idProducto', 'id');
    }

    public function productosTickets(){
        return $this->hasMany('ProductosTicket', 'idProducto', 'id');
    }

    //Fin: Relaciones

}