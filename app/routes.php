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

Route::get('conocenos', function () {

    return View::make('conocenos');

});

Route::get('contacto', function () {

    return View::make('contacto');

});

Route::get('galeria', function () {

    return View::make('galeria');

});

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


// Por ultimo crearemos un grupo con el filtro auth.
// Para todas estas rutas el usuario debe haber iniciado sesión.
// En caso de que se intente entrar y el usuario haya iniciado session
// entonces será redirigido a la ruta login
Route::group(array('before' => 'auth'), function () {

    //Cerrar sesión
    Route::get('logout', function () {
        Auth::logout();
        return Redirect::to('/')
            ->with('mensaje', Lang::get('notificaciones.sesionCerrada'));

    });

//RUTAS DEL ADMINISTRADOR


    Route::get('administrador/calendario', function () {

        return View::make('calendario');

    });

    Route::get('administrador/clientes', function () {

        return View::make('clientes');

    });

    Route::get('administrador/disponibles', function () {

        return View::make('disponibles');

    });

    Route::get('administrador/eventos', function () {

        return View::make('eventos');

    });

    Route::get('administrador/galeria', function () {

        return View::make('modGaleria');

    });
    Route::get('administrador/ofertas', function () {

        return View::make('ofertas');

    });

    Route::get('administrador/pendientes', function () {

        return View::make('pendientes');

    });

    Route::get('administrador/perfil', function () {

        return View::make('perfil');

    });


    Route::get('administrador/servicios', function () {

        return View::make('servicios');

    });

    Route::get('administrador/tickets', function () {

        return View::make('tickets');

    });
    //}


//CLIENTE


    Route::get('cliente/calendario', function () {

        return View::make('calendario');

    });

    Route::get('cliente/perfil', 'ClienteController@cliente');

    Route::get('cliente/tickets', function () {

        return View::make('tickets');

    });

    Route::get('cliente/servicios', 'ServicioController@servicios');


    Route::get('cliente/ofertas', 'OfertaController@ofertas');

    Route::get('cliente/citas', function () {

        return View::make('citasPendientes');

    });

    //FIN RUTAS CLIENTE

    //RUTAS SERVICIOS

    Route::post('servicio/crear', 'ServicioController@crear');
    Route::post('servicio/editar/{id}', 'ServicioController@editar');
    Route::get('servicio/eliminar/{id}', 'ServicioController@eliminar');

    //FIN RUTAS SERVICIOS


    //RUTAS OFERTAS

    Route::post('oferta/crear', 'OfertaController@crear');
    Route::post('oferta/editar/{id}', 'OfertaController@editar');
    Route::get('oferta/eliminar/{id}', 'OfertaController@eliminar');

    //FIN RUTAS OFERTAS

    //RUTAS PERFIL
    Route::post('perfil/actualizar/{id}', 'ClienteController@actualizarPerfil');

    //FIN RUTAS PERFIL


    App::missing(function ($exception) {
        $pathInfo = Request::url();
        $data = array(
            'url' => $pathInfo
        );

        return Response::view('404', array(), 404);

    });

});

