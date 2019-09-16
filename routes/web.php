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
    return view('welcome');
});

Auth::routes();

Route::get('dashboard','HomeController@index')->name('dashboard');
Route::group(['middleware'=>'auth'], function () {
    Route::get(
        'button',
        function () {
            return view('admin.button');
        }
    )->name('button');
    Route::get(
        'notifications',
        function () {
            return view('admin.notifications');
        }
    )->name('notifications');
    Route::get(
        'badges',
        function () {
            return view('admin.badges');
        }
    )->name('badges');
    Route::get(
        'tabs',
        function () {
            return view('admin.tabs');
        }
    )->name('tabs');
    Route::get(
        'socialButton',
        function () {
            return view('admin.socialButton');
        }
    )->name('socialButton');
    Route::get(
        'cards',
        function () {
            return view('admin.cards');
        }
    )->name('cards');
    Route::get(
        'alerts',
        function () {
            return view('admin.alerts');
        }
    )->name('alerts');
    Route::get(
        'bars',
        function () {
            return view('admin.bars');
        }
    )->name('bars');
    Route::get(
        'modals',
        function () {
            return view('admin.modals');
        }
    )->name('modals');
    Route::get(
        'switches',
        function () {
            return view('admin.switches');
        }
    )->name('switches');
    Route::get(
        'grids',
        function () {
            return view('admin.grids');
        }
    )->name('grids');
    Route::get(
        'typography',
        function () {
            return view('admin.typography');
        }
    )->name('typography');
    Route::get(
        'datatables',
        function () {
            return view('admin.datatables');
        }
    )->name('datatables');
    Route::get(
        'basictables',
        function () {
            return view('admin.basictables');
        }
    )->name('basictables');
    Route::get(
        'basicforms',
        function () {
            return view('admin.basicform');
        }
    )->name('basicform');
    Route::get(
        'advancedforms',
        function () {
            return view('admin.advancedform');
        }
    )->name('advancedform');
    Route::get(
        'fontAwesome',
        function () {
            return view('admin.fontawesome');
        }
    )->name('fontAwesome');
    Route::get(
        'themefy',
        function () {
            return view('admin.themify');
        }
    )->name('themefy');
    Route::get(
        'Widgets',
        function () {
            return view('admin.widgets');
        }
    )->name('Widgets');
    Route::get(
        'Chartjs',
        function () {
            return view('admin.chartjs');
        }
    )->name('Chartjs');
    Route::get(
        'FloatChart',
        function () {
            return view('admin.floatchart');
        }
    )->name('floatChart');
    Route::get(
        'peitychart',
        function () {
            return view('admin.peitychart');
        }
    )->name('peitychart');
    Route::get(
        'gmap',
        function () {
            return view('admin.gmap');
        }
    )->name('gmap');
    Route::get(
        'vectormap',
        function () {
            return view('admin.vectormap');
        }
    )->name('vectormap');
    Route::group(['prefix'=>'module'], function(){
        Route::get('index','QuanTriHeThong\Module\QlmodulesController@index')->name('QuanTriHeThong.Module.Module.index');
        Route::get('/del/{id}', 'QuanTriHeThong\Module\QlmodulesController@destroy')->name('QuanTriHeThong.Module.Module.destroy');
        Route::get('/edit/{id}', 'QuanTriHeThong\Module\QlmodulesController@edit')->name('QuanTriHeThong.Module.Module.edit');
        Route::post('/update/{id}', 'QuanTriHeThong\Module\QlmodulesController@update')->name('QuanTriHeThong.Module.Module.update');
        Route::get('/create', 'QuanTriHeThong\Module\QlmodulesController@create')->name('QuanTriHeThong.Module.Module.create');
        Route::post('/add', 'QuanTriHeThong\Module\QlmodulesController@store')->name('QuanTriHeThong.Module.Module.add');
    });
    
    Route::group(['prefix'=>'controller'], function(){
        Route::get('index','QuanTriHeThong\Controller\QlControllerController@index')->name('QuanTriHeThong.controller.controller.index');
        Route::get('/create', 'QuanTriHeThong\Controller\QlControllerController@create')->name('QuanTriHeThong.controller.controller.reate');
        Route::post('/add', 'QuanTriHeThong\Controller\QlControllerController@store')->name('QuanTriHeThong.controller.controller.add');
        Route::get('/del/{id}', 'QuanTriHeThong\Controller\QlControllerController@destroy')->name('QuanTriHeThong.controller.controller.destroy');
        Route::get('/edit/{id}', 'QuanTriHeThong\Controller\QlControllerController@edit')->name('QuanTriHeThong.controller.controller.edit');
        Route::post('/update/{id}', 'QuanTriHeThong\Controller\QlControllerController@update')->name('QuanTriHeThong.controller.controller.update');
    });
    Route::group(['prefix'=>'action'], function(){
        Route::get('index','QuanTriHeThong\Action\QlactionController@index')->name('QuanTriHeThong.Action.Action.index');
        Route::get('/create', 'QuanTriHeThong\Action\QlactionController@create')->name('QuanTriHeThong.Action.Action.create');
        Route::post('/add', 'QuanTriHeThong\Action\QlactionController@store')->name('QuanTriHeThong.Action.Action.add');
        Route::get('/del/{id}', 'QuanTriHeThong\Action\QlactionController@destroy')->name('QuanTriHeThong.Action.Action.destroy');
        Route::get('/edit/{id}', 'QuanTriHeThong\Action\QlactionController@edit')->name('QuanTriHeThong.Action.Action.edit');
        Route::post('/update/{id}', 'QuanTriHeThong\Action\QlactionController@update')->name('QuanTriHeThong.Action.Action.update');
    });
    }
);

