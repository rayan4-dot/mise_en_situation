<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $article = Article::getAll();
        return view('article.index', compact('artilce'));
    }
    // redirect view("article.index")


    public function create(){
        return redirect()->view('article.create');
    }

        public function store(){

            $article = Article::create();
                }

                public function edit(){
                    return redirect()->view('article.edit');
                }

   
                public function destroy(){

                }
}
 