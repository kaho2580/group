<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class SearchController extends Controller
{
    
    public function index(){
        return view('search/index');
    }
    
    public function searchWord(Request $request,Review $review) //requestを使わないとformから送られてきたデータを受け取れない
    {
        $word = $request->input('word');
        $results = Review::where('body', 'LIKE', '%'.$word.'%')->get();
        return view('search/result')->with(['results' => $results]);
    }
  }


    
