<?php

use App\Http\Controllers\Todoscontroller;
use Illuminate\Routing\Route;
use App\Todo;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', [
'uses' => 'pagescontroller@new'
]);
Route::get('/todos', [
    'uses' => 'Todoscontroller@index',
    'as' => 'todos'
]);

Route::post('/create/todo',[
    'uses' => 'Todoscontroller@store'
    //Todoscontroller::class, 'all'
]);
Route::get('/todos/delete/{id}', [
    'uses' => 'Todoscontroller@delete',
    'as' => 'todo.delete'
]);

Route::get('/todos/update/{id}', [
    'uses' => 'Todoscontroller@index',
    'as' => 'todo.update'
]);

Route::post('/todos/save/{id}', [
    'uses' => 'Todoscontroller@save',
    'as' => 'todo.save'
]);

Route::get('/todos/completed/{id}',[
    'uses'=> 'Todoscontroller@completed',
    'as' => 'todo.completed'
]);