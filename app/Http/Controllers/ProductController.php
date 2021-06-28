<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Product::all();
        return view('products.index',compact('data'));
    }

    public function addProduct()
    {
        return view('products.create');
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
            'name'=> 'required',   
            'category'=> 'required',
            'price'=> 'required',    
    ]);

    $data = new Product();

    $data->name = $request->name;
    $data->category = $request->category;
    $data->price = $request->price;
    $data->save();

        return back()->with("success", "Product Successfully Added!"); 
    }

    public function showProduct($id)
    {
        $data = Product::findOrFail($id);
        return view('products.show', compact('data'));
    }


    public function editProduct($id)
    {
        $data = Product::findOrFail($id);
        return view ('products.edit', compact('data'));
    }

    public function updateProduct(Request $request, $id)
    {
        $data = Product::findOrFail($id);

        $request->validate([
            'name'=> 'required',
            'category'=> 'required',
            'price'=> 'required',
        ]);

        $data = Product::findOrFail($id);

        $data->name = $request->name;
        $data->category = $request->category;
        $data->price = $request->price;
        $data->save();

        return redirect(route('index.products'))->with("success", 'Product list Successfully Updated!');
    }

    public function deleteProduct($id)
    {
        $data = Product::findOrFail($id);

        $data -> delete();

        return back()-> with("success", 'Product Successfully deleted!');
    }

}
