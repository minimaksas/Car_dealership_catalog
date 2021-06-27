<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HomePageController extends Controller
{
    public function index(){

        $category_cars = Category::with('cars')->orderBy('id', 'DESC')->limit(5)->get();
        return view('front.home', compact('category_cars'));
    }

    public function token()
    {
      return csrf_token();
    }
}
