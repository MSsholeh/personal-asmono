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
    Route::resource('articlecategory', 'Admin\ArticleCategoryController');
    Route::resource('article', 'Admin\ArticleController');
    Route::resource('about', 'Admin\AboutController');
    Route::resource('experiences', 'Admin\ExperiencesController');
    Route::resource('podcast', 'Admin\PodcastController');
    Route::resource('video', 'Admin\VideoController');
    Route::resource('photo', 'Admin\PhotoController');
    Route::resource('testimonial', 'Admin\TestimonialController');
    Route::resource('message', 'Admin\MessageController');
    Route::resource('users', 'Admin\UserController');
});

Route::group(['namespace' => 'Web'], function(){
    Route::get('/','SiteController@index')->name('home');
    Route::get('photo','SiteController@photo')->name('photo');
    Route::get('video','SiteController@video')->name('video');
    Route::get('video/{id}','SiteController@video_detail')->name('video.detail');
    Route::get('podcast','SiteController@podcast')->name('podcast');
    Route::get('podcast/{id}','SiteController@podcast_detail')->name('podcast.detail');
    Route::get('about','SiteController@about')->name('about');
    Route::get('article','SiteController@article')->name('article');
    Route::get('article/{id}','SiteController@article_detail')->name('article.detail');
    Route::get('gallery','SiteController@gallery')->name('gallery');
    Route::get('contact','SiteController@contact')->name('contact');
    Route::post('contact','SiteController@contactSubmit')->name('contact.submit');
});

