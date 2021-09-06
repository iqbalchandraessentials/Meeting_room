<?php

use App\Http\Controllers\categoryFNB;
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

Route::get('/', function () {
    return view('Auth.login');
});
Route::get('/Auth/forgot', function () {
    return view('Auth.forgot');
});

// HOME
Route::get('/dashboard', function () {
    return view('Dashboard.index');
});




// MEETING ROOM

Route::get('/meeting-room', [App\Http\Controllers\RoomMeetingController::class, 'index'])->name('meeting-room');
Route::get('/meeting-room/create', [App\Http\Controllers\RoomMeetingController::class, 'create'])->name('add-meeting-room');
Route::post('/meeting-room/store', [App\Http\Controllers\RoomMeetingController::class, 'store'])->name('store-meeting-room');
Route::get('/meeting-room/{id}', [App\Http\Controllers\RoomMeetingController::class, 'destroy'])->name('delete-meeting-room');
Route::get('/meeting-room/edit/{id}', [App\Http\Controllers\RoomMeetingController::class, 'detail'])->name('edit-meeting-room');
Route::post('/meeting-room/update/{id}', [App\Http\Controllers\RoomMeetingController::class, 'update'])->name('update-meeting-room');


Route::post('/meeting-room/photo/update', [App\Http\Controllers\RoomMeetingController::class, 'uploadGallery'])->name('update-photo-meeting-room');
Route::get('/meeting-room/delete/photo/{id}', [App\Http\Controllers\RoomMeetingController::class, 'deleteGallery'])->name('meeting-room-gallery-delete');

// facility

// menu
Route::get('/facilities/menu', [App\Http\Controllers\MenuFacilityController::class, 'index'])->name('menu-facilities');
Route::get('/facilities/menu/create', [App\Http\Controllers\MenuFacilityController::class, 'create'])->name('add-menu-facilities');
Route::post('/facilities/menu/store', [App\Http\Controllers\MenuFacilityController::class, 'store'])->name('store-menu-facilities');
Route::get('/facilities/menu/{id}', [App\Http\Controllers\MenuFacilityController::class, 'destroy'])->name('delete-menu-facilities');
Route::get('/facilities/menu/edit/{id}', [App\Http\Controllers\MenuFacilityController::class, 'edit'])->name('edit-menu-facilities');
Route::post('/facilities/menu/update/{id}', [App\Http\Controllers\MenuFacilityController::class, 'update'])->name('update-menu-facilities');


// category
Route::get('/facilities/category', [App\Http\Controllers\categoryFacilityController::class, 'index'])->name('category-facilities');
Route::get('/facilities/category/create', [App\Http\Controllers\categoryFacilityController::class, 'create'])->name('add-category-facilities');
Route::post('/facilities/category/store', [App\Http\Controllers\categoryFacilityController::class, 'store'])->name('store-category-facilities');
Route::get('/facilities/category/{id}', [App\Http\Controllers\categoryFacilityController::class, 'destroy'])->name('delete-category-facilities');
Route::get('/facilities/category/edit/{id}', [App\Http\Controllers\categoryFacilityController::class, 'edit'])->name('edit-category-facilities');
Route::post('/facilities/category/update/{id}', [App\Http\Controllers\categoryFacilityController::class, 'update'])->name('update-category-facilities');





// ACTIVITY

Route::get('/book-now', [App\Http\Controllers\booking\BookingController::class, 'index'])->name('book-now');
Route::post('/book-now/store', [App\Http\Controllers\booking\BookingController::class, 'store'])->name('store-book-now');
Route::get('/book-now/detail/{id}', [App\Http\Controllers\booking\BookingController::class, 'detail'])->name('detail-book-now');
Route::post('/book-now/update/{id}', [App\Http\Controllers\booking\BookingController::class, 'update'])->name('update-book-now');
Route::post('/book-now/fnb/store', [App\Http\Controllers\booking\BookingController::class, 'storeMenuFnb'])->name('fnbStore-book-now');
Route::get('/book-now/deleteFNB/{id}', [App\Http\Controllers\booking\BookingController::class, 'deleteFNB'])->name('deleteFNB-book-now');

// TRANSACTION
Route::get('/booking-list', [App\Http\Controllers\booking\BookingController::class, 'booking_list'])->name('booking-list');
Route::get('/booking-list/view', function () {
    return view('Transaction._viewBookingList');
});
Route::get('/visitor', function () {
    return view('Transaction.visitor');
});


Route::get('/book-now/book', function () {
    return view('Booking._book');
});
Route::get('/my-booking', function () {
    return view('Booking.myBooking');
});
Route::get('/my-booking/tableActive', function () {
    return view('Booking._tableActiveBook');
});
Route::get('/my-booking/tableDone', function () {
    return view('Booking._tableDoneBook');
});
Route::get('/my-booking/view', function () {
    return view('Booking._viewMyBook');
});
Route::get('/my-booking/edit', function () {
    return view('Booking._editMyBook');
});
Route::get('/my-booking/rearange', function () {
    return view('Booking._rearangeMyBook');
});


// MEETING PAGE
// Route::get('/device-control', function () {
//     return view('MeetingPage.deviceControl');
// });





// FOOD & BEVERAGE

// menu
Route::get('/foodandbaverages/menu', [App\Http\Controllers\menuFnBController::class, 'index'])->name('menu');
Route::get('/foodandbaverages/menu/create', [App\Http\Controllers\menuFnBController::class, 'create'])->name('add-menu');
Route::post('/foodandbaverages/menu/store', [App\Http\Controllers\menuFnBController::class, 'store'])->name('store-menu');
Route::get('/foodandbaverages/menu/{id}', [App\Http\Controllers\menuFnBController::class, 'destroy'])->name('delete-menu');

Route::get('/foodandbaverages/menu/edit/{id}', [App\Http\Controllers\menuFnBController::class, 'edit'])->name('edit-menu');
Route::post('/foodandbaverages/menu/update/{id}', [App\Http\Controllers\menuFnBController::class, 'update'])->name('update-menu');

// categories
Route::get('/foodandbaverages/categories', [App\Http\Controllers\categoryFNBController::class, 'index'])->name('category');
Route::get('/foodandbaverages/categories/addCategory', [App\Http\Controllers\categoryFNBController::class, 'create'])->name('addCategory');
Route::post('/foodandbaverages/categories/storeCategory', [App\Http\Controllers\categoryFNBController::class, 'store'])->name('storeCategory');

Route::get('/foodandbaverages/categories/editCategory/{id}', [App\Http\Controllers\categoryFNBController::class, 'edit'])->name('editCategory');
Route::post('/foodandbaverages/categories/updateCategory/{id}', [App\Http\Controllers\categoryFNBController::class, 'update'])->name('updateCategory');
Route::get('/foodandbaverages/categories/{id}', [App\Http\Controllers\categoryFNBController::class, 'destroy'])->name('deleteCategory');





// REPORT
Route::get('/report', function () {
    return view('Report.index');
});

// UTILITIES
Route::get('/my-profile', function () {
    return view('Account.index');
});

Route::get('/user', function () {
    return view('User.index');
});
Route::get('/user/add', function () {
    return view('User._add');
});
Route::get('/user/edit', function () {
    return view('User._edit');
});
