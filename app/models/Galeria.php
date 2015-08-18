<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 26/7/15
 * Time: 20:42
 */

class Galeria extends Eloquent{

    protected $table = 'galerias';

    protected $fillable = array('id','nombre');

    //Inicio: Relaciones

    public function imagenes(){
        return $this->hasMany('Imagen', 'idGaleria', 'id');
    }

    //Fin: Relaciones

}