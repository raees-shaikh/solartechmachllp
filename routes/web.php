<?php

use Illuminate\Support\Facades\Route;

Route::domain(config('app.web_domain'))->group(function () {

    Route::get('/', 'App\Http\Controllers\frontend\HomeController@index')->name('frontend.index');

    Route::get('/business-process', function () {
        return view('frontend.business-process');
    });

    Route::get('/products', 'App\Http\Controllers\frontend\ProductController@index')->name("frontend.product.index");
    Route::get('/product/{slug}', 'App\Http\Controllers\frontend\ProductController@show')->name("frontend.product.show");

    Route::get('/what-we-offer', 'App\Http\Controllers\frontend\OfferController@index')->name('latest-offers');
    Route::get('/what-we-offer/{category}', 'App\Http\Controllers\frontend\OfferController@offerIndex')->name('offer-index');
    Route::get('/what-we-offer/{category}/{offer}', 'App\Http\Controllers\frontend\OfferController@offerShow')->name('offer-show');

    Route::get('/exhibitions', 'App\Http\Controllers\frontend\ExhibitionController@index')->name('exhibitions');
    Route::get('/exhibitions/{exhibitionSlug}', 'App\Http\Controllers\frontend\ExhibitionController@show')->name('show');

    Route::get('/about-us', function () {
        return view('frontend.company.about-us');
    });

    Route::get('/contact-us', function () {
        return view('frontend.contact-us');
    });

    Route::post('contact', 'App\Http\Controllers\frontend\ContactUsController@submit')->name('frontend.contact.submit');
});
