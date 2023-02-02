<?php

use App\Http\Livewire\Front\Blog\FrontPostDetailsComponent;
use App\Http\Livewire\Front\Blog\FrontPostsComponent;
use App\Http\Livewire\Front\Blog\FrontTopicsComponent;
use App\Http\Livewire\Front\Home\FrontHomeComponent;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', FrontHomeComponent::class)->name('home');

Route::get('/blog', FrontTopicsComponent::class)->name('blog');
Route::get('/blog/topics/{topic}', FrontPostsComponent::class)->name('blog.posts');
Route::get('/blog/topics/{topic}/{post}', FrontPostDetailsComponent::class)->name('blog.details');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
