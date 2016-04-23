<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Refugee;

Route::get('/', 'MainController@sw_main');

Route::get('/refugee', function(){
    $refugee = Refugee::find(1);
    $image = imagecreatefromstring($refugee->situation);
    header('Content-Type: image/jpeg');
    return imagejpeg($image);
});

Route::post('/refugee', 'MainController@save');

Route::get('/debug', function(){
    $refugee = Refugee::find(1);
    return var_dump($refugee->lat.":".$refugee->lng);
});
