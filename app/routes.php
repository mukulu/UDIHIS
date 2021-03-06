<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */




//Route::controller('/', 'UserController');
Route::get('/', 'UserController@getIndex');
Route::get('login', 'UserController@getIndex');
Route::post('/login', 'UserController@login');
Route::get('admin','Admin@getIndex');
Route::post('/users/store','UserController@storeUser');
Route::post('users/delete/{id}', 'UserController@destroy');
Route::get('/manage_user','Admin@manage_user');
Route::post('/manage_user','Admin@addUser');
Route::post('manage_user/search/', 'AdminController@search');

Route::post('/manage_user/{id}','AdminController@editUser');
Route::get('/manage_user/{id}','Admin@manage_user');

Route::get('/logout','UserController@logout');
Route::get('forgot_password','UserController@forgotPassword');
Route::get('loaduser/{id}', 'UserController@loaduser');
//Doctor routes
Route::get('patients/lab_test/{id}','DoctorController@lab_test');
Route::post('patients/lab_test/{id}','DoctorController@lab_test_post');
Route::get('doctor','DoctorController@index');
Route::get('appointment','DoctorController@appointment');
Route::get('patients','DoctorController@patients');
Route::get('patients/prescribe/backpatients','DoctorController@patients');
Route::get('profile','DoctorController@profile');
Route::get('reports','DoctorController@reports');
Route::get('prescription','DoctorController@prescription');
Route::get('patients/prescribe/{id}', 'DoctorController@prescribe');
Route::post('patients/prescribe/recommended', 'DoctorController@recommend');
Route::post('patients/prescribe/getMedxn', 'DoctorController@getMedxn');
Route::post('consultation/autosave','DoctorController@autosave');
Route::post('patients/search','DoctorController@search');
/*Pharmacy Route*/

Route::get('pharmacy', 'PharmacyController@getIndex');
Route::get('provide_medication','PharmacyController@getMedics');
Route::get('manage_medicine','PharmacyController@getMedic');
Route::post('/manage_medicine', 'PharmacyController@addMedicine');
Route::get('edit_medicine', 'PharmacyController@getEditMedicine');
Route::post('/edit_medicine', 'PharmacyController@updateMedicine');
Route::get('manage_report','PharmacyController@getReport');
Route::get('my_accountpharmacy','PharmacyController@getAccount');
Route::post('manage_medicine/search/', 'PharmacyController@search');
Route::get('dashboard','PharmacyController@getDash'); 
Route::post('pharmacy/recommended','PharmacyController@profile'); 
Route::post('provide_recommended','PharmacyController@provide_selected'); 

/*Billing Route*/
Route::get('billing','BillingController@getIndex');
Route::get('edit_service','BillingController@getEditService'); 
Route::post('edit_service','BillingController@getService'); 
Route::get('Pending_bills','BillingController@getBills');
Route::get('Insurance_management','BillingController@getInsurance');
Route::get('service_management','BillingController@getService');
Route::post('service_management','BillingController@addService');
Route::get('reports_billing','BillingController@getReports');
Route::get('profile_billing','BillingController@getProfile');

///Receptionist
/*for listsing patients and adding*/
Route::post('patients/loadsection', 'ReceptionController@loadsection');
Route::post('patients/savepatientinfo', 'ReceptionController@savepatientinfo');
Route::post('patients/savepatientinfo1', 'ReceptionController@patientinfo');
Route::get('reception', 'ReceptionController@getIndex');
Route::get('manage/patients', 'ReceptionController@index');
Route::get('patient/edit/{id}', 'ReceptionController@update');
Route::post('patient/edit/{id}', 'ReceptionController@edit');
Route::get('patients' , 'PatientController@index');
/*to add a patient*/
Route::post('patients/add' , 'ReceptionController@savepatientinfo');
Route::get('patients/app_card' , 'ReceptionController@app_card_view');
Route::get('patients/add' , 'ReceptionController@index');
/*for editing a patient*/
Route::get('patients/edit/{id}' , 'PatientController@edit');
/*to update patient infor*/
Route::post('patients/edit/{id}' , 'PatientController@update');
/*to delete a patient*/
Route::get('patients/delete/{id}' , 'PatientController@destroy');
Route::post('patients/profile', 'PatientController@profile');

/*Laboratory technician routes*/
Route::get('laboratory','LaboratoryController@laboratory');
Route::get('stock','LaboratoryController@stock');
Route::get('getTests', 'LaboratoryController@getTests');
Route::get('testpatients/getTests', 'LaboratoryController@getTests');
Route::get('testpatients', 'LaboratoryController@testpatients');
Route::get('testpatients/{id}', 'LaboratoryController@testpatient');



//return the appoitment form
Route::get('patient/appoint/{id}' , 'PatientVisitController@index');
//return patient visit form
Route::get('patient/visit/{id}' , 'PatientVisitController@visit');

//patient visit routes
Route::post('patient/visit/loadsection', 'PatientVisitController@loadsection');
Route::post('patient/visit/savepatientinfo1', 'PatientVisitController@patientinfo');
// appointment routes
Route::post('patient/appoint/loadsection', 'PatientVisitController@loadsection');

Route::post('patient/appoint/{id}', 'PatientVisitController@setAppointment');
