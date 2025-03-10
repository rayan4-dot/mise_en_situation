<?php

namespace App\Http\Controllers;
use App\Models\Categories;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Categories::getAll();
        return view('category.index');
    }


    public function create(){

    }

    public function store(){
        $categories = Categories::create();
    }
}
