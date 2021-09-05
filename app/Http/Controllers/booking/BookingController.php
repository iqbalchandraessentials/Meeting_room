<?php

namespace App\Http\Controllers\booking;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\booking_now;
use App\Models\categoryFnb;
use App\Models\fnb_orders;
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

    public function storeMenuFnb(Request $request)
    {
        $data = $request->all();
        $code = $request->id_book;
        fnb_orders::create($data);
        return redirect()->route('detail-book-now', $code);
    }

    public function deleteFNB(Request $request, $id)
    {
        $item = fnb_orders::findOrFail($id);
        $item->delete();
        return redirect()->route('detail-book-now', $item->id_book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($code)
    {
        $pic_name = "iqbal chandra dewangga";
        $pic_email = "iqbalchandra96@emai.com";
        $pic_phone = "085718892726";
        $data = booking_now::with(['room', 'menuFNB'])->where('code', $code)->get();
        $menu = categoryFnb::all();
        // dd($data);
        return view('Booking._editMyBook', [
            'rooms' => $data,
            'menus' => $menu,
            'name' => $pic_name,
            'email' => $pic_email,
            'phone' => $pic_phone,
        ]);
    }

    public function apiMenuFnb(Request $request)
    {
        $id = $request->input('search');
        $menu = menu_fnb::where('id_category', $id)->get();

        if ($menu)
            return ResponseFormatter::success(
                $menu,
                'Data produk berhasil diambil'
            );
        else
            return ResponseFormatter::error(
                null,
                'Data kategori produk tidak ada',
                404
            );
    }

    public function apiNotesFnb(Request $request)
    {
        $id = $request->input('search');
        $menu = menu_fnb::findOrFail($id);

        if ($menu)
            return ResponseFormatter::success(
                $menu,
                'Data produk berhasil diambil'
            );
        else
            return ResponseFormatter::error(
                null,
                'Data kategori produk tidak ada',
                404
            );
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
        $data['description'] = $request->description;
        $menu = booking_now::findOrFail($id);
        $menu->update($data);
        return redirect()->route('meeting-room');
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
