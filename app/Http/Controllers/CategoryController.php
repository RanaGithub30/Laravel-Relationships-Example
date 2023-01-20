<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Auth;

class CategoryController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->title = $request->get('title');
        $category->user()->associate($request->user());

        $category->save();

        return 'Success';
    }

    public function index()
    {
        $categories = Category::where('user_id', Auth::user()->id)->get();
        return view('category.index', compact('categories'));
    }
}