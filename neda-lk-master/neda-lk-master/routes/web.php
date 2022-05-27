<?php
declare(strict_types=1);

use Illuminate\Support\Facades\Mail;
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


Auth::routes();

Route::get('dev', function () {

    dd('done');
});

Route::get('/admin', [
    'as' => 'admin.redirect',
    'uses' => function () {
        return redirect(\route('nova.index'));
    }
]);

Route::get('/do-admin', [
    'as' => 'admin.do-admin.index',
    'uses' => 'App\Http\Controllers\AdminController@index'
]);

Route::get('/do-admin/register-entrepreneur', [
    'as' => 'admin.do-admin.entrepreneur',
    'uses' => 'App\Http\Controllers\AdminController@register'
]);

Route::get('/do-admin/view-entrepreneur/{entrepreneur_id}', [
    'as' => 'admin.do-admin.entrepreneur.show',
    'uses' => 'App\Http\Controllers\AdminController@show'
]);

Route::post('/do-admin/delete-entrepreneur', [
    'as' => 'admin.do-admin.delete-entrepreneur',
    'uses' => 'App\Http\Controllers\AdminController@delete'
]);

Route::get('/do-admin/view-listing', [
    'as' => 'admin.do-admin.view-listing',
    'uses' => 'App\Http\Controllers\AdminController@viewListing'
]);

Route::get('/do-admin/all-listings', [
    'as' => 'admin.do-admin.all-listings',
    'uses' => 'App\Http\Controllers\AdminController@allListings'
]);

Route::get('/do-admin/district-listings', [
    'as' => 'admin.do-admin.district-listings',
    'uses' => 'App\Http\Controllers\AdminController@districtListings'
]);

Route::get('/do-admin/download', [
    'as' => 'admin.do-admin.download',
    'uses' => 'App\Http\Controllers\AdminController@downloadListings'
]);

Route::post('/do-admin/download', [
    'as' => 'admin.do-admin.download',
    'uses' => 'App\Http\Controllers\AdminController@downloadListings'
]);

Route::post('/do-admin/register-entrepreneur', [
    'as' => 'admin.do-admin.entrepreneur.save',
    'uses' => 'App\Http\Controllers\AdminController@saveEntrepreneur'
]);

Route::get('page/{page_slug}', [
    'prefix' => '{language?}',
    'middleware' => ['language'],
    'as' => 'home.index',
    'uses' => 'App\Http\Controllers\PageController@show'
]);

Route::get('recruitment-of-management-assistant', [
    'as' => 'form.recruitment_of_management_assistant',
    'uses' => 'App\Http\Controllers\FormController@recruitmentOfManagementAssistant'
]);

Route::post('recruitment-of-management-assistant', [
    'as' => 'form.recruitment_of_management_assistant.save',
    'uses' => 'App\Http\Controllers\FormController@recruitmentOfManagementAssistantSave'
]);

Route::get('recruitment-of-staff', [
    'as' => 'form.recruitment_of_staff',
    'uses' => 'App\Http\Controllers\FormController@recruitmentOfStaff'
]);

Route::post('recruitment-of-staff', [
    'as' => 'form.recruitment_of_staff.save',
    'uses' => 'App\Http\Controllers\FormController@recruitmentOfStaffSave'
]);

Route::get('b2b', [
    'as' => 'form.back_to_business',
    'uses' => 'App\Http\Controllers\FormController@backToBusiness'
]);

Route::post('b2b', [
    'as' => 'form.back_to_business.save',
    'uses' => 'App\Http\Controllers\FormController@backToBusinessSave'
]);

Route::get('logo-request', [
    'as' => 'form.logo_request',
    'uses' => 'App\Http\Controllers\FormController@logoRequest'
]);

Route::post('logo-request', [
    'as' => 'form.logo_request.save',
    'uses' => 'App\Http\Controllers\FormController@logoRequestSave'
]);

Route::get('neda-news/latest', [
    'prefix' => '{language?}',
    'middleware' => ['language'],
    'as' => 'news.index',
    'uses' => 'App\Http\Controllers\NewsController@index'
]);

Route::get('neda-news/national-level', [
    'prefix' => '{language?}',
    'middleware' => ['language'],
    'as' => 'news_national.index',
    'uses' => 'App\Http\Controllers\NewsController@national'
]);

Route::get('neda-news/regional-level', [
    'prefix' => '{language?}',
    'middleware' => ['language'],
    'as' => 'news_regional.index',
    'uses' => 'App\Http\Controllers\NewsController@regional'
]);

Route::get('neda-news/{slug}', [
    'prefix' => '{language?}',
    'middleware' => ['language'],
    'as' => 'news.show',
    'uses' => 'App\Http\Controllers\NewsController@show'
]);

Route::get('event/{slug}', [
    'prefix' => '{language?}',
    'middleware' => ['language'],
    'as' => 'event.show',
    'uses' => 'App\Http\Controllers\EventController@show'
]);

Route::get('events/upcoming-events', [
    'prefix' => '{language?}',
    'middleware' => ['language'],
    'as' => 'events.index',
    'uses' => 'App\Http\Controllers\EventController@index'
]);

Route::get('events/national-level', [
    'prefix' => '{language?}',
    'middleware' => ['language'],
    'as' => 'events_national.index',
    'uses' => 'App\Http\Controllers\EventController@national'
]);

Route::get('events/regional-level', [
    'prefix' => '{language?}',
    'middleware' => ['language'],
    'as' => 'events_regional.index',
    'uses' => 'App\Http\Controllers\EventController@regional'
]);

Route::get('faq', [
    'prefix' => '{language?}',
    'middleware' => ['language'],
    'as' => 'faq.index',
    'uses' => 'App\Http\Controllers\HomeController@index'
]);

Route::get('photos', [
    'prefix' => '{language?}',
    'middleware' => ['language'],
    'as' => 'photos.index',
    'uses' => 'App\Http\Controllers\GalleryController@index'
]);

Route::get('photos/event', [
    'prefix' => '{language?}',
    'middleware' => ['language'],
    'as' => 'photos.event',
    'uses' => 'App\Http\Controllers\GalleryController@event'
]);

Route::get('photos/education', [
    'prefix' => '{language?}',
    'middleware' => ['language'],
    'as' => 'photos.education',
    'uses' => 'App\Http\Controllers\GalleryController@education'
]);

Route::get('photos/general', [
    'prefix' => '{language?}',
    'middleware' => ['language'],
    'as' => 'photos.general',
    'uses' => 'App\Http\Controllers\GalleryController@general'
]);

Route::get('photos/other', [
    'prefix' => '{language?}',
    'middleware' => ['language'],
    'as' => 'photos.other',
    'uses' => 'App\Http\Controllers\GalleryController@other'
]);

Route::get('neda-videos', [
    'prefix' => '{language?}',
    'middleware' => ['language'],
    'as' => 'video.index',
    'uses' => 'App\Http\Controllers\VideoController@index'
]);

Route::get('contact', [
    'prefix' => '{language?}',
    'middleware' => ['language'],
    'as' => 'contact',
    'uses' => 'App\Http\Controllers\ContactController@index'
]);

Route::get('/careers', [
    'as' => 'careers.show',
    'uses' => 'App\Http\Controllers\CareersController@index'
]);

Route::post('/contact', [
    'as' => 'contact.store',
    'uses' => 'App\Http\Controllers\ContactController@store'
]);

Route::get('/thank-you', [
    'prefix' => '{language?}',
    'middleware' => ['language'],
    'as' => 'register.thank-you',
    'uses' => 'App\Http\Controllers\Auth\RegisterController@registerComplete'
]);

Route::get('/web/index.php', function () {
    return redirect(\route('home.index', 'en'));
});

Route::get('/', [
    'prefix' => '{language?}',
    'middleware' => ['language'],
    'as' => 'home.index',
    'uses' => 'App\Http\Controllers\HomeController@index'
]);



