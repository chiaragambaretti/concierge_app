<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home () {
        return view('welcome');
    }

    public function homeservice(){
        $categories = Category::all();

        return view('homeservice', compact('categories'));
    }


}
