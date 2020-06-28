<?php

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:10']], function () {
    Route::get('/', 'DashboardController@index')->name('dash');
    Route::resource('generalsetting', 'Admin\GeneralSettingController');
    Route::resource('podcast', 'Admin\PodcastController');
    Route::resource('video', 'Admin\VideoController');
    Route::resource('photo', 'Admin\PhotoController');
    Route::resource('testimonial', 'Admin\TestimonialController');
    Route::resource('message', 'Admin\MessageController');
    Route::resource('users', 'Admin\UserController');

//   Route::resource('about', 'Admin\AboutController');
//    Route::resource('sliders', 'Admin\SliderController');
//    Route::resource('members', 'Admin\MemberController');
//    Route::resource('gallery', 'Admin\GalleryController');
//    Route::resource('gallerycategory', 'Admin\GalleryCategoryController');
//    Route::resource('portfolio', 'Admin\PortfolioController');
//    Route::resource('portfoliocategory', 'Admin\PortfolioCategoryController');
//    Route::resource('companyprofile', 'Admin\CompanyProfileController')->only(['index', 'update']);
//    Route::resource('info', 'Admin\InfoController');
});

Route::group(['namespace' => 'Web'], function(){
    Route::get('/','SiteController@index')->name('home');
    Route::get('projects','SiteController@projects')->name('projects');
    Route::get('about-us','SiteController@aboutUs')->name('aboutUs');
    Route::get('gallery','SiteController@gallery')->name('gallery');
    Route::get('contact-us','SiteController@contactUs')->name('contactUs');
    Route::post('contact-us','SiteController@contactUsSubmit')->name('contactUs.submit');
});

