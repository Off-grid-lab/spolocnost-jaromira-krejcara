<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('news', 'NewsCrudController');
    Route::crud('tag', 'TagCrudController');
    Route::crud('faq', 'FaqCrudController');
    Route::crud('info', 'InfoCrudController');
    Route::crud('article', 'ArticleCrudController');
    Route::crud('member', 'MemberCrudController');
    Route::crud('partner', 'PartnerCrudController');
    Route::crud('support', 'SupportCrudController');
    Route::crud('statute', 'StatuteCrudController');
}); // this should be the absolute last line of this file