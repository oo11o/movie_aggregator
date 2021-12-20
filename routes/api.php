<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Resources\PostResource;
use App\Http\Resources\PostCollection;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/posts/{id}', function($id) {
    return new PostResource(Post::findOrFail($id));
});

Route::get('/posts', function() {
    //dd(Post::all());
    return new PostCollection(Post::paginate());
});