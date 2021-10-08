<?php

namespace App\Http\Controllers;

use App\Models\categoryFacility;
use App\Models\menu_facility;
use Illuminate\Http\Request;

class MenuFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = menu_facility::count();
        $active = menu_facility::where('status', 'ACTIVE')->count();
        $menu = menu_facility::all();
        return view(
            'Facility.facility',
            [
                'menus' => $menu,
                'total' => $total,
                'active' => $active,

            ]
        );
    }

    public function print()
    {
        $data = menu_facility::all();
        return view(
            'Facility.print',
            [
                'data' => $data,

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
        $category = categoryFacility::all();
        return view(
            'Facility._addFacility',
            [
                'category' => $category,
            ]
        );
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
        menu_facility::create($data);
        return redirect()->route('menu-facilities');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = menu_facility::findOrFail($id);
        $category = categoryFacility::all();
        return view(
            'Facility._editFacility',
            [
                'categories' => $category,
                'menu' => $data,
            ]
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
        $menu = menu_facility::findOrFail($id);
        $menu->update($data);
        return redirect()->route('menu-facilities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = menu_facility::findOrFail($id);
        $menu->delete();
        return redirect()->route('menu-facilities');
    }
}
