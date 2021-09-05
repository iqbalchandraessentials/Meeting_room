<?php

use App\Http\Controllers\booking\BookingController;
use App\Http\Controllers\RoomMeetingController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('rooms-meeting', [RoomMeetingController::class, 'apiDetail']);
Route::get('menu-fnb', [BookingController::class, 'apiMenuFnb']);
Route::get('placeholder-fnb', [BookingController::class, 'apiNotesFnb']);
