<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' =>'auth'],function(){

});

//admin
Route::group(['as'=>'admin.','prefix'=>'admin','middleware' =>'is_admin'],function(){
    Route::get('/home', 'HomeController@adminIndex')->name('home');

    //school
    Route::get('/addschool','Admin\SchoolController@addSchool')->name('add-school');
    Route::post('/saveschool','Admin\SchoolController@saveSchool')->name('save-school');
    Route::get('/manageschool','Admin\SchoolController@manageSchool')->name('manage-school');
    Route::get('/unpublishedschool/{id}','Admin\SchoolController@unpublishedSchool')->name('unpublished-school');
    Route::get('/publishedschool/{id}','Admin\SchoolController@publishedSchool')->name('published-school');
    Route::get('/editschool/{id}','Admin\SchoolController@editSchool')->name('edit-school');
    Route::post('/updateschool/{id}','Admin\SchoolController@updateSchool')->name('update-school');
    Route::get('/deleteschool/{id}','Admin\SchoolController@deleteSchool')->name('delete-school');


        //Class
    Route::get('/addclass','Admin\ClassController@addClass')->name('add-class');
    Route::post('/saveclass','Admin\ClassController@saveClass')->name('save-class');
    Route::get('/manageclass','Admin\ClassController@manageClass')->name('manage-class');
    Route::get('/unpublishedclass/{id}','Admin\ClassController@unpublishedClass')->name('unpublished-class');
    Route::get('/publishedclass/{id}','Admin\ClassController@publishedClass')->name('published-class');
    Route::get('/editclass/{id}','Admin\ClassController@editClass')->name('edit-class');
    Route::post('/updateclass/{id}','Admin\ClassController@updateClass')->name('update-class');
    Route::get('/deleteclass/{id}','Admin\ClassController@deleteClass')->name('delete-class');

    //Section
    Route::get('/addsection','Admin\SectionController@addSection')->name('add-section');
    Route::post('/savesection','Admin\SectionController@saveSection')->name('save-section');
    Route::get('/managesection','Admin\SectionController@manageSection')->name('manage-section');
    Route::get('/unpublishedsection/{id}','Admin\SectionController@unpublishedSection')->name('unpublished-section');
    Route::get('/publishedsection/{id}','Admin\SectionController@publishedSection')->name('published-section');
    Route::get('/editsection/{id}','Admin\SectionController@editSection')->name('edit-section');
    Route::post('/updatesection/{id}','Admin\SectionController@updateSection')->name('update-section');
    Route::get('/deletesection/{id}','Admin\SectionController@deleteSection')->name('delete-section');


        //Student
        Route::get('/addstudent','Admin\StudentController@addStudent')->name('add-student');
        Route::post('/savestudent','Admin\StudentController@saveStudent')->name('save-student');
        Route::get('/managestudent','Admin\StudentController@manageStudent')->name('manage-student');
        Route::post('/showstudent','Admin\StudentController@showStudent')->name('show-student');
        // Route::get('/showstudent/{$id1}/{$id2}/{$id3}','Admin\StudentController@showStudent')->name('show-student');
        // Route::get('/unpublishedsection/{id}','Admin\SectionController@unpublishedSection')->name('unpublished-section');
        // Route::get('/publishedsection/{id}','Admin\SectionController@publishedSection')->name('published-section');
        // Route::get('/editsection/{id}','Admin\SectionController@editSection')->name('edit-section');
        // Route::post('/updatesection/{id}','Admin\SectionController@updateSection')->name('update-section');
        // Route::get('/deletesection/{id}','Admin\SectionController@deleteSection')->name('delete-section');


        Route::get('/findstudent','Admin\StudentController@findStudent')->name('find-student');
        Route::get('/showclass6secA','Admin\StudentController@showClass6SecA')->name('show-class6-secA');
        // Route::get('/paymentstudent/{$id}','Admin\StudentController@paymentStudent')->name('payment-student');

});
