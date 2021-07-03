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

Route::get('/', function () {
    return view('main');
});


Route::get('/resume/download', 'ResumeController@download')->name('resume.download');
Route::get('/resume', 'ResumeController@index')->name('resume.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('user-detail/create', 'UserDetailController@create')->middleware('auth')->name('user-detail.create');

// Route::post('user-detail', 'UserDetailController@store')->middleware('auth');



Route::resource('user-detail', 'UserDetailController')->middleware('auth');
Route::resource('married', 'MarriedController')->middleware('auth');
Route::resource('health', 'HealthController')->middleware('auth');

Route::resource('education', 'EducationController')->middleware('auth');
Route::resource('anak', 'AnakController')->middleware('auth');
Route::resource('connection', 'ConnectionController')->middleware('auth');

Route::resource('experience', 'ExperienceController')->middleware('auth');
Route::resource('organization', 'OrganizationController')->middleware('auth');
Route::resource('children', 'ChildrenController')->middleware('auth');
Route::resource('job', 'JobController')->middleware('auth');

Route::resource('reference', 'ReferenceController')->middleware('auth');
Route::resource('relation', 'RelationController')->middleware('auth');

Route::resource('asing', 'AsingController')->middleware('auth');
Route::resource('image', 'ImageController')->middleware('auth');
Route::resource('language', 'LanguageController')->middleware('auth');
Route::resource('file', 'FileController')->middleware('auth');

Route::resource('skill', 'SkillController')->middleware('auth');
