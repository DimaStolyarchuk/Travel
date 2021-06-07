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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PageController@index')->name('home_index');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/tours', 'PageController@tours')->name('tours');
Route::get('/blog', 'PageController@blog')->name('blog');
Route::get('/vacancies/{id}', 'PageController@vacancies')->name('vacancies');
Route::get('/contact', 'PageController@contact')->name('contact');

Route::get('/admin', 'Admin\AdminHomeController@index')->name('index');

Route::get('/admin_home', 'Admin\HomeController@home')->name('admin_home');
Route::get('/home_form', 'Admin\HomeController@home_form')->name('home_form');
Route::post('/save_home', 'Admin\HomeController@savehome')->name('save_home');
Route::get('/home_edit/{id}', 'Admin\HomeController@edit_home')->name('edit_home');
Route::get('/home_delete/{id}', 'Admin\HomeController@delete_home')->name('delete_home');

Route::get('/admin_about', 'Admin\AboutController@about')->name('admin_about');
Route::get('/about_form', 'Admin\AboutController@about_form')->name('about_form');
Route::post('/save_about', 'Admin\AboutController@saveabout')->name('save_about');
Route::get('/about_edit/{id}', 'Admin\AboutController@edit_about')->name('edit_about');
Route::get('/about_delete/{id}', 'Admin\AboutController@delete_about')->name('delete_about');

Route::get('/admin_tours', 'Admin\ToursController@tours')->name('admin_tours');
Route::get('/tours_form', 'Admin\ToursController@tours_form')->name('tours_form');
Route::post('/save_tours', 'Admin\ToursController@savetours')->name('save_tours');
Route::get('/tours_edit/{id}', 'Admin\ToursController@edit_tours')->name('edit_tours');
Route::get('/tours_delete/{id}', 'Admin\ToursController@delete_tours')->name('delete_tours');

Route::get('/admin_blog', 'Admin\BlogController@blog')->name('admin_blog');
Route::get('/blog_form', 'Admin\BlogController@blog_form')->name('blog_form');
Route::post('/save_blog', 'Admin\BlogController@saveblog')->name('save_blog');
Route::get('/blog_edit/{id}', 'Admin\BlogController@edit_blog')->name('edit_blog');
Route::get('/blog_delete/{id}', 'Admin\BlogController@delete_blog')->name('delete_blog');

Route::get('/admin_contacts', 'Admin\ContactsController@contacts')->name('admin_contacts');
Route::get('/contacts_form', 'Admin\ContactsController@contacts_form')->name('contacts_form');
Route::post('/save_contacts', 'Admin\ContactsController@savecontacts')->name('save_contacts');
Route::post('/save_contactsmail', 'Admin\ContactsController@savecontactsmail')->name('save_contactsmail');
Route::get('/contacts_edit/{id}', 'Admin\ContactsController@edit_contacts')->name('edit_contacts');
Route::get('/contacts_delete/{id}', 'Admin\ContactsController@delete_contacts')->name('delete_contacts');

Route::get('/admin_vacancy', 'Admin\VacancyController@vacancy')->name('admin_vacancy');
Route::get('/vacancy_form', 'Admin\VacancyController@vacancy_form')->name('vacancy_form');
Route::post('/save_vacancy', 'Admin\VacancyController@savevacancy')->name('save_vacancy');
Route::get('/vacancy_edit/{id}', 'Admin\VacancyController@edit_vacancy')->name('vacancy_edit');
Route::get('/vacancy_delete/{id}', 'Admin\VacancyController@delete_vacancy')->name('vacancy_delete');

Route::get('/admin_info', 'Admin\InfoController@info')->name('admin_info');
Route::get('/info_form', 'Admin\InfoController@info_form')->name('info_form');
Route::post('/save_info', 'Admin\InfoController@saveinfo')->name('save_info');
Route::get('/info_edit/{id}', 'Admin\InfoController@edit_info')->name('edit_info');
Route::get('/info_delete/{id}', 'Admin\InfoController@delete_info')->name('delete_info');
