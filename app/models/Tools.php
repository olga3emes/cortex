<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 20/8/15
 * Time: 9:09
 */

class Tools {



    public static function formatearFecha($fecha)
    {
        if ($fecha == '0000-00-00')
            $fecha = 'Sin determinar';
        else
            $fecha = date("m-d-Y", strtotime($fecha));
        return $fecha;
    }

    public static function formatearFechaVacia($fecha)
    {
        if ($fecha == '0000-00-00')
            $fecha = '';
        else
            $fecha = date("d-m-Y", strtotime($fecha));
        return $fecha;
    }

    public static function formatearFechaBD($fecha)
    {

        $fecha = date("Y-m-d", strtotime($fecha));
        return $fecha;
    }

    public static function formatearHora($hora)
    {
        return date("G:m", strtotime($hora));
    }

    public static function year($fecha)
    {
        return date("Y", strtotime($fecha));
    }

    public static function month($fecha)
    {
        return date("m", strtotime($fecha));
    }

    public static function day($fecha)
    {
        return date("d", strtotime($fecha));
    }

    public static function hour($hora)
    {
        return date("H", strtotime($hora));
    }

    public static function min($hora)
    {
        return date("i", strtotime($hora));
    }


    public static function mailchimp($list_id, $email)
    {
        MailchimpWrapper::lists()->subscribe($list_id, array('email' => $email));

    }

    public static function random_string($length) {
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'));

        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }

        return $key;
    }

    public static function precioConIva($precio,$iva) {
        $porcentaje=(100+$iva)/100;
        $precioTotal= $precio*$porcentaje;
        return $precioTotal;
    }



}