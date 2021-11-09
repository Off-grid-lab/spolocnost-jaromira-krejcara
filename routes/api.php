<?php

use App\Http\Resources\InfoResource;
use App\Http\Resources\NewsDetailResource;
use App\Http\Resources\NewsListResource;
use App\Models\Faq;
use App\Models\Info;
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
    return NewsListResource::collection(
        News::orderByDesc('datetime')
            ->with('tags')
            ->with('media')
            ->paginate(16)
    );
});

Route::get('/news/{id}', function (Request $request, $id) {
    return new NewsDetailResource(
        News::findOrfail($id)
    );
});

Route::get('/tags', function (Request $request) {
    return Tag::orderByDesc('title')->get();
});

Route::get('/faq', function (Request $request) {
    return Faq::orderBy('lft')->get();
});

Route::get('/infos', function (Request $request) {
    return InfoResource::collection(
        Info::orderBy('lft')
            ->with('media')
            ->get()
    );
});
