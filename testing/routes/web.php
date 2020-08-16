<?php
Route::any('/', function () {
    return view('auth.login');
})->name('login');

Route::post('login', 'AuthWebController@login')->name('web.login');

Route::get('logout', 'AuthWebController@logout')->name('web.logout');

Route::get('admin', 'AuthWebController@getAuthenticatedUser')->middleware('jwt.verify');

// Route::middleware(['jwt.web.verify', 'logging'])->group(function () {
//     Route::get('/dashboard', 'HomeController@index')->name('dashboard');
// });

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('/dashboard-radio', 'HomeController@indexRadio')->name('dashboard-radio');
    Route::get('/dashboard-validator', 'HomeController@indexValidator')->name('dashboard-validator');
    Route::get('/dashboard-admin', 'HomeController@indexAdmin')->name('dashboard-admin');
    Route::resource('/daily-report', 'DailyReportController');
    Route::resource('/daily-report-validator', 'ReportValidatorController');
    Route::resource('/daily-activity', 'DailyActiviyController');
    Route::post('daily-activity-delete/{id}', 'DailyActiviyController@destroyStanby');
});
