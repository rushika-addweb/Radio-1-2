<?php

namespace App\Http\Controllers;

use App\red;
use Illuminate\Http\Request;

class RedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reds =red::all();
        return view('red.index',['red'=>$reds]);
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
     * @param  \App\red  $red
     * @return \Illuminate\Http\Response
     */
    public function show(red $red)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\red  $red
     * @return \Illuminate\Http\Response
     */
    public function edit(red $red)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\red  $red
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, red $red)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\red  $red
     * @return \Illuminate\Http\Response
     */
    public function destroy(red $red)
    {
        //
    }
}
