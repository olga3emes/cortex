<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 26/7/15
 * Time: 20:42
 */

class Evento extends Eloquent{


    protected $table = 'eventos';

    protected $fillable = array('id','tipo','fecha','horaInicio','horaFin');

}