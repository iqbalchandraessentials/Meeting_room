<?php

namespace App\Http\Controllers;

use App\Models\categoryFnb as ModelsCategoryFnb;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class categoryFNBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = ModelsCategoryFnb::count();
        $active = ModelsCategoryFnb::where('status', 'ACTIVE')->count();
        $category = ModelsCategoryFnb::all();
        return view(
            'FnB.category',
            [
                'categories' => $category,
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
        return view('FnB._addCategory');
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
        ModelsCategoryFnb::create($data);
        return redirect()->route('category');
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
        $data = ModelsCategoryFnb::findOrFail($id);
        return view(
            'FnB._editCategory',
            [
                'category' => $data
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
        $category = ModelsCategoryFnb::findOrFail($id);
        $category->update($data);
        return redirect()->route('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = ModelsCategoryFnb::findOrFail($id);
        $category->delete();
        return redirect()->route('category');
    }
}
