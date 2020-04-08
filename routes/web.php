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

Route::get('/', 'ra_contentController@indexShow');
Route::get('blog/{ra_content}/{title?}', 'ra_contentController@showOne')->name('showBlog');
Route::get('section/{ra_class}/{n_class?}', 'ra_classController@showBlogSection')->name('showBlogSection');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('countries', 'countriesController');

Route::resource('failedJobs', 'failed_jobsController');

Route::resource('families', 'familyController');

Route::resource('guestbooks', 'guestbookController');

Route::resource('hegoogs', 'hegoogController');

Route::resource('ips', 'ipsController');

Route::resource('links', 'linksController');

Route::resource('mailLists', 'mail_listController');

Route::resource('migrations', 'migrationsController');

Route::resource('passwordResets', 'password_resetsController');

Route::resource('raBooks', 'ra_bookController');

Route::resource('raClasses', 'ra_classController');

Route::resource('raContents', 'ra_contentController');

Route::resource('raCounters', 'ra_counterController');

Route::resource('raJobClasses', 'ra_job_classController');

Route::resource('raPages', 'ra_pagesController');

Route::resource('raReplies', 'ra_replyController');

Route::resource('raUploads', 'ra_uploadController');

Route::resource('raUseronlines', 'ra_useronlineController');

Route::resource('raUsers', 'ra_usersController');

Route::resource('salebranches', 'salebranchesController');

Route::resource('shakawis', 'shakawiController');

Route::resource('smsGroups', 'sms_groupsController');

Route::resource('smsRecieveds', 'sms_recievedController');

Route::resource('sounds', 'soundController');

Route::resource('soundClasses', 'sound_classController');

Route::resource('soundPages', 'sound_pagesController');

Route::resource('stats', 'statsController');

Route::resource('users', 'usersController');

Route::resource('videos', 'videoController');

Route::resource('videoClasses', 'video_classController');

