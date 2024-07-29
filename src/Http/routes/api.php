<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Eduard\Analitycs\Http\Controllers\Api\Event\Events as EventEvents;
use Eduard\Account\Http\Middleware\CustomValidateToken;

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

Route::middleware([CustomValidateToken::class])->group(function () {
    Route::controller(EventEvents::class)->group(function() {
        Route::post('event/set-value', 'setEvent');
        Route::post('event/get-all', 'getAllEvents');
        Route::post('event/get-all-event-search', 'getAllEventSearch');
        Route::post('event/get-all-event-recommend', 'getAllEventRecommend');
        Route::post('event/get-all-event-custom', 'getAllEventCustom');
        Route::post('event/get-record-rearch-report-month', 'getRecordSearchReportMonth');
        Route::post('event/get-record-search-report-day', 'getRecordSearchReportDay');
        Route::post('event/get-limit-usage-search', 'getLimitUsageSearch');
        Route::post('event/get-limit-usage-batch', 'getLimitUsageBatch');
        Route::post('event/get-limit-usage-event', 'getLimitUsageEvent');
        Route::post('event/get-usage-index-search', 'getUsageIndexSearch');
        Route::post('event/get-usage-index-batch', 'getUsageIndexBatch');
    });
});