<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 26/7/15
 * Time: 20:39
 */

class Servicio extends Eloquent{

    protected $table = 'servicios';

    protected $fillable = array('id','nombre','precio','iva');

    //Inicio: Relaciones

    public function cita(){
        return $this->hasOne('Cita', 'idServicio', 'id');
    }
    //Fin: Relaciones
}