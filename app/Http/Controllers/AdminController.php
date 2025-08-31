<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
 public function addCategory()
 {
    return view('admin.addCategory');
 }
 public function postaddCategory(Request $request)
 {
    $category = new Category();
    $category->category = $request->input('category');
    $category->save();
    return redirect()->back()->with('success', 'Category added successfully!');
 }

 public function viewCategory()
 {
    $categories = Category::all();
    return view('admin.viewCategory', compact('categories'));
 }

    public function deleteCategory($id)
    {
    $category = Category::find($id);
    if (!$category) {
        return redirect()->back()->with('error', 'Category not found!');
    }
    $category->delete();
    
        return redirect()->back()->with('success', 'Category deleted successfully!');
    }

}
