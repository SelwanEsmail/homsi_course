<?php

use App\Http\Controllers\ComputerController;
use App\Http\Controllers\StaticController;
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

Route::get('/',[StaticController::class,'index'] )->name('home.index');
Route::get('/about',[StaticController::class,'about'] )->name('home.about');
Route::get('/info',[StaticController::class,'info'] )->name('home.info');
Route::resource('computers', ComputerController::class);

/***---------1------------- */
/*Route::get('/about', function () {
    $filter = request('style');
    if(isset($filter))
    {
        //step 1
        //return 'this page view <span style="color:red">'.$filter.'</span>';
         //step 2
        return 'this page view <span style="color:red">'.strip_tags($filter).'</span>';
        
    }
    return 'this page view <span style="color:red">all products</span>';
});*/

Route::get('/about/{category?}/{item?}', function ($category=null,$item=null) {
    if(isset($category))
    {
        if(isset($item))
        return $item;
    }
    return $category;
    //return "<h1> hi $category and $item </h1>";
});
