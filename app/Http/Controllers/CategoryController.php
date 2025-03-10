<?php 

namespace App\Http\Controllers;
use App\Models\Categories;  
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Categories::all(); 
        return view('category.index', compact('categories')); 
    }

    public function create()
    {
        return view('category.create'); 
    }

    public function store(Request $request)
    {
        $category = Categories::create($request->only('name')); 
        return redirect()->route('category.index'); 
    }
}
