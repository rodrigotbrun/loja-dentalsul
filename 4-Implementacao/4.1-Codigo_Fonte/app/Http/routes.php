<?php


// TODO - Temporário
Route::get('/', function(){
    return redirect()->route('admin.dashboard.home');
});


/*
    _       _           _
   / \   __| |_ __ ___ (_)_ __
  / _ \ / _` | '_ ` _ \| | '_ \
 / ___ \ (_| | | | | | | | | | |
/_/   \_\__,_|_| |_| |_|_|_| |_|

 */

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
    'middleware' => [] // TODO
], function () {
    require_once __DIR__ . "/admin-routes.php";
});

/*
 ____  _
/ ___|| |_ ___  _ __ ___
\___ \| __/ _ \| '__/ _ \
 ___) | || (_) | | |  __/
|____/ \__\___/|_|  \___|

 */

Route::group([
    'as' => 'store.',
    'namespace' => 'Store'
], function () {
    require_once __DIR__ . "/store-routes.php";
});

/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1'], function () {
        require config('infyom.laravel_generator.path.api_routes');
    });
});
