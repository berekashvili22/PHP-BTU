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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
    return view('guest.form');
});

Route::post('/form', function(Request $req){
    $data=[
        [
            'name'=>$req->post()['name'],
            'lastname'=>$req->post()['lastname'],
            'address'=>$req->post()['address'],
            'bio'=>$req->post()['bio'],
            'date'=>$req->post()['date'],
        ],
    ];
    return view('guest.table',['data'=>$data]);
})->name('test_form');

// Route::get("/testget/{id}")