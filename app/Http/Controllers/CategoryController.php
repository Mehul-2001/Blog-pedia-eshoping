<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function add()
    {
        return view('admin.pages.category.add');
    }
    public function store(CategoryRequest $request)
    {
      // $category = \Request::all();
      // return $category;
      $category = new category;
      $category->name = $request->input('name');
      $category->save();

    return redirect()->route('viewcategory')->with('message','Category Added Successfully');

    }
    // admin views category
    public function view()
    {
      $category=category::all();
      return view('admin.pages.category.view',compact('category'))->with('message','Category Added Successfully');
    }

    

    public function edit($id)
    {
      $category=category::where('id','=',$id)->get();
      return view('admin.pages.category.edit',compact('category'));
    }
    public function editstore(CategoryRequest $request, $id)
    {

        $category = category::find($id);            
      
      $category->name = $request->input('name');
      
        $category->save();
        return redirect()->route('viewcategory')->with('message','Category Updated Successfully');
    }

    public function destroy($id)
    {
      $category = category::find($id);
      $category -> delete();
        return \Redirect() -> back()->with('message','Category Deleted Successfully');
    }
}
