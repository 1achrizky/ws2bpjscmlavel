<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Illuminate\Support\Str;
// use App\Http\Controllers\CmpxController;

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/key', function () use ($router) {
    return Str::random(32);
});





$router->get('/px', function () use ($router) {
    return curl_get('http://192.168.1.99/rscm/app/ajaxreq/db/m_daftarmandiri/laporan_pendaftaran_px_soft_by_bill/RJ/BL221117.0007/20');
});


// $router->get('/listpx/{type}', 'CmpxController@listPxByDateLokasi');
$router->get('/listpx/{tgl}', 'CmpxController@listPxByDateLokasi');
$router->get('/sendCurlGet/{tgl}', 'CmpxController@sendCurlGet');




$router->get('/wsheader', 'Wsbpjs2Controller@wsheader');
// $router->get('/peserta/{noka}/{tglSep}', 'Wsbpjs2Controller@peserta');
$router->get('/peserta/{noka}', 'Wsbpjs2Controller@peserta');

