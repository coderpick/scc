<?php

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'FrontendController@index');
Route::get('/service', 'FrontendController@service');
Route::get('/about',['as'=>'aobut', 'uses'=>'FrontendController@about']);
Route::get('/gallery', 'FrontendController@gallery');
Route::get('/service/{slug}',['as'=>'service.details','uses'=>'FrontendController@serviceDetails']);
Route::get('/contact',['as'=>'contact','uses'=>'ContactController@index']);
Route::post('/contact',['as' => 'contact.store', 'uses' => 'ContactController@store']);
Route::post('/newsletter',['as'=>'newsletter.store','uses'=>'NewsletterController@store']);



/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'authenticated'],function (){

    Route::get('/dashboard','AdminController@index');
    Route::get('/dashboard/contactlist',['as'=>'contact.show','uses'=>'AdminController@show']);

    Route::get('/dashboard/contactdetails/{id}',['as'=>'contact.contactdetails','uses'=>'AdminController@ViewContactInfo']);
    Route::delete('/dashboard/contactdetails/{id}',['as'=>'contact.delete','uses'=>'AdminController@destroy']);

    Route::get('/dashboard/newsletteremail',['as'=>'newsletteremail','uses'=>'AdminController@showNewsLetterEmail']);
    Route::delete('/dashboard/newsletteremail/{id}',['as'=>'email.delete','uses'=>'AdminController@deleteNewsLetterEmail']);

    Route::resource('dashboard/services','ServicesController');
    Route::resource('dashboard/gallery','GalleryController');
    Route::resource('dashboard/testimonial','TestimonialController');
    /* social links controller */
    Route::resource('dashboard/social','SocialController');
    /*Contact numbers controller */
    Route::resource('dashboard/mobile','ContactNumberController');
    /* slider route*/
    Route::get('/dashboard/slider',['as'=>'slider.index','uses'=>'SliderController@index']);
    Route::get('/dashboard/slider/create',"SliderController@create");
    Route::post('/dashboard/slider/store', ['as' => 'slider.store', 'uses' => 'SliderController@store']);
    Route::get('/dashboard/slider/edit/{id}', ['as' => 'slider.edit', 'uses' => 'SliderController@edit']);
    Route::post('/dashboard/slider/update/{id}',['as'=>'slider.update', 'uses'=>'SliderController@update']);
    Route::delete('/dashboard/slider/{id}',['as'=>'slider.destroy', 'uses'=>'SliderController@destroy']);

    /* Profile Controller*/
    Route::get('dashboard/profile',['as'=>'profile','uses'=>'ProfileController@index']);
    Route::get('dashboard/profile/{id}',['as'=>'profile.edit','uses'=>'ProfileController@edit']);
    Route::post('/dashboard/profile/update/{id}',['as'=>'profile.update', 'uses'=>'ProfileController@update']);

    /* about Controller*/
    Route::get('/dashboard/about',['as'=>'about','uses'=>'AboutController@index']);
    Route::post('/dashboard/about/{id}',['as'=>'about.update', 'uses'=>'AboutController@update']);

});



