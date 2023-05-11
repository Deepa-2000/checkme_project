<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
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
    return view('layouts.index');
});

Route::post('signup',[UserAuth::class,'userSignup']);
Route::post('login',[UserAuth::class,'userLogin']);


Route::view('aadhar','layouts.aadhar');
Route::view('about','layouts.about');
Route::view('academic_checks','layouts.academic_checks');
Route::view('address_verfication','layouts.address_verfication');
Route::view('apply','layouts.apply');
Route::view('background_checks','layouts.background_checks');
Route::view('career','layouts.career');
Route::view('class10','layouts.class10');
Route::view('class12','layouts.class12');
Route::view('contact','layouts.contact');
Route::view('criminal_history','layouts.criminal_history');
Route::view('database_checks','layouts.database_checks');
Route::view('digital_add','layouts.digital_add');
Route::view('din_verification','layouts.din_verification');
Route::view('dl','layouts.dl');
Route::view('drug_test','layouts.drug_test');
Route::view('employments_checks','layouts.employments_checks');
Route::view('enquiry','layouts.enquiry');
Route::view('executive_checks','layouts.executive_checks');
Route::view('faq','layouts.faq');
Route::view('financial_checks','layouts.financial_checks');
Route::view('graduation','layouts.graduation');
Route::view('identity_checks','layouts.identity_checks');
Route::view('local_add','layouts.local_add');
Route::view('news','layouts.news');
Route::view('pan','layouts.pan');
Route::view('parmanent_add','layouts.parmanent_add');
Route::view('police_court_record','layouts.police_court_record');
Route::view('postal_add','layouts.postal_add');
Route::view('postgraduation','layouts.postgraduation');
Route::view('services','layouts.services');
Route::view('tenent_verification_price','layouts.tenent_verification_price');
Route::view('tenent_verification','layouts.tenent_verification');
Route::view('vendor_price','layouts.vendor_price');
Route::view('vendor','layouts.vendor');
Route::view('worker_price','layouts.worker_price');
Route::view('worker','layouts.worker');
Route::view('login','layouts.login');
Route::view('signup','layouts.signup');
Route::view('profile','layouts.profile');


