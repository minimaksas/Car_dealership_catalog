<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = 'All cars\' categories';
        $table_name = 'Categories';
        $data = Category::all();
        return view('admin.category.list', compact('page_name', 'data', 'table_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = 'Category creation page';
        return view('admin.category.create', compact('page_name'));
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
          'name' => 'required'
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->action('Admin\CategoryController@index')->with('success', 'Category created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_name = 'Category edit page';
        $category = Category::find($id);
        return view('admin.category.edit', compact('page_name', 'category'));
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
          'name' => 'required'
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect()->action('Admin\CategoryController@index')->with('success', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $category = Category::find($id);
      Category::where('id', $id)->delete();
      return redirect()->action('Admin\CategoryController@index')->with('success', "Category deleted successfully!");
    }
}
