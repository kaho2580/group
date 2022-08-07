<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Review;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        return view('categories.index')->with(['reviews' => $category->getByCategory()]);
    }
    
    public function show(Review $review)
    {
        return view('categories.show')->with(['review' => $review]);
    }
    
    public function category(Category $category, Review $review) //こってり、あっさり、高い、安いをそれぞれ表示
    {
        $category_id = $category->id;
        //dd($category_id);
        $reviews = Review::with('category')->where('category_id',$category_id)->get();
        //dd($reviews);
        return view('categories.kotteri')->with(['reviews' => $reviews, 'category' => $category]);  
    }
    
}
