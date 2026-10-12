<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/test', function () {
    return 'Halo, route berfungsi!';
});

Route::resource('posts', PostController::class)->names([
    'index'   => 'posts.index',
    'create'  => 'posts.create',
    'store'   => 'posts.store',
    'show'    => 'posts.show',
    'edit'    => 'posts.edit',
    'update'  => 'posts.update',
    'destroy' => 'posts.destroy',
]);

Route::get('/', function () {
    return redirect()->route('posts.index');
});