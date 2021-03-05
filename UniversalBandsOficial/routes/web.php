<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', 'FuncionalidadesController@index')->name('ContenidosPrincipales.hola');
Route::get('/log', 'LogEntradaController@consultarLogEntradas')->name('Log');

Route::resource('categoria', 'CategoriaController');
Route::resource('evento', 'EventoController');
Route::resource('cliente', 'ClienteController');
Route::resource('log-entrada', 'LogEntradaController');
Route::resource('banda', 'BandaController');
Route::resource('evento-permitido', 'EventoPermitidoController');
Route::resource('proveedor', 'ProveedorController');
Route::resource('categoriap', 'CategoriapController');
Route::resource('producto', 'ProductoController');
Route::resource('metodo-pago', 'MetodoPagoController');
Route::resource('tarjeta', 'TarjetaController');
Route::resource('efectivo', 'EfectivoController');
Route::resource('envio', 'EnvioController');
Route::resource('pedido', 'PedidoController');
Route::resource('detalle-pedido', 'DetallePedidoController');

////////TIENDA EN LINEA
Route::get('/indexTienda', 'FuncionalidadesController@indexTienda')->name('tiendaEnLinea.index');
Route::get('/articulos', 'FuncionalidadesController@articulos')->name('tiendaEnLinea.articulos');
Route::get('/blog', 'FuncionalidadesController@blog')->name('tiendaEnLinea.blog');
Route::get('/contacto', 'FuncionalidadesController@contacto')->name('tiendaEnLinea.contacto');
Route::get('/nosotros', 'FuncionalidadesController@nosotros')->name('tiendaEnLinea.nosotros');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Compra de Entradas  compraConfirmada

Route::get('/eventosDisponibles', 'FuncionalidadesController@enviarDatosDeCompra')->name('compraDeEntradas.elegirEvento2');
Route::get('/compraEvento/{evento}', 'FuncionalidadesController@formularioDeCompra')->name('compraDeEntradas.compra');
Route::post('/compraEvento/{evento}', 'FuncionalidadesController@compraObtenida')->name('compraDeEntradas.compras');

Route::get('/compraExitosa/{id}/{id2}', 'FuncionalidadesController@compraConfirmada')->name('compraConfirmada');
 /////////////////////////////////////////////////////////////////////////////////////////
 /////////////Validacion de entradas
Route::get('/eventosDisponiblesDos', 'FuncionalidadesController@enviarDatosValidar')->name('pase');
Route::get('/introducirt/validar/{id}', 'FuncionalidadesController@validar');
Route::post('/introducirt/validar/{id}', 'FuncionalidadesController@analizar');

////////////////////////////////////////////////////////////////////////////////////////////
/////IOT
Route::get('iot', 'FuncionalidadesController@seccionIOT')->name('iot.seccionIOT');

//Excel

Route::get('/export/clientes', 'ClienteController@toExcel');
Route::get('/export/clientesV', 'ClienteController@toExcelView');
