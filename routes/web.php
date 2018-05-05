<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',function (){
//   return view('voter');
// });

// Route::get('/','PagesController@Voter');
Route::post('counter','PagesController@store');
Route::get('cariktp/{no_ktp}','PagesController@Cariktp');
// Route::get('logout','PagesController@Dashviewout');
Route::get('dashboard','PagesController@Dashview');
Route::get('dashboardkl','PagesController@Dashviewkl');
Route::get('dashboardp','PagesController@Dashviewp');
Route::get('carijmlvote/{id_kandidat}','PagesController@jmlVote');
Route::get('carijmlvoteumur/{id_kandidat}','PagesController@jmlVoteumur');
Route::get('carijmlvoteumurD/{id_kandidat}','PagesController@jmlVoteumurD');
Route::get('carijmlvoteumurE/{id_kandidat}','PagesController@jmlVoteumurE');
Route::get('carijmlvoteprofesi/{id_kandidat}','PagesController@jmlVoteprofesi');
Route::get('carijmlvotep/{id_kandidat}','PagesController@jmlVotep');
Route::get('carijmlvotes','PagesController@jmlVotes');

Route::get('dashboardkandidat','PagesController@kandidattb');

Route::get('dashboardv','PagesController@pemilihtb');

Route::get('dashboardpeta','PagesController@Dashviewpeta');
Route::get('caripeta','PagesController@petapilih');
Route::get('caripetakeldesa/{id_kandidat}','PagesController@jmlVotekeldesa');


Route::get('caripemilih/{nama}','PagesController@fpemilih');
Route::get('caripemilihall','PagesController@fpemilihall');

Route::get('contact', function () {
    return view('contact');
});
Route::get('faq', function () {
    return view('faq');
});



// Route::post('clogin','PagesController@ceklogin');
// Route::get('login', function () {
//     return view('login');
// });
Route::get('logout','elibController@Dashviewout');

Route::post('elogin','elibController@ceklogin');

Route::get('/', 'elibController@vlogin');

Route::get('elib','elibController@elibIndex');

// ==============routeRPA
Route::get('frminputRPA','elibControllerRPA@frmRPA')->name('frminputRPA');
Route::get('loginRPA','elibControllerRPA@vloginRPA');
Route::post('eloginRPA','elibControllerRPA@cekloginfrm');
Route::post('uploadpdf','elibControllerRPA@savepdf');
Route::get('logoutRPA','elibController@DashviewoutRPA');
