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

    // 데이터를 뷰에 보내는 여러가지 방법들

    // 권장되는 방법
    // return view('welcome')->with([
    //     'foo' => 'bar',
    //     'tasks' => ['some task']
    // ]);

    // 그외의 방법 1
    // return view('welcome')->withTasks($tasks)->withFoo('foo');

    // 그외의 방법 2
    $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to work',
        'Go to the concert'
    ];       

    return view('welcome'. [
        'tasks' => $tasks,
        'foo' => request('title'),
        'script' => '<script>alert("foobar")</script>'
    ]);

    
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});