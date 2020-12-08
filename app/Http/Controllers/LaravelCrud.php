<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaravelCrud extends Controller
{
    //
    function index() {
        return view('crud.index');
    }
    function add(Request $request){
        
        $request->validate([
            'title'=>'required',
            'status'=>'required',
            'date'=>'required'
         ]);

        $query = DB::table('crud')->insert([
            'title'=>$request->input('title'),
            'status'=>$request->input('status'),
            'date'=>$request->input('date')
        ]);
        
        if($query){
            return back()->with('success', 'Data have been successfuly inserted');

        }else{
            return back()->with('fail', 'Something went wrong');
        }
    }
}




        //  return $request->input();