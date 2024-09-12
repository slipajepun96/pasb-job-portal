<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidateController;

Route::get('/', function () {
    return view('index');
});
Route::get('/apply-form', function () {
    return view('apply-form.apply-form');
});

Route::post('/apply-form',[CandidateController::class,'storeApplyFormPg1'])->name('apply-form-pg1');
Route::post('/apply-form/2',[CandidateController::class,'storeApplyFormPg2'])->name('store-apply-form-pg2');
Route::post('/apply-form/2/delete',[CandidateController::class,'deleteApplyFormPg2'])->name('delete-apply-form-pg2');

Route::get('/apply-form/{candidate_id}/2',[CandidateController::class,'viewApplyFormPg2'])->name('apply-form-pg2');
Route::post('/apply-form/3',[CandidateController::class,'viewApplyFormPg3'])->name('apply-form-pg3');
