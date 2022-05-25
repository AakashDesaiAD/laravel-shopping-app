<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('categories')->where('is_child', 1)->get();
        return view('admin.product.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        if ($request->hasFile('image_1')) {
            $image_1_name = "product-".rand(11111,99999).".".$request->file('image_1')->getClientOriginalExtension();
            $request->file('image_1')->storeAs('public', $image_1_name);
            $product->image_1 = $image_1_name;
        }

        if ($request->hasFile('image_2')) {
            $image_2_name = "product-".rand(11111,99999).".".$request->file('image_2')->getClientOriginalExtension();
            $request->file('image_2')->storeAs('public', $image_2_name);
            $product->image_2 = $image_2_name;
        }

        if ($request->hasFile('image_3')) {
            $image_3_name = "product-".rand(11111,99999).".".$request->file('image_3')->getClientOriginalExtension();
            $request->file('image_3')->storeAs('public', $image_3_name);
            $product->image_3 = $image_3_name;
        }

        if ($request->hasFile('image_4')) {
            $image_4_name = "product-".rand(11111,99999).".".$request->file('image_4')->getClientOriginalExtension();
            $request->file('image_4')->storeAs('public', $image_4_name);
            $product->image_4 = $image_4_name;
        }

        if ($request->hasFile('image_5')) {
            $image_5_name = "product-".rand(11111,99999).".".$request->file('image_5')->getClientOriginalExtension();
            $request->file('image_5')->storeAs('public', $image_5_name);
            $product->image_5 = $image_5_name;
        }

        $product->title = $request->title;
        $product->desc = $request->desc;
        $product->categoryId = $request->categoryId;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;

        $product->save();
        $message = "Product added successfully";
        return redirect('admin/products')->with('status', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = DB::table('categories')->where('is_child', 1)->get();
        $product = Product::find($id);
        return view('admin.product.edit', ['id' => $id, 'product' => $product, 'categories' => $categories]);
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
        $product = Product::find($id);
        if ($request->hasFile('image_1')) {
            $image_1_name = "product-".rand(11111,99999).".".$request->file('image_1')->getClientOriginalExtension();
            $request->file('image_1')->storeAs('public', $image_1_name);
            $product->image_1 = $image_1_name;
        }

        if ($request->hasFile('image_2')) {
            $image_2_name = "product-".rand(11111,99999).".".$request->file('image_2')->getClientOriginalExtension();
            $request->file('image_2')->storeAs('public', $image_2_name);
            $product->image_2 = $image_2_name;
        }

        if ($request->hasFile('image_3')) {
            $image_3_name = "product-".rand(11111,99999).".".$request->file('image_3')->getClientOriginalExtension();
            $request->file('image_3')->storeAs('public', $image_3_name);
            $product->image_3 = $image_3_name;
        }

        if ($request->hasFile('image_4')) {
            $image_4_name = "product-".rand(11111,99999).".".$request->file('image_4')->getClientOriginalExtension();
            $request->file('image_4')->storeAs('public', $image_4_name);
            $product->image_4 = $image_4_name;
        }

        if ($request->hasFile('image_5')) {
            $image_5_name = "product-".rand(11111,99999).".".$request->file('image_5')->getClientOriginalExtension();
            $request->file('image_5')->storeAs('public', $image_5_name);
            $product->image_5 = $image_5_name;
        }

        $product->title = $request->title;
        $product->desc = $request->desc;
        $product->categoryId = $request->categoryId;
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;

        $product->update();
        $message = "Product updated successfully";
        return redirect('admin/products')->with('status', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = "Product deleted";
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('status', $message);
    }
}
