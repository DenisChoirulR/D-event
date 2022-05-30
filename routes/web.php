<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(); 

//landing page
Route::get('/', 'LandingPage\HomeLandingController@index');
Route::get('/event', 'LandingPage\EventLandingController@index');
Route::get('/teams', 'LandingPage\EventLandingController@teams');
Route::get('/contact', 'LandingPage\EventLandingController@contact');
Route::get('/detail-event/{id}', 'LandingPage\EventLandingController@detail_event')->middleware('guestcheck');
Route::post('/booking-store/', 'LandingPage\EventLandingController@booking_store')->middleware('guestcheck');
Route::get('/booking/{id}', 'LandingPage\EventLandingController@booking')->middleware('guestcheck');
Route::post('/upload/', 'LandingPage\EventLandingController@upload')->middleware('guestcheck');
Route::get('/ticket-print/{id}', 'LandingPage\EventLandingController@ticket_print')->middleware('guestcheck');

//organization dashboard
Route::get('/home', 'HomeController@index')->name('home')->middleware('organizationcheck');
Route::get('/event-list', 'EventController@index')->middleware('organizationcheck');
Route::get('/event-create', 'EventController@create')->middleware('organizationcheck');
Route::post('/event-store', 'EventController@store')->middleware('organizationcheck');
Route::get('/event-edit', 'EventController@edit')->middleware('organizationcheck');
Route::get('/event-show/{id}', 'EventController@show')->middleware('organizationcheck');
Route::get('/booking-detail/{id}', 'EventController@booking_detail')->middleware('organizationcheck');
Route::get('/booking-accept/{id}', 'EventController@booking_accept')->middleware('organizationcheck');
Route::get('/booking-reject/{id}', 'EventController@booking_reject')->middleware('organizationcheck');

//admin dashboard
Route::get('/admin-home', 'AdminController@index')->name('home')->middleware('admincheck');
Route::get('/admin-guest', 'AdminController@guest')->middleware('admincheck');
Route::get('/admin-guest-delete/{id}', 'AdminController@guest_delete')->middleware('admincheck');
Route::get('/admin-organization', 'AdminController@organization')->middleware('admincheck');
Route::get('/admin-organization-delete/{id}', 'AdminController@organization_delete')->middleware('admincheck');
Route::get('/admin-event', 'AdminController@event')->middleware('admincheck');
Route::get('/admin-event-delete/{id}', 'AdminController@event_delete')->middleware('admincheck');
Route::get('/admin-event-approve/{id}', 'AdminController@event_approve')->middleware('admincheck');
Route::get('/admin-event-reject/{id}', 'AdminController@event_reject')->middleware('admincheck');
Route::get('/admin-category', 'AdminController@category')->middleware('admincheck');
Route::get('/admin-category-create', 'AdminController@category_create')->middleware('admincheck');
Route::post('/admin-category-store', 'AdminController@category_store')->middleware('admincheck');
Route::get('/admin-category-delete/{id}', 'AdminController@category_delete')->middleware('admincheck');

Route::get('/register-option', 'RegistrasiController@register_option');