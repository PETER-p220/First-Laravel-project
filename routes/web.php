<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\batchController;
use App\Http\Controllers\enrollmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\staffController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MailController;


Auth::routes();  // This registers the 'login' route automatically


Route::get('/', function () {
    return view('layout');
});
#Teacher Routes
Route::get('teacherEdit',[teacherController::class,'index1'])->name('teacherEdit');
Route::get('edit_teacher/{id}',[teacherController::class,'edit_teacher']);
Route::get('destroy_teacher/{id}',[teacherController::class,'destroy_teacher']);
Route::get('show_teacher/{id}',[teacherController::class,'show_teacher']);
Route::get('view_teacher',[teacherController::class,'create'])->name('view_teacher');
Route::get('teacher',[teacherController::class,'index'])->name('teacher');
Route::post('teacher',[teacherController::class,'store']);

#Student Routes
Route::get('studentEdit',[StudentController::class,'index_student'])->name('studentEdit');
Route::get('show/{id}',[StudentController::class,'show']);
Route::get('edit_std/{id}',[StudentController::class,'edit_std']);
Route::get('delete_std/{id}',[StudentController::class,'delete_std']);
Route::get('create',[StudentController::class,'index'])->name('create');
Route::get('view_student',[StudentController::class,'show_student'])->name('view_student');
Route::post('create',[StudentController::class,'store']);

#Enrollment Routes
Route::get('enrollmentAction',[enrollmentController::class,'index1'])->name('enrollmentAction');
Route::get('enrollment',[enrollmentController::class,'index'])->name('enrollment');
Route::get('delete_enrollment/{id}',[enrollmentController::class,'delete_enrollment']);
Route::get('edit_enrollment/{id}',[enrollmentController::class,'edit_enrollment']);
Route::get('show_enroll/{id}',[enrollmentController::class,'show_enroll']);
Route::get('view_enrollment',[enrollmentController::class,'index4'])->name('view_enrollment');
Route::post('enrollment',[enrollmentController::class,'store']);


#Batch Routes
Route::get('batchEdit',[batchController::class,'index1'])->name('batchEdit');
Route::get('batch',[batchController::class,'index'])->name('batch');
Route::get('edit_batch/{id}',[batchController::class,'edit_batch']);
Route::get('show_batch/{id}',[batchController::class,'show_batch']);
Route::get('delete_batch/{id}',[batchController::class,'delete_batch']);
Route::get('view_batch',[batchController::class,'viewBatch'])->name('view_batch');
Route::post('batch',[batchController::class,'store']);

#Course Routes
Route::get('edit',[CourseController::class,'index'])->name('edit');
Route::get('coursePage',[CourseController::class,'index1'])->name('coursePage');
Route::get('delete_course/{id}',[CourseController::class,'delete_course']);
Route::get('show_course/{id}',[CourseController::class,'show_course']);
Route::get('edit_course/{id}',[CourseController::class,'edit_course']);
Route::get('viewCourse',[CourseController::class,'show_course'])->name('viewCourse');
Route::post('coursePage',[CourseController::class,'store']);


#Payment Routes
Route::get('PaymentEdit',[PaymentController::class,'index1'])->name('PaymentEdit');
Route::get('payment',[PaymentController::class,'index'])->name('payment');
Route::get('edit_payment/{id}',[PaymentController::class,'edit_payment']);
Route::get('delete_payment/{id}',[PaymentController::class,'delete_payment']);
Route::get('show_payment/{id}',[PaymentController::class,'show_payment']);
Route::get('view_payment',[PaymentController::class,'index4'])->name('view_payment');
Route::post('payment',[PaymentController::class,'store']);


#admin routes
Route::get('admin',[staffController::class,'index'])->name('admin');
Route::post('admin',[staffController::class,'store']);

use App\Http\Controllers\Auth\GoogleLoginController;

Route::get('login/google', [GoogleLoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [GoogleLoginController::class, 'handleGoogleCallback'])->name('login.google.callback');
