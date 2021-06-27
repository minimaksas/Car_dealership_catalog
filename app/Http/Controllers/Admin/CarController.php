<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = 'All system\'s cars';

        $table_name = 'Cars';
        $data = Car::orderBy('id', 'DESC')->get();
        $categories = Category::orderBy('id', 'DESC')->select('id', 'name')->get();

        return view('admin.cars.list', compact('page_name', 'data', 'table_name', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = 'Car creation page';
        $categories = Category::pluck('name', 'id');

        return view('admin.cars.create', compact('page_name', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Brand'=>'required',
            'Model'=>'required',
            'Price'=>'required',
            'Fuel_type'=>'required',
            'Fuel_tank_capacity'=>'required',
            'Max_speed'=>'required',
            'Color'=>'required',
            'Description'=>'required',
            'category_id'=>'required',
            'img'=>'required',
        ]);

        $cars = new Car();
        $cars->Brand = $request->Brand;
        $cars->Model = $request->Model;
        $cars->Price = $request->Price;
        $cars->Fuel_type = $request->Fuel_type;
        $cars->Fuel_tank_capacity = $request->Fuel_tank_capacity;
        $cars->Max_speed = $request->Max_speed;
        $cars->Color = $request->Color;
        $cars->Description = $request->Description;
        $cars->category_id = $request->category_id;
        $cars->main_image = '';
        $cars->thumb_image = '';
        $cars->list_image = '';

        $slug = $request->Brand . " " . $request->Model . " " . $request->Price;
        $cars->slug = Str::slug($slug, '-');
        $cars->save();

        $file = $request->file('img');
        $extension = $file->getClientOriginalExtension();
        $main_image = 'cars_main_'.$cars->id.'.'.$extension;
        $thumb_image = 'cars_thumb_'.$cars->id.'.'.$extension;
        $list_image = 'cars_list_'.$cars->id.'.'.$extension;
        Image::make($file)->resize(653,569)->save(public_path('/cars/'.$main_image));
        Image::make($file)->resize(360,309)->save(public_path('/cars/'.$list_image));
        Image::make($file)->resize(200,200)->save(public_path('/cars/'.$thumb_image));
        $cars->main_image = $main_image;
        $cars->thumb_image = $thumb_image;
        $cars->list_image =  $list_image;
        $cars->save();

        return redirect()->action('Admin\CarController@index')->with('success', 'Car created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_name = 'Car\'s edit page';
        $cars = Car::find($id);
        $categories = Category::pluck('name', 'id');
        return view('admin.cars.edit', compact('page_name', 'cars', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'Brand'=>'required',
            'Model'=>'required',
            'Price'=>'required',
            'Fuel_type'=>'required',
            'Fuel_tank_capacity'=>'required',
            'Max_speed'=>'required',
            'Color'=>'required',
            'Description'=>'required',
            'category_id'=>'required',
        ]);

        $cars = Car::find($id);
        if($request->file('img')){
            File::delete(public_path('/cars/'.$cars->main_image));
            File::delete(public_path('/cars/'.$cars->thumb_image));
            File::delete(public_path('/cars/'.$cars->list_image));

            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $main_image = 'cars_main_'.$cars->id.'.'.$extension;
            $thumb_image = 'cars_thumb_'.$cars->id.'.'.$extension;
            $list_image = 'cars_list_'.$cars->id.'.'.$extension;
            Image::make($file)->resize(653,569)->save(public_path('/cars/'.$main_image));
            Image::make($file)->resize(360,309)->save(public_path('/cars/'.$list_image));
            Image::make($file)->resize(200,200)->save(public_path('/cars/'.$thumb_image));
            $cars->main_image = $main_image;
            $cars->thumb_image = $thumb_image;
            $cars->list_image =  $list_image;
        }

        $cars->Brand = $request->Brand;
        $cars->Model = $request->Model;
        $cars->Price = $request->Price;
        $cars->Fuel_type = $request->Fuel_type;
        $cars->Fuel_tank_capacity = $request->Fuel_tank_capacity;
        $cars->Max_speed = $request->Max_speed;
        $cars->Color = $request->Color;
        $cars->Description = $request->Description;
        $cars->category_id = $request->category_id;
        $slug = $request->Brand . " " . $request->Model . " " . $request->Price;
        $cars->slug = Str::slug($slug, '-');

        $cars->save();

        return redirect()->action('Admin\CarController@index')->with('success', 'Car updated successfully!');
    }

    public function edit_price($id)
    {
        $page_name = 'Car\'s price edit page';
        $cars = Car::find($id);
        return view('admin.cars.edit_price', compact('page_name', 'cars'));
    }

    public function update_price(Request $request, $id)
    {
        $this->validate($request, [
            'Price'=>'required',
        ]);

        $cars = Car::find($id);
        $cars->Price = $request->Price;
        $slug = $request->Brand . " " . $request->Model . " " . $request->Price;
        $cars->slug = Str::slug($slug, '-');
        $cars->save();

        return redirect()->action('Admin\CarController@index')->with('success', 'Car\'s price updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cars = Car::find($id);

        File::delete(public_path('/cars/'.$cars->main_image));
        File::delete(public_path('/cars/'.$cars->thumb_image));
        File::delete(public_path('/cars/'.$cars->list_image));

        Car::where('id', $id)->delete();
        return redirect()->action('Admin\CarController@index')->with('success',"Car removed successfully!");
    }

}
