<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//INICIO
Route::get('/', function () {
    return View::make('inicio');
});

Route::get('inicio', function () {

    return View::make('inicio');

});

Route::get('ticket', function () {

    return View::make('ticket');

});

Route::get('conocenos', function () {

    return View::make('conocenos');

});

Route::get('contacto', function () {

    return View::make('contacto');

});

Route::get('imagenes', function () {

    return View::make('imagenes');

});

Route::get('galeria', 'GaleriaController@galeriasMostrar');
Route::get('galeria/imagenes/{id}', 'GaleriaController@imagenesMostrar');


Route::get('aviso-legal', function () {

    return View::make('aviso');

});


Route::post('olvidar', 'RemindersController@postRemind');
Route::get('password/reset/{token}', 'RemindersController@getReset');
Route::post('password/reset/{token}', 'RemindersController@postReset');


Route::get('loginRegistro', function () {

    return View::make('loginRegistro');

});


Route::post('cliente/registrar', 'ClienteController@registrar');


Route::get('login', function () {

    return View::make('loginRegistro');

});


Route::post('login', function () {

    if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')), true)) {

        return Redirect::back()->with('mensaje', Lang::get('notificaciones.sesionIniciada'));
    } else {
        return Redirect::back()->with('mensaje', Lang::get('notificaciones.errorLogin'));
    }

});


Route::filter('administrador', function () {
    if (!Administrador::esAdministrador())


    return Response::view('401', array(), 401);
});

Route::filter('cliente', function () {
    if (!Cliente::esCliente())

    return Response::view('401', array(), 401);
});


// Por ultimo crearemos un grupo con el filtro auth.
// Para todas estas rutas el usuario debe haber iniciado sesión.
// En caso de que se intente entrar y el usuario no haya iniciado session
// entonces será redirigido a la ruta login
Route::group(array('before' => 'auth'), function () {

    //Cerrar sesión
    Route::get('logout', function () {
        Auth::logout();
        return Redirect::to('/')
            ->with('mensaje', '¡Hasta pronto!');

    });

    Route::group(array('before' => 'cliente'), function () {

        //RUTAS DEL CLIENTE__________________________________________________________


        Route::get('cliente/tickets', function () {

            return View::make('tickets');

        });

        Route::get('cliente/servicios', 'ServicioController@servicios');

        Route::get('cliente/ofertas', 'OfertaController@ofertas');

        Route::get('cliente/productos', 'ProductoController@productos');


        //RUTAS PERFIL CLIENTE
        Route::post('perfil/actualizar/{id}', 'ClienteController@actualizarPerfil');
        Route::get('cliente/perfil', 'ClienteController@cliente');
        Route::post('cliente/cambiarPassword/{id}', 'ClienteController@cambiarPassword');

        //FIN RUTAS PERFIL CLIENTE


        //RUTAS CITAS

        Route::get('cliente/citas', 'CitaController@clienteMisCitas');

        Route::get('cliente/calendario', 'CitaController@citasEventosyServicios');


        Route::get('cliente/calendario2', function () {

            return View::make('calendario');

        });

        Route::post('cita/clienteCrear', 'CitaController@clienteCrear');
        Route::post('cita/clienteEditar/{id}', 'CitaController@clienteEditar');
        Route::get('cita/clienteEliminar/{id}', 'CitaController@clienteEliminar');
        Route::get('cita/clienteDetalles/{id}', 'CitaController@clienteDetalles');


    });//FIN FILTRO CLIENTE

    Route::group(array('before' => 'administrador'), function () {
        //RUTAS DEL ADMINISTRADOR___________________________________________________________



        Route::get('administrador/clientes', 'ClienteController@clientes');

        Route::post('administrador/actualizarFicha/{id}', 'ClienteController@actualizarFicha');

        Route::get('administrador/eventos', function () {

            return View::make('modCitas');

        });




        Route::get('administrador/servicios', 'ServicioController@servicios');

        Route::get('administrador/tickets', function () {

            return View::make('tickets');

        });


        //RUTAS PERFIL ADMIN
        Route::post('perfilAdmin/actualizar/{id}', 'AdministradorController@actualizarPerfil');
        Route::get('administrador/perfil', 'AdministradorController@administrador');
        Route::post('administrador/cambiarPassword/{id}', 'AdministradorController@cambiarPassword');
        //FIN RUTAS PERFIL ADMIN

        //RUTAS SERVICIOS

        Route::post('servicio/crear', 'ServicioController@crear');
        Route::post('servicio/editar/{id}', 'ServicioController@editar');
        Route::get('servicio/eliminar/{id}', 'ServicioController@eliminar');

        //FIN RUTAS SERVICIOS


        //RUTAS OFERTAS
        Route::get('administrador/ofertas', 'OfertaController@ofertas');

        Route::post('oferta/crear', 'OfertaController@crear');
        Route::post('oferta/editar/{id}', 'OfertaController@editar');
        Route::get('oferta/eliminar/{id}', 'OfertaController@eliminar');

        //FIN RUTAS OFERTAS

        ////RUTAS PRODUCTOS

        Route::get('administrador/disponibles', 'ProductoController@disponibles');
        Route::get('administrador/pendientes', 'ProductoController@pendientes');

        Route::post('producto/crear', 'ProductoController@crear');
        Route::post('producto/editar/{id}', 'ProductoController@editar');
        Route::get('producto/eliminar/{id}', 'ProductoController@eliminar');

        //FIN RUTAS PRODUCTOS


        //RUTAS GALERIAS
        Route::get('administrador/galeria', 'GaleriaController@galerias');

        Route::post('galeria/crear', 'GaleriaController@crear');
        Route::post('galeria/añadirImagen/{id}', 'GaleriaController@añadirImagen');
        Route::get('galeria/eliminar/{id}', 'GaleriaController@eliminar');

        //FIN RUTAS GALERIAS

        //RUTAS CITAS
        Route::get('administrador/calendario', 'CitaController@administrador');
        Route::get('administrador/citas', 'CitaController@citasPendientes');

        Route::post('cita/administradorCrear', 'CitaController@administradorCrear');
        Route::post('cita/administradorEditar/{id}', 'CitaController@administradorEditar');
        Route::get('cita/administradorEliminar/{id}', 'CitaController@administradorEliminar');
        Route::get('cita/administradorDetalles/{id}', 'CitaController@administradorDetalles');

        Route::get('productoTicket/eliminar/{id}', 'ProductosTicketController@eliminar');





        //FIN RUTAS CITAS

        //RUTAS EVENTOS

        Route::post('evento/crear', 'EventoController@crear');
        Route::get('evento/detalles/{id}', 'EventoController@administradorDetalles');

        //FIN RUTAS EVENTOS

    });


    App::missing(function ($exception) {
        $pathInfo = Request::url();
        $data = array(
            'url' => $pathInfo
        );

        return Response::view('404', array(), 404);
    });


});

