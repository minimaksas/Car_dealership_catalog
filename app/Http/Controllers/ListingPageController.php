<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class ListingPageController extends Controller
{
    public function index(){
        return view('front.listing', compact('posts'));
    }

    public function listing($id) {
        $cars = Car::where('category_id', $id)->orderBy('id', 'DESC')->paginate(4);
        return view('front.listing', compact('cars'));
    }
}
