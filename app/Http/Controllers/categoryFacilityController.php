<?php

namespace App\Http\Controllers;

use App\Models\categoryFacility;
use Illuminate\Http\Request;

class categoryFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = categoryFacility::all();
        $total = categoryFacility::count();
        $active = categoryFacility::where('status', 'ACTIVE')->count();
        return view(
            'Facility.category',
            [
                'category' => $data,
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
        return view('Facility._addCategory');
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
        categoryFacility::create($data);
        return redirect()->route('category-facilities');
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
        $data = categoryFacility::findOrFail($id);
        return view('Facility._editCategory', [
            'category' => $data
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
        $data = $request->all();
        $category = categoryFacility::findOrFail($id);
        $category->update($data);
        return redirect()->route('category-facilities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = categoryFacility::findOrFail($id);
        $category->delete();
        return redirect()->route('category-facilities');
    }
}
