<?php
namespace App\Http\Controllers;
use App\Models\Product;
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
        $category           = new Category();
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
        if (! $category) {
            return redirect()->back()->with('error', 'Category not found!');
        }
        $category->delete();

        return redirect()->back()->with('success', 'Category deleted successfully!');
    }

    public function editCategory($id)
    {
        $category = Category::find($id);
        return view('admin.updateCategory', compact('category'));
      


    }

    public function updateCategory(Request $request, $id)
    {
        $category = Category::find($id);
        $category->category = $request->input('category');
        $category->save();

        return redirect()->back()->with('success', 'Category updated successfully!');
    }
    public function addProduct()
    {
        $categories = Category::all();
        return view('admin.addProduct' , compact('categories'));
    }

    public function postaddProduct(Request $request)
    {
        $product= new Product();
        $product->product_title = $request->input('product_title');
        $product->product_price = $request->input('product_price');
        $product->product_description = $request->input('product_description');
        $product->product_quntity = $request->input('product_quntity');
        
        if ($request->hasFile('product_image')) {
            $file      = $request->file('product_image');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/products/', $filename);
            $product->product_image = $filename;
        }
        $product->product_category = $request
            ->input('product_category');
        $product->save();

        return redirect()->back()->with('success', 'Product added successfully!');
    }
}
