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

Route::get('/', function () {
  return view('auth.login');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

  Route::get('project_info','InspectionChecklist@Paso1')->name('project_info');
  Route::get('create_project','InspectionChecklist@Paso1_Create')->name('createproject');
  Route::post('add_project','InspectionChecklist@Paso1_add')->name('addproject');
  Route::get('production_project','InspectionChecklist@Paso2')->name('productionproject');
  Route::get('edit_project/{ID}','InspectionChecklist@Paso2_Edit')->name('edit_project');
  Route::post('add_Specification','InspectionChecklist@Paso2_add')->name('addSpecification');
  Route::get('view_update_project/{ID}','InspectionChecklist@Paso2_View_update')->name('update_project');
  Route::post('updateSpecification','InspectionChecklist@Paso2_update')->name('updateSpecification');
  Route::get('by_approved','InspectionChecklist@Paso3_ByApproved')->name('by_approved');
  Route::get('approval_process/{ID}','InspectionChecklist@Paso3_checkApproved')->name('approval_process');
  Route::post('approval_proyect','InspectionChecklist@Paso3_ApprovedProject')->name('approval_proyect');
  Route::get('Approved','InspectionChecklist@Paso3_Approved')->name('Approved');
  Route::get('view_final_details/{ID}','InspectionChecklist@Paso3_finalview')->name('view_final_details');
  Route::get('pdf_view/{ID}','InspectionChecklist@ViewPdf')->name('pdf_view');
  Route::post('ErrorConsult','InspectionChecklist@ErrorModal');
  Route::get('informe_errores','InspectionChecklist@InformeError');
  Route::post('ConsultaFecha','InspectionChecklist@ConsultaFecha');
  Route::post('pdf_error','InspectionChecklist@ViewPdfError')->name('pdf_error');
  Route::get('delete_project/{ID}','InspectionChecklist@DeletProject')->name('delete_project');

  Route::get('signage','FormSignsCars@ViewSings')->name('signage');
  Route::post('pdf_form_sign','FormSignsCars@PDFSings')->name('pdf_form_sign');
  Route::get('car_wrap','FormSignsCars@ViewCar')->name('car_wrap');
  Route::post('pdf_form_car','FormSignsCars@PDFCar')->name('pdf_form_car');

  //ejemplo
  /*
  Route::get('table-list', function () { return view('pages.table_list');	})->name('table');
  Route::get('typography', function () { return view('pages.typography');})->name('typography');
  Route::get('icons', function () { return view('pages.icons');})->name('icons');
  Route::get('map', function () { return view('pages.map');})->name('map');
  Route::get('notifications', function () { return view('pages.notifications');})->name('notifications');
  Route::get('rtl-support', function () { return view('pages.language');})->name('language');
  Route::get('upgrade', function () { return view('pages.upgrade');	})->name('upgrade');
  */
});

Route::group(['middleware' => 'auth'], function () {
  Route::resource('user', 'UserController', ['except' => ['show']]);
  Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
  Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
  Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
