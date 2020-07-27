<?php

namespace App\Http\Controllers;

use App\radio;
use Illuminate\Http\Request;

class RadioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $radio =radio::all();
        return view('radio.index',['radio'=>$radio]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('radio.create');

        
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
     * @param  \App\radio  $radio
     * @return \Illuminate\Http\Response
     */
    public function show(radio $radio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\radio  $radio
     * @return \Illuminate\Http\Response
     */
    public function edit(radio $radio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\radio  $radio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, radio $radio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\radio  $radio
     * @return \Illuminate\Http\Response
     */
    public function destroy(radio $radio)
    {
        //
    }
}
