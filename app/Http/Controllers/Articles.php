<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class Articles extends Controller
{
    //
    function list()
    {
        $data= Article::
        orderBy('id','desc')
        ->get();        
        return view('articleview', ['data'=>$data]);
    }
}
