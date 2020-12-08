<?php

namespace App\Http\Controllers;

use App\k1k4;
use Illuminate\Http\Request;

class K1k4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Laporan.LKG.k1k4');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\k1k4  $k1k4
     * @return \Illuminate\Http\Response
     */
    public function show(k1k4 $k1k4)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\k1k4  $k1k4
     * @return \Illuminate\Http\Response
     */
    public function edit(k1k4 $k1k4)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\k1k4  $k1k4
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, k1k4 $k1k4)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\k1k4  $k1k4
     * @return \Illuminate\Http\Response
     */
    public function destroy(k1k4 $k1k4)
    {
        //
    }
}
