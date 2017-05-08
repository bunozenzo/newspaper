<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index(){

    }
    public function getlist(){
        $categories = Category::all();
        return view('admin.category.list', compact('categories'));
    }

}
