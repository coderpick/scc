<?php

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'FrontendController@index');
Route::get('/service', 'FrontendController@service');
Route::get('/gallary', 'FrontendController@gallary');
Route::get('/serviceDetails/{id}', 'FrontendController@serviceDetails');


Route::post('/contact',['as' => 'contact.store', 'uses' => 'ContactController@store']);


/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
*/
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'authenticated'],function (){

    Route::get('/dashboard','AdminController@index');
    Route::get('/dashboard/contactlist',['as'=>'contact.show','uses'=>'AdminController@show']);
    Route::get('/dashboard/contactdetails/{id}',['as'=>'contact.contactdetails','uses'=>'AdminController@ViewContactInfo']);
    Route::delete('/dashboard/contactdetails/{id}',['as'=>'contact.delete','uses'=>'AdminController@destroy']);
    Route::resource('dashboard/services','ServicesController');
    Route::resource('dashboard/gallary','GallaryController');
    Route::resource('dashboard/testimonial','TestimonialController');

    /* slider route*/
    Route::get('/dashboard/slider',['as'=>'slider.index','uses'=>'SliderController@index']);
    Route::get('/dashboard/slider/create',"SliderController@create");
    Route::post('/dashboard/slider/store', ['as' => 'slider.store', 'uses' => 'SliderController@store']);
    Route::get('/dashboard/slider/edit/{id}', ['as' => 'slider.edit', 'uses' => 'SliderController@edit']);
    Route::post('/dashboard/slider/update/{id}',['as'=>'slider.update', 'uses'=>'SliderController@update']);
    Route::delete('/dashboard/slider/{id}',['as'=>'slider.destroy', 'uses'=>'SliderController@destroy']);

});



