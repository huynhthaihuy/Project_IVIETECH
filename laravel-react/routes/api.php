<?php

use Illuminate\Http\Request;
use App\User;
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
Route::post('/auth/register', 'Auth\RegisterController@register');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function () {
    return User::all();
});

Route::get('/articles', function () {
    return Article::paginate(50);
});

Route::get('/articles/{id}', function ($id) {
    return Article::findOrFail($id);
});

Route::put('/articles/{id}', function ($id, Request $request) {
    $article = Article::findOrFail($id);

    $article->title = $request->get('title');
    $article->slug = $request->get('slug');
    $article->content = $request->get('content');
    $article->save();

    return response('Article Updated!', 200);
});

Route::delete('/articles/{id}', function ($id) {
    $article = Article::findOrFail($id);

    $article->delete();

    return response('Article Deleted.', 200);
});
Route::put('/users/{id}',function($id, Request $request){
    $user = User::findOrFail($id);

    $user->name = $request->get('name');
    $user->email = $request->get('email');
    $user->password = $request->get('password');
    $user->save();
    
    return response('User updated', 200);
});
Route::delete('/users/{id}',function ($id){
    $user = User::findOrFail($id);
    $user->delete();
    return response('Delete Success', 200);
});

