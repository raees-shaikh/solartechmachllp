<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::domain(config('app.cms_domain'))->group(function () {

    require __DIR__ . '/auth.php';

    Route::get("/login", 'App\Http\Controllers\cms\LoginController@loginShow')->name('login');
    Route::post("/login", 'App\Http\Controllers\cms\LoginController@login')->name('cms.login.submit');

    Route::get('/forgot-password', 'App\Http\Controllers\cms\ForgotPasswordController@index')->name('cms.forgotPassword.index');


    // admin auth routes
    Route::group(['middleware' => 'auth:admin'], function () {

        Route::get('/change-password', 'App\Http\Controllers\cms\ChangePasswordController@changePassword')->name('cms.changePassword.index');
        Route::post('/change-password/{id}', 'App\Http\Controllers\cms\ChangePasswordController@passwordChange')->name('cms.password.submit');

        Route::get('/', 'App\Http\Controllers\cms\StatisticsController@index')->name("cms.statistics.index");

        Route::get('/logout', 'App\Http\Controllers\cms\LoginController@logout')->name("cms.logout");
        Route::get('/products', 'App\Http\Controllers\cms\ProductController@index')->name("cms.product.index");
        Route::get('/product/show/{id}', 'App\Http\Controllers\cms\ProductController@show')->name("cms.product.show");
        Route::get('/product/create', 'App\Http\Controllers\cms\ProductController@create')->name("cms.product.create");
        Route::post('/product/store', 'App\Http\Controllers\cms\ProductController@store')->name("cms.product.store");
        Route::get('/product/edit/{id}', 'App\Http\Controllers\cms\ProductController@edit')->name("cms.product.edit");
        Route::post('/product/update/{id}', 'App\Http\Controllers\cms\ProductController@update')->name("cms.product.update");
        Route::get('/product/delete/{id}', 'App\Http\Controllers\cms\ProductController@delete')->name("cms.product.delete");

        Route::get('/product/gallery/{id}', 'App\Http\Controllers\cms\ProductController@indexMedia')->name('cms.products.media.index');
        Route::get('/product/galleries/create/{id}', 'App\Http\Controllers\cms\ProductController@createMedia')->name('cms.products.media.create');
        Route::post('/product/galleries/store/{id}', 'App\Http\Controllers\cms\ProductController@storeMedia')->name('cms.products.media.store');
        Route::get('/product/galleries/edit/{product_id}/{media_id}', 'App\Http\Controllers\cms\ProductController@editMedia')->name('cms.products.media.edit');
        Route::post('/product/galleries/update/{product_id}/{media_id}', 'App\Http\Controllers\cms\ProductController@updateMedia')->name('cms.products.media.update');
        Route::get('/product/galleries/delete/{product_id}/{media_id}', 'App\Http\Controllers\cms\ProductController@deleteMedia')->name('cms.products.media.delete');

        // Categories Controller
        Route::get('/categories', 'App\Http\Controllers\cms\CategoriesController@index')->name('cms.categories.index');
        Route::get('/category/show/{id}', 'App\Http\Controllers\cms\CategoriesController@show')->name('cms.categories.show');
        Route::get('/category/create', 'App\Http\Controllers\cms\CategoriesController@create')->name("cms.categories.create");
        Route::post('/category/store', 'App\Http\Controllers\cms\CategoriesController@store')->name("cms.categories.store");
        Route::get('/category/delete/{id}', 'App\Http\Controllers\cms\CategoriesController@delete')->name("cms.categories.delete");
        Route::get('/category/edit/{id}', 'App\Http\Controllers\cms\CategoriesController@edit')->name("cms.categories.edit");
        Route::post('/category/update/{id}', 'App\Http\Controllers\cms\CategoriesController@update')->name("cms.categories.update");

        // Offer Controllers
        Route::get('/offers', 'App\Http\Controllers\cms\OfferController@index')->name('cms.offer.index');
        Route::get('/offer/show/{id}', 'App\Http\Controllers\cms\OfferController@show')->name('cms.offer.show');
        Route::get('/offer/create', 'App\Http\Controllers\cms\OfferController@create')->name('cms.offer.create');
        Route::post('/offer/store', 'App\Http\Controllers\cms\OfferController@store')->name("cms.offer.store");
        Route::get('/offer/edit/{id}', 'App\Http\Controllers\cms\OfferController@edit')->name('cms.offer.edit');
        Route::post('/offer/update/{id}', 'App\Http\Controllers\cms\OfferController@update')->name("cms.offer.update");
        Route::get('/offer/delete/{id}', 'App\Http\Controllers\cms\OfferController@delete')->name('cms.offer.delete');

        Route::get('/exhibitions/media/{id}', 'App\Http\Controllers\cms\ExhibitionController@indexMedia')->name('cms.exhibition.media.index');
        Route::get('/exhibition/media/create/{id}', 'App\Http\Controllers\cms\ExhibitionController@createMedia')->name('cms.exhibition.media.create');
        Route::post('/exhibition/media/store/{id}', 'App\Http\Controllers\cms\ExhibitionController@storeMedia')->name('cms.exhibition.media.store');
        Route::get('/exhibitions/media/edit/{exhibition_id}/{media_id}', 'App\Http\Controllers\cms\ExhibitionController@editMedia')->name('cms.exhibition.media.edit');
        Route::post('/exhibition/media/update/{exhibition_id}/{media_id}', 'App\Http\Controllers\cms\ExhibitionController@updateMedia')->name('cms.exhibition.media.update');
        Route::get('/exhibition/media/delete/{exhibition_id}/{media_id}', 'App\Http\Controllers\cms\ExhibitionController@deleteMedia')->name('cms.exhibition.media.delete');

        Route::get('/exhibitions', 'App\Http\Controllers\cms\ExhibitionController@index')->name('cms.exhibition.index');
        Route::get('/exhibition/show/{id}', 'App\Http\Controllers\cms\ExhibitionController@show')->name('cms.exhibition.show');
        Route::get('/exhibition/create', 'App\Http\Controllers\cms\ExhibitionController@create')->name('cms.exhibition.create');
        Route::post('/exhibition/store', 'App\Http\Controllers\cms\ExhibitionController@store')->name('cms.exhibition.store');
        Route::get('/exhibition/edit/{id}', 'App\Http\Controllers\cms\ExhibitionController@edit')->name('cms.exhibition.edit');
        Route::post('/exhibition/update/{id}', 'App\Http\Controllers\cms\ExhibitionController@update')->name('cms.exhibition.update');
        Route::get('/exhibition/delete/{id}', 'App\Http\Controllers\cms\ExhibitionController@delete')->name('cms.exhibition.delete');

        Route::get('/data', 'App\Http\Controllers\cms\DataController@index')->name('cms.data.index');
        Route::get('/data/create', 'App\Http\Controllers\cms\DataController@create')->name('cms.data.create');
        Route::post('/data/store', 'App\Http\Controllers\cms\DataController@store')->name('cms.data.store');
        Route::get('/data/edit/{id}', 'App\Http\Controllers\cms\DataController@edit')->name('cms.data.edit');
        Route::post('/data/update/{id}', 'App\Http\Controllers\cms\DataController@update')->name('cms.data.update');
        Route::get('/data/delete/{id}', 'App\Http\Controllers\cms\DataController@delete')->name('cms.data.delete');
    });
});
