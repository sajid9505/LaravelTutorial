<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Article;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('articles', "App\Http\Controllers\ArticleController@index");

Route::get('articles/{id}', function($id){
    return Article::find($id);
});

Route::post('articles', function(Request $request){
    return Article::create($request->all);
});

Route::put('articles/{id}', function(Request $request, $id){
    $article = Article::findOrFail($id);
    $article->update($request->all());
});

Route::delete('articles/{id}', function($id){
    Article::find($id)->delete();

    return 204;
});


