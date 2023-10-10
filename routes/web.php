<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\mysingleactionController;
use App\Http\Controllers\resourceController;
use App\Http\Controllers\formController;
use App\Http\Controllers\teacherController;
use Illuminate\Http\Request;
use App\Http\Controllers\STMPComtroller;

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
Route::get('/footer',function(){
return view('footer');
});


// Route::get('/main',[FirstController::class , 'mainhome']);
// Route::get("/about",[FirstController::class,'abouthome']);
// Route::get("/",[FirstController::class,'openhome']);
// Route::get('/' ,mysingleactionController::class);
Route::resource('resource',resourceController::class);
///////////////////////////////// teacher 
Route::get('/',[teacherController::class,'index']);
Route::post('/',[teacherController::class,'store']);
Route::get('/teacher/view',[teacherController::class,'create']);
Route::get('/teacher/delete/{id}',[teacherController::class,'destroy']);
Route::get('/teacher/update/{id}',[teacherController::class,'edit']);
Route::post('/teacher/update/{id}',[teacherController::class,'update']);
Route::get('/teacher/status/{id}',[teacherController::class,'statusupdate']);

// forms post and get



// Route::get('/rigister',[formController::class , 'form']);
// Route::post('/rigister',[formController::class,'forminsert']);


//////////// session 
Route::get("/getsession",function(Request $request){
              $request->session()->put('name','Faiza');
            // session(['name'=>'Faizzzqn']);
            // session(['Email'=>'fa921865@gmail.com']);
            // session(['class'=>'12th']);
            // session(['Age'=>'18']);
        $session = session()->all();
        {{printarray($session);}}
        
});
Route::get('/forgetsession',function(){
        // session()->forget('name');
        // session()->forget(['Email','class','Age']);
        // session()->flush();
        
        return  redirect('/getsession');
});
Route::get('/flush',function(){
    session()->flush();
    return  redirect('/getsession');

});

Route::get('/mail',[STMPComtroller::class,'mailsending']);


