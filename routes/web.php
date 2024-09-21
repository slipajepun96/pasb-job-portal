<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/apply-form-pdf', function () {
    return view('pdf.apply_form_pdf');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::post('/apply-form',[CandidateController::class,'storeApplyFormPg1'])->name('apply-form-pg1');
Route::post('/apply-form/2',[CandidateController::class,'storeApplyFormPg2'])->name('store-apply-form-pg2');
Route::post('/apply-form/2/delete',[CandidateController::class,'deleteApplyFormPg2'])->name('delete-apply-form-pg2');
Route::post('/apply-form/3',[CandidateController::class,'storeApplyFormPg3'])->name('store-apply-form-pg3');
Route::post('/apply-form/3/delete',[CandidateController::class,'deleteApplyFormPg3'])->name('delete-apply-form-pg3');
Route::post('/apply-form/4',[CandidateController::class,'storeApplyFormPg4'])->name('store-apply-form-pg4');
Route::post('/apply-form/4/delete',[CandidateController::class,'deleteApplyFormPg4'])->name('delete-apply-form-pg4');
Route::post('/apply-form/5',[CandidateController::class,'storeApplyFormPg5'])->name('store-apply-form-pg5');
Route::post('/apply-form/6',[CandidateController::class,'storeApplyFormPg6'])->name('store-apply-form-pg6');
Route::post('/apply-form/7/hobby',[CandidateController::class,'storeHobby'])->name('store-hobby');
Route::post('/apply-form/7/hobby/delete',[CandidateController::class,'deleteHobby'])->name('delete-hobby');
Route::put('/apply-form/7',[CandidateController::class,'storeApplyFormPg7'])->name('store-apply-form-pg7');

Route::get('/',[IndexController::class,'main']);
Route::get('/apply-form',[CandidateController::class,'viewApplyFormPg1'])->name('form-pg1');
Route::get('/apply-form/{candidate_id}/2',[CandidateController::class,'viewApplyFormPg2'])->name('apply-form-pg2');
Route::get('/apply-form/{candidate_id}/3',[CandidateController::class,'viewApplyFormPg3'])->name('apply-form-pg3');
Route::get('/apply-form/{candidate_id}/4',[CandidateController::class,'viewApplyFormPg4'])->name('apply-form-pg4');
Route::get('/apply-form/{candidate_id}/5',[CandidateController::class,'viewApplyFormPg5'])->name('apply-form-pg5');
Route::get('/apply-form/{candidate_id}/6',[CandidateController::class,'viewApplyFormPg6'])->name('apply-form-pg6');
Route::get('/apply-form/{candidate_id}/7',[CandidateController::class,'viewApplyFormPg7'])->name('apply-form-pg7');


Route::middleware(['auth'],['preventBackHistory'])->group(function()
{
    Route::get('/dashboard',[IndexController::class,'index'])->name('index');
    Route::get('/jobs',[JobController::class,'index'])->name('index-jobs');
    Route::get('/jobs/add',[JobController::class,'viewAddForm'])->name('view-add-job');

    Route::post('/dashboard',[IndexController::class,'indexWithSelection'])->name('index-job-selected');
    Route::post('/jobs/add',[JobController::class,'storeAddForm'])->name('add-job');
    Route::post('/jobs/delete',[JobController::class,'deleteJob'])->name('delete-job');
    Route::post('/dashboardd',[IndexController::class,'getAttachment'])->name('get-attachment');
    Route::post('/dashboard/apply_form_pdf',[IndexController::class,'getFormPDF'])->name('get-apply_form_pdf');
    // Route::post('/dashboard/apply_form_view',[IndexController::class,'getFormVIew'])->name('get-apply_form_view');

});