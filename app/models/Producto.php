<?php
/**
 * Created by PhpStorm.
 * User: olga
 * Date: 26/7/15
 * Time: 20:38
 */

class Producto extends Eloquent{

    protected $table = 'productos';

    protected $fillable = array('id','nombre','codigo','cantidadActual','cantidadMinima','descripcion','precio','iva','publicado');

    //Inicio: Relaciones

    public function imagen(){
        return $this->hasOne('Imagen', 'idProducto', 'id');
    }

    public function productosTickets(){
        return $this->belongsTo('ProductosTicket', 'idProducto', 'id');
    }

    //Fin: Relaciones


    public static function encontrarProducto($productoTicket){

        $producto=DB::table('productos')->where('id','=',$productoTicket->idProducto)->first();

        return $producto;
    }

    public static function crear($input)
    {
        $respuesta = array();

        $reglas = array(
            'nombre' => array('required', 'min:3', 'max:100'),
            'cantidadActual' => array('required', 'min:0', 'max:999'),
            'cantidadMinima' => array('required', 'min:0', 'max:999'),
            'precio' => array('required', 'min:0', 'max:99999'),
            
        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = $validator;
            $respuesta['error'] = true;
        } else {

            $producto = new Producto($input);
            $producto->iva= '21';
            $producto->publicado = 0;
            $producto->save();

            if (!is_null(Input::file('imagen'))) {
                $imagenarchivo = Input::file('imagen');

                $nombreImagen = 'Cortex-Producto-' . $producto->id . ".jpg";
                $directorio = public_path('img/producto');

                if (!file_exists($directorio)) {
                    mkdir($directorio, 0777, true);
                }
                $path = $directorio . '/' . $nombreImagen;

                Image::make($imagenarchivo->getRealPath())->save($path);
                //Image es una libreria, hay que instalarla con composer.phar.

                    $imagen = new Imagen();
                    $imagen->nombre = $nombreImagen;
                    $imagen->save();

                    $producto->idImagen=$imagen->id;
                    $producto->save();
                }
            }



            //Mensajes de exito
            $respuesta['mensaje'] = 'Producto añadido';
            $respuesta['error'] = false;
            $respuesta['data'] = $producto;



        return $respuesta;


    }

    public static function editar($id,$input)
    {
        $respuesta = array();

        $reglas = array(
            'nombre' => array('required', 'min:3', 'max:45'),
            'cantidadActual' => array('required', 'min:0', 'max:999'),
            'cantidadMinima' => array('required', 'min:0', 'max:999'),
            'precio' => array('required', 'min:0', 'max:99999'),

        );

        $validator = Validator::make($input, $reglas);

        if ($validator->fails()) {
            $respuesta['mensaje'] = $validator;
            $respuesta['error'] = true;
        } else {

            $producto = Producto::find($id);
            $producto->update($input);
            $producto->iva = '21';
            if(isset($_REQUEST['publicadoCheck'])) {
                $producto->publicado = 1;
            }else{
                $producto->publicado = 0;
            }
            $producto->save();

            if (!is_null(Input::file('imagen'))) {
                $imagenarchivo = Input::file('imagen');

                $nombreImagen = 'Cortex-Producto-' . $producto->id . ".jpg";
                $directorio = public_path('img/producto');

                if (!file_exists($directorio)) {
                    mkdir($directorio, 0777, true);
                }
                $path = $directorio . '/' . $nombreImagen;

                Image::make($imagenarchivo->getRealPath())->save($path);
                //Image es una libreria, hay que instalarla con composer.phar.

                if ($producto->idImagen == '') {
                    $imagen = new Imagen();
                    $imagen->nombre = $nombreImagen;
                    $imagen->save();

                    $producto->idImagen = $imagen->id;
                    $producto->save();
                }
            }

        }


        //Mensajes de exito
        $respuesta['mensaje'] = 'Producto añadido';
        $respuesta['error'] = false;
        $respuesta['data'] = $producto;



        return $respuesta;

    }

    public static function eliminar($id){

        $respuesta = array();

        $producto = Producto::find($id);

        $producto->delete();
        Imagen::eliminar($producto->idImagen);

        //Mensajes de exito
        $respuesta['mensaje'] = 'Producto Eliminado';
        $respuesta['error'] = null;
        $respuesta['data'] = $producto;

        return $respuesta;

    }



}