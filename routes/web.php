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
Auth::routes();
Route::get('/','BlogController@index');
Route::post('/','BlogController@callme');
Route::get('/contact','BlogController@contact');
Route::post('/contact','BlogController@postcontact');
Route::get('/panduan/calon-mitra','BlogController@calonmitra');
Route::get('/panduan/video-bisnis-paytren','BlogController@videopaytren');
Route::get('/page/faq','BlogController@videopaytren');

Route::get('/blog','BlogController@blog');
Route::get('/blog/{slug}','BlogController@blogDetail')->where('slug', '[A-Za-z-1-9]+');
Route::get('/tags/{tag}','BlogController@tag')->where('tag', '[A-Za-z-1-9]+');
Route::get('/blog/series/{series}','BlogController@Series')->where('series', '[A-Za-z-1-9]+');
Route::get('/blog/lang/{id}', 'BlogController@getLang')->where('id','[a-z]+');
Route::get('/home', 'HomeController@index');


Route::get('/page/{page}','PageController@index');


Route::group(['middleware' => ['isVerified']], function () {
	Route::get('/home', 'HomeController@index')->name('home');
});


Route::get('email-verification/error', 'Auth\RegisterController@getVerificationError')->name('email-verification.error');
Route::get('email-verification/check/{token}', 'Auth\RegisterController@getVerification')->name('email-verification.check');
Route::post('subscribe',['as'=>'subscribe','uses'=>'SubscriberController@subscribe']);
Route::post('unsubscribe',['as'=>'unsubscribe','uses'=>'SubscriberController@unsubscribe']);
Route::post('sendCompaign',['as'=>'sendCompaign','uses'=>'SubscriberController@sendCompaign']);
Route::get('/user/subscribe','SubscriberController@index');
Route::post('/user/subscribe','SubscriberController@subscribe');
Route::get('/user/unsubscribe','SubscriberController@getunsubscribe');
Route::post('/user/unsubscribe','SubscriberController@unsubscribe');
Route::get('/sendmail/subscribe','SubscriberController@sendemail');
Route::get('manageMailChimp', 'MailChimpController@manageMailChimp');

Route::group(['namespace'=>'Member','middleware'=>['auth','roles'], 'roles' => 'member','group'=>'Member'],
function()
{

   Route::get('member', 'DashboardController@index');
   Route::get('member/upgrade', 'DashboardController@upgrade');
});

/*

	untuk halaman admin

 */

Route::group(['namespace'=>'Admin','middleware'=>['auth','roles'], 'roles' => 'superadmin','group'=>'Admin'],
function()
{

Route::get('admin', 'AdminController@index');
Route::get('admin/give-role-permissions', 'AdminController@getGiveRolePermissions');
Route::post('admin/give-role-permissions', 'AdminController@postGiveRolePermissions');
Route::resource('admin/roles', 'RolesController');
Route::resource('admin/permissions', 'PermissionsController');
Route::resource('admin/users', 'UsersController');
Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);



//Route::get('/', 'Admin\AdminController@index');
Route::resource('admin/category', 'CategoryController');
Route::resource('admin/tag', 'TagController');
Route::resource('admin/article', 'ArticleController');

Route::get('admin/campaign', 'CampaignController@index');
Route::get('admin/campaign/create', 'CampaignController@create');
Route::post('admin/campaign', 'CampaignController@store');
Route::get('admin/campaign/{id}', 'CampaignController@show');
Route::get('admin/visitor','VisitorController@index');
Route::get('/admin/users/{id}/upload','UsersController@upload');
Route::post('/upload/image','UsersController@postUpload');
Route::resource('admin/newsletter', 'NewsletterController');
Route::resource('admin/pages', 'PagesController');
});


/*

	end admin

 */
