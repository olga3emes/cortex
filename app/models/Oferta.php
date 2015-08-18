<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 26/7/15
 * Time: 20:43
 */

class Oferta extends Eloquent{

    protected $table = 'ofertas';

    protected $fillable = array('id','nombre','porcentaje','fechaFin');


    //Inicio: Relaciones

    public function cita(){
        return $this->hasOne('Cita', 'idOferta', 'id');
    }
    //Fin: Relaciones


}