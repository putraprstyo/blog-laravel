<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    // public function index(){
    //     return view('categories', [
    //         'title' => 'Blog Categories',
    //         'categories' => Category::all()
    //     ]);
    // }

    public function show(Request $request){
        return view('categories', [
            'title' => "Blog By Category : $request->name",
            'blog_post' => $request->blog,
            'category' => $request->blog->load('category', 'user')
        ]);
    }
}
