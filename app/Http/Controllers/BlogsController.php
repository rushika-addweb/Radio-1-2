<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    //
    public function index()
    {
        $blod =Blog::all();
        return view('blogs.index',compact('blogs'));
    }
}
