<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class CollectionController extends Controller
{
    //
    public function index()
    {
        $users =User::all();
       
        // return view('collection');

        // $collection = collect([
        //     ['product'=>'Desk','price'=>'200'],
        //     ['product'=>'Chair','price'=>'300'],
        //     ['product'=>'table','price'=>'500'],
        // ]);
        // dd($collection->contains('price',200));

        // $coll = collect([1,2,3,4,5,6,7]);
        // $arr =[2,4,5];
        // $diff =$coll->diff($arr);

        // dd($diff);

        //  $collection = collect(['product_id'=>1,'price'=>100,'discount'=>false]);
        //  $filter =$collection->except(['discount']);
        //  dd($filter);

        //  $collection = collect(['product_id'=>1,'price'=>100,'discount'=>false]);
        //  $filter =$collection->except(['discount']);
        //  dd($filter);

        //  $users = $users->intersect(User::whereIn('id', [1, 2, 3])->get());
         return $users;

        //  $users->modelKeys();
        //$users = $users->makeVisible(['id', 'name']);
        $users = $users->only([1, 2, 3]);
    }
    
}
