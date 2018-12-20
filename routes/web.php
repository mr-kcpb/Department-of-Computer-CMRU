<?php

Route::get('/', 'FrontController@index')->name('index');
Route::get('course', 'FrontController@course')->name('course');
Route::get('news', 'FrontController@news')->name('news');
Route::get('personal', 'FrontController@personal')->name('personal');
Route::get('contact', 'FrontController@contact')->name('contact');

Route::prefix('department')->group(function () {
    Route::get('1', 'DepartmentPagesController@page_1')->name('department.1');
    Route::get('2', 'DepartmentPagesController@page_2')->name('department.2');
    Route::get('3', 'DepartmentPagesController@page_3')->name('department.3');
    Route::get('4', 'DepartmentPagesController@page_4')->name('department.4');
    Route::get('5', 'DepartmentPagesController@page_5')->name('department.5');
    Route::get('6', 'DepartmentPagesController@page_6')->name('department.6');
    Route::get('7', 'DepartmentPagesController@page_7')->name('department.7');
    Route::get('8', 'DepartmentPagesController@page_8')->name('department.8');
    Route::get('9', 'DepartmentPagesController@page_9')->name('department.9');
    Route::get('10', 'DepartmentPagesController@page_10')->name('department.10');
    Route::get('11', 'DepartmentPagesController@page_11')->name('department.11');
    Route::get('12', 'DepartmentPagesController@page_12')->name('department.12');
    Route::get('13', 'DepartmentPagesController@page_13')->name('department.13');
    Route::get('14', 'DepartmentPagesController@page_14')->name('department.14');
    Route::get('15', 'DepartmentPagesController@page_15')->name('department.15');
    Route::get('16', 'DepartmentPagesController@page_16')->name('department.16');
    Route::get('17', 'DepartmentPagesController@page_17')->name('department.17');
    Route::get('18', 'DepartmentPagesController@page_18')->name('department.18');
});
