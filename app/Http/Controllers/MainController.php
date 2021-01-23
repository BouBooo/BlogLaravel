<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Category;

class MainController extends Controller
{
    public function home() 
    {
        return view('main.home');
    }

    public function index()
    {
        return view('main.articles', [
            'articles' => Article::paginate(4),
            'categories' => Category::all()
        ]);
    }

    public function show($slug)
    {
        return view('main.article', [
            'article' => Article::where('slug', $slug)->firstOrFail()
        ]);
    }
}
