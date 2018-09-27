<?php

Route::group(['namespace' => 'DtechTimezones\Timezones\App\Http\Controllers', 'prefix' => '/dtech-timezones/timezones'], function (){

    Route::get('/', 'TimezonesController@index')->name('timezones_path');

});