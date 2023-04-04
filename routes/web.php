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

Route::get('/about',[TaskController::class,'index']);
/*
Route::post('insert', function (){
  Db::table('task')->insert(['name'=>$_POST('name') , 'created_at'=> now(), 'updated_at'=>now()])
return redirect->back();
});*/




Route::get('index' , function(){
  $task = DB::table('task')->get();  
  return view('tasks',compact('tasks'));
});
