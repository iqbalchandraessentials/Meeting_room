<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Models\menu_facility;
use App\Models\menu_fnb;
use App\Models\room_galery;
use App\Models\room_meeting;
use Illuminate\Http\Request;

class RoomMeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = room_meeting::all();
        $total = room_meeting::count();
        $active = room_meeting::where('status', 'ACTIVE')->count();
        return view(
            'MeetingRoom.index',
            [
                'data' => $data,
                'total' => $total,
                'active' => $active,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facility = menu_facility::all();
        return view('MeetingRoom._add', [
            'facilities' => $facility,
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
        if ($request->hours_availibility == "99") {
            $awal = $request->startHour;
            $akhir = $request->untillHour;
            $data['hours_availibility'] = $awal . ',' . $akhir;
        }
        if ($request->days_availibility == "99") {
            $customDay = $request->customDay;
            $columns = implode(", ", $customDay);
            $data['days_availibility'] = $columns;
        }
        $facilitas = $request->facility;
        $fasilitas = implode(',', $facilitas);
        $data['facility'] = $fasilitas;
        // dd($data);
        $room = room_meeting::create($data);


        $galllery = [
            'room_id' => $room->id,
            'photos' => $request->file('photo')->store('assets/room', 'public')
        ];

        room_galery::create($galllery);

        return redirect()->route('meeting-room');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail(Request $request, $id)
    {
        $products = room_meeting::with((['galleries']))->where('id', $id)->get();
        $categories = menu_facility::all();
        return view(
            'MeetingRoom._edit',
            [
                'menus' => $products,
                'facilities' => $categories
            ]
        );
    }


    public function apiDetail(Request $request)
    {
        $id = $request->input('id');
        $products = room_meeting::with((['galleries']))->find($id);

        if ($products)
            return ResponseFormatter::success(
                $products,
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
        $data = $request->all();
        if ($request->hours_availibility == "99") {
            $awal = $request->startHour;
            $akhir = $request->untillHour;
            $data['hours_availibility'] = $awal . ',' . $akhir;
        }

        if ($request->days_availibility == "99") {
            $customDay = $request->customDay;
            $columns = implode(", ", $customDay);
            $data['days_availibility'] = $columns;
        }
        if ($request->facility) {
            $facilitas = $request->facility;
            $fasilitas = implode(',', $facilitas);
            $data['facility'] = $fasilitas;
        }

        $menu = room_meeting::findOrFail($id);
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
        $data = room_meeting::findOrFail($id);
        $data->delete();
        return redirect()->route('meeting-room');
    }



    public function deleteGallery(Request $request, $id)
    {
        $item = room_galery::findOrFail($id);
        $item->delete();
        return redirect()->route('edit-meeting-room', $item->room_id);
    }

    public function uploadGallery(Request $request)
    {
        $data = $request->all();

        $data['photos'] = $request->file('photos')->store('assets/product', 'public');

        room_galery::create($data);
        return redirect()->route('edit-meeting-room', $request->room_id);
    }
}
