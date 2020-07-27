<?php

namespace App\Http\Controllers;
use App\radiocity;
use Illuminate\Http\Request;

class radiocityController extends Controller
{
    //
    public function index()
    {
        //
        // $radio =Radio::latest()->pagination(5);
         $radiocity =RadioCity::all();
          return view('radiocity.index',compact('radiocity'));
    }
}
