<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Myanmar verrsion route

Route::get('/', function () {
    return view('mm.welcome');
});

// Route::get('/enterprise', function () {
//     return view('enterprise');
// });

Route::get('features', function () {
    return view('mm.features');
});

Route::get('reclaim', function () {
    return view('mm.reclaim');
});

// Route::get('/fb-online-shop', function () {
//     return view('fb-online-shop');
// });

Route::get('ecommerce', function () {
    return view('mm.ecommerce');
});

Route::get('invoice', function () {
    return view('mm.invoice');
});


Route::get('social', function () {
    return view('mm.mmsocial');
});

Route::get('micro', function () {
    return view('mm.mmMicro');
});

Route::get('partnership', function () {
    return view('mm.partnership');
});

Route::get('pricing', function () {
    return view('mm.pricing');
});

Route::get('support', function () {
    return view('mm.support');
});

Route::get('help', function () {
    return view('help');
});

Route::get('guides-detail', function () {
    return view('guides-detail');
});

Route::get('contact', function () {
    return view('mm.contact');
});

Route::get('tnc', function () {
    return view('mm.tnc');
});

Route::get('micro', function () {
    return view('mm.micro');
});


// English Version Route

Route::get('eng', function () {
    return view('welcome');
});

Route::get('ecommerce/eng', function () {
    return view('ecommerce');
});

Route::get('social/eng', function () {
    return view('social-merchant');
});

Route::get('micro/eng', function () {
    return view('Microfinance');
});

Route::get('partnership/eng', function () {
    return view('partnership');
}); 

Route::get('features/eng', function () {
    return view('features');
});

Route::get('invoice/eng', function () {
    return view('invoice');
});

Route::get('reclaim/eng', function () {
    return view('reclaim');
});

Route::get('pricing/eng', function () {
    return view('pricing');
});

Route::get('support/eng', function () {
    return view('support');
});

Route::get('contact/eng', function () {
    return view('contact');
});

Route::get('tnc/eng', function () {
    return view('tnc');
});

Route::get('contact-app', function () {
    return view('contact-app');
});

Route::get('developers/eng', function () {
    return view('developers');
});

Route::get('stagingAPI-intro/eng', function () {
    return view('stagingAPI-intro');
});

Route::get('Get-token/eng', function () {
    return view('stagingAPI-gettoken');
});

Route::get('payAPI/eng', function () {
    return view('stagingAPI-payAPI');
});

Route::get('Merchant-callback/eng', function () {
    return view('stagingAPI-callback');
});

Route::get('production-intro/eng', function () {
    return view('production-intro');
});


Route::get('production-gettoken/eng', function () {
    return view('production-gettoken');
});


Route::get('production-payAPI/eng', function () {
    return view('production-payAPI');
});


Route::get('production-merchant-callback/eng', function () {
    return view('production-merchant-callback');
});

Route::get('woocommerce-intro/eng', function () {
    return view('woocommerce-intro');
});

Route::get('User-guide/eng', function () {
    return view('userguide');
});

Route::get('Workflow/eng', function () {
    return view('workflow');
});

Route::get('Payload/eng', function () {
    return view('payload');
});

Route::get('Payment/eng', function () {
    return view('payment');
});

Route::get('Encryption/eng', function () {
    return view('encryption');
});

Route::get('Status/eng', function () {
    return view('status');
});

Route::get('revoke/eng', function () {
    return view('revoke');
});



Route::get('newsroom', 'NewsController@index_mm');

Route::get('newsroom/eng', 'NewsController@index');

Route::get('news-detail/{id}', 'NewsController@show_mm');

Route::get('news-detail/{id}/eng', 'NewsController@show');

Route::get('company', 'AchievementsController@index_mm');

Route::get('company/eng', 'AchievementsController@index');

Route::get('achievement/{id}', 'AchievementsController@show_mm');

Route::get('achievement/{id}/eng', 'AchievementsController@show');

Route::get('career', 'JobsController@index_mm');

Route::get('career/eng', 'JobsController@index');

Route::get('jobs-detail/{id}', 'JobsController@show_mm');

Route::get('jobs-detail/{id}/eng', 'JobsController@show');

Route::post('contact-send', 'ContactSaleController@create');

Route::post('contact-mm-send', 'ContactSaleController@create_mm');

Route::post('jobsfiles/store', 'JobsFilesController@store');

Route::post('news-subscription', 'NewsSubscriptionController@create');

Route::resource('/', 'TestimonialsController');

Route::get('/', 'TestimonialsController@index_mm');

Route::resource('/eng', 'TestimonialsController');

Route::get('/eng', 'TestimonialsController@index');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});