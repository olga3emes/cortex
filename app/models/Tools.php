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
            $fecha = date("dd-mm-YY", strtotime($fecha));
        return $fecha;
    }

    public static function formatearFechaBD($fecha)
    {

        $fecha = date("Y-m-d", strtotime($fecha));
        return $fecha;
    }

    public static function formatearHora($hora)
    {
        return date("G:s", strtotime($hora));
    }


    public static function mailchimp($list_id, $email)
    {
        MailchimpWrapper::lists()->subscribe($list_id, array('email' => $email));

    }



}