<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/form', function () {
    return view('form');
});


Route::get('/usuarios', function () {
    return view('usuarios');
});


/*---------------------------------------
 * MODULO DE ADMINISTRACIÓN RUTAS
 * ---------------------------------------
 *
 *
 */

Route::get('/recepcionista', function () {
    return view('recepcionista');
});


Route::get('/admin', function () {
    return view('admin');
});

Route::get('/practicante', function () {
    return view('practicante');
});


Route::get('/servicioso', function () {
    return view('servicioso');
});


/*---------------------------------------
 * MODULO DE CONSULTORIO
 * ---------------------------------------
 *
 *
 */





Route::get('/consulta', function () {
    return view('consulta');
});

Route::get('/anticonceptivo', function () {
    return view('anticonceptivo');
});


Route::get('/busqueda', function () {
    return view('busqueda');
});



/*---------------------------------------
 * MODULO DE CONSULTORIO
 * ---------------------------------------
 *
 *
 */

Route::get('/ventas', function () {
    return view('ventas');
});

Route::get('/activos', function () {
    return view('activos');
});



/*---------------------------------------
 * MODULO DE CONSULTORIO
 * ---------------------------------------
 *
 *
 */

Route::get('/reporactivos', function () {
    return view('reporactivos');
});

Route::get('/reporconsultorio', function () {
    return view('reporconsultorio');
});



Route::get('/condones', function () {
    return view('condones');
});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
