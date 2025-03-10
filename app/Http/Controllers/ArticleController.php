<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categories; 
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact('articles')); 
    }

    public function create()
    {
        $categories = Categories::all(); 
        return view('article.create', compact('categories')); 
    }

    public function store(Request $request)
    {


        Article::create($request->only(['content', 'category_id']));
        return redirect()->route('article.index');
    }

    public function edit($id){}


}
