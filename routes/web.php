<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Mail;

Route::get('/index',[ToDoController::class, 'index']) -> name('all_tasks');
Route::get('/index/criar',[ToDoController::class, 'create']) -> name('create_tasks');
Route::post('/index/criar',[ToDoController::class, 'store']);
Route::delete('/index/{id}',[ToDoController::class, 'destroy']);
Route::post('/index/{id}/editaTask', [ToDoController::class, 'editTask']);

Route::get('/TasksCompletas', [ToDoController::class, 'tasks_complete']);
Route::post('/index/{id}/completarTask', [ToDoController::class, 'complete_task']);

Route::get('/entrar', [LogController::class, 'index']);
Route::POST('/entrar', [LogController::class, 'login']);

Route::get('/registrar', [RegisterController::class, 'create']);
Route::POST('/registrar', [RegisterController::class, 'store']);

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/entrar');
});

Route::get('index/search', [ToDoController::class, 'search']);
Route::get('index/searchComplete', [ToDoController::class, 'searchComplete']);

Route::get('/view-email', function(){
    return new \App\Mail\NewTask(
        'Testando função'
    );
});

Route::get('/enviando-email', function(){

});