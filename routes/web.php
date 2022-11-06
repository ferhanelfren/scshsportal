<?php

use App\Http\Controllers\StudentsInformationController;
use App\Http\Controllers\StudentsInformationControllerOne;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

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


//NAMING CONVENTION
//index - Show all data
//show - show a single data
//create - show a form
//store - to store data
//edit - show a form to edit the data
//update - update a data
//destory - delete data
//emend - edit text





Route::controller(StudentsInformationController::class)->group(function(){
    Route::get('/','index');
    Route::get('/enrollment-form','enrollmentform');
    Route::post('/enrollment-form', 'store');
    // Route::get('/student-details', 'authenticate')->name('pdf.authenticate');
    // Route::get('/student-details/generate', 'generatePDF')->name('pdf.generate');
    // Route::get('/student-details/authenticate','edit');
    Route::get('/none','nones');
});

Route::get('/enrollment-form/generate-pdf', [PDFController::class, 'generatePDF']);






