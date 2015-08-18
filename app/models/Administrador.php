<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 26/7/15
 * Time: 20:37
 */

class Administrador extends Eloquent{

    protected $table = 'administradores';

    protected $fillable = array('id','permisoCompleto','idUsuario');


    //Inicio: Relaciones

    public function usuario(){
        return $this->belongsTo('Usuario', 'idUsuario', 'id');
    }


    //Fin: Relaciones

}