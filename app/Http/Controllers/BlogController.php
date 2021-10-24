<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    public function index(){
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        return view('blog', [
            "title" => 'All Post',
            "blog_post" => Blog::latest()->filter(request(['search', 'category']))->paginate(7),
        ]);
    }

    public function show(Blog $blogs){
        return view('blo', [
            "title" => "Singel Post",
            "blog_post" => $blogs,
        ]);
    }
}
