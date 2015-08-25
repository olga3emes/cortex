<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 23/3/15
 * Time: 9:55
 */

// se debe indicar en donde esta la interfaz a implementar
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;
//Para el recordatorio de pass
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Usuario extends Eloquent implements UserInterface, RemindableInterface{

    use UserTrait, RemindableTrait;

    protected $table = 'usuarios';
    protected $fillable = array('id','username', 'email', 'password','idImagen','remember_token');

    //Inicio: Relaciones
    public function cliente(){
        return $this->hasOne('Cliente', 'idUsuario', 'id');
    }
    public function administrador(){
        return $this->hasOne('Administrador', 'idUsuario', 'id');
    }
    public function imagen(){
        return $this->belongsTo('Imagen', 'idImagen', 'id');
    }
    //Fin: Relaciones

    // este metodo se debe implementar por la interfaz
    public function getAuthIdentifier(){
        return $this->getKey();
    }

    //este metodo se debe implementar por la interfaz
    // y sirve para obtener la clave al momento de validar el inicio de sesión
    public function getAuthPassword(){
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }


    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }


    public function getRememberTokenName()
    {
        return 'remember_token';
    }



}