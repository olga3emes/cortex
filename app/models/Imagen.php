<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 26/7/15
 * Time: 20:42
 */

class Imagen extends Eloquent{

    protected $table = 'imagenes';

    protected $fillable = array('id','nombre');


    //Inicio: Relaciones

    public function producto(){
        return $this->belongsTo('Producto', 'idProducto', 'id');
    }

    public function usuario(){
        return $this->hasOne('Usuario', 'idImagen', 'id');
    }

    public function galeria(){
        return $this->belongsTo('Galeria', 'idGaleria', 'id');
    }

    //Fin: Relaciones

}