<?php


Route::group(['namespace' => 'Kushal\Contact\Http\Controllers'], function () {
    Route::get('contact-us','ContactController@index')->name('contact.show');
    Route::post('contact-us','ContactController@sendEmail')->name('contact.send');
});
