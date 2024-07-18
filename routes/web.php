<?php


use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');
    });

 //Route::get('/comment_replies', function () {
    return view('comment_replies');
    //});
 //Route::get('/post_comments', function () {
    return view('post_comments');
   // });
 //Route::get('/posts', function () {
    return view('posts');
   // });

//Route::resource('post_comments', [Controllers::class, 'index']);
//Route::resource('comments_replies', [Controllers::class, 'create']);
//Route::resource('posts', [Controllers::class, 'index']);

//Route::resource('posts', Controllers::class);
//Route::resource('post_comments', Controllers::class);

Route::resource('comment_replies', Controllers::class);