<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Car;
use Auth;

class DetailsPageController extends Controller
{
    public function index($slug){

        $car = Car::where('slug',$slug)->first();
        $same_category_cars = Car::where('id','!=', $car->id)->where('category_id',$car->category_id)->orderBy('id','DESC')->limit(4)->get();
        $category = Category::where('id', $car->category_id)->select('name')->get();

       	return view('front.details',compact('same_category_cars', 'car', 'category'));
   }

}
