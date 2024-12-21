<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'layout');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';




use App\Http\Controllers\ImageSearch;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FileUpload;
use App\Http\Controllers\batchController;
use App\Http\Controllers\enrollmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\staffController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\Auth\GoogleController;




Route::get('imageSearch', [ImageSearch::class,'index'])->name('imageSearch');
Route::post('imageSearch', [ImageSearch::class,'store']);
Auth::routes();  // This registers the 'login' route automatically

Route::get('/', function () {
    return view('layout');
});
#Teacher Routes
Route::get('teacherEdit',[teacherController::class,'index1'])->name('teacherEdit');
Route::get('edit_teacher/{id}',[teacherController::class,'edit_teacher']);
Route::post('edit_teacher/{id}',[teacherController::class,'update_teacher']);
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
Route::post('edit_std/{id}',[StudentController::class,'update_std']);

#Enrollment Routes
Route::get('enrollmentAction',[enrollmentController::class,'index1'])->name('enrollmentAction');
Route::get('enrollment',[enrollmentController::class,'index'])->name('enrollment');
Route::get('delete_enrollment/{id}',[enrollmentController::class,'delete_enrollment']);
Route::get('edit_enrollment/{id}',[enrollmentController::class,'edit_enrollment'])->name('edit_enrollment/{id}');
Route::post('edit_enrollment/{id}',[enrollmentController::class,'update_enroll']);
Route::get('show_enroll/{id}',action: [enrollmentController::class,'show_enroll']);
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
Route::post('edit_batch/{id}',[batchController::class,'update_batch']);

#Course Routes
Route::get('edit',[CourseController::class,'index'])->name('edit');
Route::get('coursePage',[CourseController::class,'index1'])->name('coursePage');
Route::get('delete_course/{id}',[CourseController::class,'delete_course']);
Route::get('show_course/{id}',[CourseController::class,'show_course']);
Route::get('edit_course/{id}',[CourseController::class,'edit_course']);
Route::get('viewCourse',[CourseController::class,'show_course'])->name('viewCourse');
Route::post('coursePage',[CourseController::class,'store']);
Route::post('edit_course/{id}',[CourseController::class,'update_course']);

#Payment Routes
Route::get('PaymentEdit',[PaymentController::class,'index1'])->name('PaymentEdit');
Route::get('payment',[PaymentController::class,'index'])->name('payment');
Route::get('edit_payment/{id}',[PaymentController::class,'edit_payment']);
Route::get('delete_payment/{id}',[PaymentController::class,'delete_payment']);
Route::get('show_payment/{id}',[PaymentController::class,'show_payment']);
Route::get('view_payment',[PaymentController::class,'index4'])->name('view_payment');
Route::post('payment',[PaymentController::class,'store']);
Route::get('paymentUpdate',[PaymentController::class,'index2'])->name('paymentUpdate');
Route::post('edit_payment/{id}',[PaymentController::class,'update_payment']);


#admin routes
Route::get('admin',[staffController::class,'index'])->name('admin');
Route::post('admin',[staffController::class,'store']);


Route::view('/', 'layout');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('login/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('login/google/callback', [GoogleController::class, 'handleGoogleCallback']);


Route::post('payment-intent', [PaymentController::class, 'createPaymentIntent']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');





Route::get('mail',[MailController::class, 'index'])->name('mail');
Route::post('mail',[MailController::class, 'store'])->name('mail');




Route::get('registering',[MailController::class, 'index1'])->name('registering');


Route::get('upload',[FileUpload::class, 'index'])->name('upload');
Route::post('upload',[FileUpload::class, 'store']);
