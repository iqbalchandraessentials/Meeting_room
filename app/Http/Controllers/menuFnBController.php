<?php

namespace App\Http\Controllers;

use App\Models\categoryFnb;
use App\Models\menu_fnb;
use Illuminate\Http\Request;

class menuFnBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = menu_fnb::count();
        $active = menu_fnb::where('status', 'ACTIVE')->count();
        $menu = menu_fnb::all();
        return view(
            'FnB.menu',
            [
                'menus' => $menu,
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
        $category = categoryFnb::all();
        return view(
            'FnB._addMenu',
            [
                'category' => $category
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
        menu_fnb::create($data);
        return redirect()->route('menu');
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
        $data = menu_fnb::findOrFail($id);
        $category = categoryFnb::all();
        return view(
            'FnB._editMenu',
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
        $menu = menu_fnb::findOrFail($id);
        $menu->update($data);
        return redirect()->route('menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = menu_fnb::findOrFail($id);
        $menu->delete();
        return redirect()->route('menu');
    }
}
