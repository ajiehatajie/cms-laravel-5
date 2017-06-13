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
Route::group(['middleware' => ['isVerified']], function () {

	Route::get('/home', 'HomeController@index')->name('home');

});


Route::get('admin', 'Admin\AdminController@index');
Route::get('admin/give-role-permissions', 'Admin\AdminController@getGiveRolePermissions');
Route::post('admin/give-role-permissions', 'Admin\AdminController@postGiveRolePermissions');
Route::resource('admin/roles', 'Admin\RolesController');
Route::resource('admin/permissions', 'Admin\PermissionsController');
Route::resource('admin/users', 'Admin\UsersController');
Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);

Route::get('email-verification/error', 'Auth\RegisterController@getVerificationError')->name('email-verification.error');
Route::get('email-verification/check/{token}', 'Auth\RegisterController@getVerification')->name('email-verification.check');


//Route::get('/', 'Admin\AdminController@index');
Route::resource('admin/category', 'Admin\\CategoryController');
Route::resource('admin/tag', 'Admin\\TagController');
Route::resource('admin/article', 'Admin\\ArticleController');

Route::get('admin/campaign', 'Admin\\CampaignController@index');
Route::post('admin/campaign', 'Admin\\CampaignController@postCampaign');




Route::get('/admin/users/{id}/upload','Admin\UsersController@upload');
Route::post('/upload/image','Admin\UsersController@postUpload');

Route::get('/user/subscribe','SubscriberController@index');

Route::post('/user/subscribe','SubscriberController@subscribe');

Route::get('/user/unsubscribe','SubscriberController@getunsubscribe');
Route::post('/user/unsubscribe','SubscriberController@unsubscribe');
Route::get('/sendmail/subscribe','SubscriberController@sendemail');

Route::get('manageMailChimp', 'MailChimpController@manageMailChimp');
Route::post('subscribe',['as'=>'subscribe','uses'=>'SubscriberController@subscribe']);
Route::post('unsubscribe',['as'=>'unsubscribe','uses'=>'SubscriberController@unsubscribe']);

Route::post('sendCompaign',['as'=>'sendCompaign','uses'=>'SubscriberController@sendCompaign']);
Route::resource('admin/newsletter', 'Admin\\NewsletterController');