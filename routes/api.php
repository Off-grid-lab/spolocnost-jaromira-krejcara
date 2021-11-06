<?php

use App\Models\News;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/news', function (Request $request) {
    return News::orderByDesc('datetime')->with('tags')->paginate();
});

Route::get('/news/{id}', function (Request $request, $id) {
    return News::findOrfail($id);
});

Route::get('/tags', function (Request $request) {
    return Tag::orderByDesc('title')->get();
});
