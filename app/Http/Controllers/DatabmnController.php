<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Databmn;
use Illuminate\Support\Facades\DB;

class DatabmnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Databmn::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Databmn::find($id);
    }

    public function showbyidbarang($nomorbmn)
    {
        $barang = DB::table('databmns')->where(function ($query) use ($nomorbmn) 
                    {
                        $query->where('nomorbmn', '=', $nomorbmn);
                    })->get();

        // return json_encode($barang, JSON_PRETTY_PRINT);
        return collect($barang);
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
