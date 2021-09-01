<?php

namespace App\Http\Controllers\booking;

use App\Http\Controllers\Controller;
use App\Models\booking_now;
use App\Models\categoryFnb;
use App\Models\menu_fnb;
use App\Models\room_meeting;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $room = room_meeting::all();
        $pic_name = "iqbal";
        $pic_email = "iqbal@emai.com";
        $pic_phone = "085718892726";
        $trx = 'TRX-' . mt_rand(000000, 999999);
        return view('Booking.bookNow', [
            'rooms' => $room,
            'name' => $pic_name,
            'email' => $pic_email,
            'phone' => $pic_phone,
            'code' => $trx,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $code = $request->code;
        booking_now::create($data);
        return redirect()->route('detail-book-now', $code);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($code)
    {
        $pic_name = "iqbal";
        $pic_email = "iqbal@emai.com";
        $pic_phone = "085718892726";
        $data = booking_now::with(['room', 'galleries'])->where('code', $code)->get();
        $menu = menu_fnb::with(['category']);
        return view('Booking._editMyBook', [
            'rooms' => $data,
            'menus' => $menu,
            'name' => $pic_name,
            'email' => $pic_email,
            'phone' => $pic_phone,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
