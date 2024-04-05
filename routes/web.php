<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\mycareer;
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
Route::get('/guidence-solution-for-schools',function(){
    return view('guidence-solution-for-schools');
});
Route::get('/guidence-solution-college-students',function(){
    return view('guidence-solution-college-students');
});
Route::get("/contact-for-workshop",function(){
    return view('contact-for-workshop');
});

Route::get("/contact-for-workshop-copy",function(){
    return view('contact-for-workshop-copy');
});

Route::get("/subject-selection",function(){
    return view('subject-selection');
});
Route::get("/stream-selection-and-admission-planning",function(){
    return view('stream-selection-and-admission-planning');
});
Route::get("/lakshya",function(){
    return view("/lakshya");
});
Route::get("/ranniti",function(){
    return view("/ranniti");
});
Route::get("/personalized-support",function(){
    return view("/personalized-support");
});

Route::get('/career-lab', function () {
    return view('career-lab');
});

Route::get('/explore', function () {
    return view('explore');
});
Route::get('/advance-explore', function () {
    return view('advance-explore');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard1');
})->middleware(['auth:admin'])->name('admin.dashboard');

Route::group(['middleware' => ['auth:admin'],'prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('educational-level', [mycareer::class, 'education'])->name('educational-level');
    Route::post('save-education', [mycareer::class, 'insert_edu'])->name('save-education');
    Route::get('stream', [mycareer::class, 'stream'])->name('stream');
    Route::post('save-stream', [mycareer::class, 'insert_stream'])->name('save-stream');
    Route::get('mode-of-education', [mycareer::class, 'modeeducation'])->name('mode-of-education');
    Route::post('save-mode', [mycareer::class, 'insert_mode'])->name('save-mode');

    Route::get('future-trend', [mycareer::class, 'future'])->name('future-trend');
    Route::post('save-future-trend', [mycareer::class, 'insert_future'])->name('save-future-trend');

    Route::get('abilities', [mycareer::class, 'abilities'])->name('abilities');
    Route::post('save-abilities', [mycareer::class, 'insert_abilitues'])->name('save-abilities');

    Route::get('interest', [mycareer::class, 'interest'])->name('interest');
    Route::post('save-interest', [mycareer::class, 'insert_interest'])->name('save-interest');

    Route::get('knowledge', [mycareer::class, 'knowledge'])->name('knowledge');
    Route::post('save-knowledge', [mycareer::class, 'insert_knowledge'])->name('save-knowledge');

    Route::get('skills', [mycareer::class, 'skills'])->name('skills');
    Route::post('save-skills', [mycareer::class, 'insert_skills'])->name('save-skills');

    Route::get('work-activities', [mycareer::class, 'workactivities'])->name('work-activities');
    Route::post('save-workactivity', [mycareer::class, 'insert_workactivity'])->name('save-workactivity');

    Route::get('work-context', [mycareer::class, 'workcontext'])->name('work-context');
    Route::post('save-workcontext', [mycareer::class, 'insert_workcontext'])->name('save-workcontext');

    Route::get('work-types', [mycareer::class, 'worktypes'])->name('work-types');
    Route::post('save-worktypes', [mycareer::class, 'insert_worktypes'])->name('save-worktypes');

    Route::get('work-value', [mycareer::class, 'workvalue'])->name('work-value');
    Route::post('save-workvalue', [mycareer::class, 'insert_workvalue'])->name('save-workvalue');

    Route::get('add-new', [mycareer::class, 'addnew'])->name('add-new');
});
require __DIR__.'/adminauth.php';



