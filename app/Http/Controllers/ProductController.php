<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;


class ProductController extends Controller
{
    public function show(int $id)
    {
        $curentCategory = Category::find($id);
        if ($curentCategory->is_child) {
            $products = DB::table('products')->where('categoryId', $id)->get();
        }
        else {
            $ids = []; 
            $subCategory = DB::table('categories')->where('parent_id', $id)->get();
            foreach ($subCategory as $key => $value) {
                $ids[] = $value->id;
            }
            $products = DB::table('products')->whereIn('categoryId', $ids)->get();
        } 
        $category = DB::table('categories')->where('is_child', false)->get();
        $subCategory = DB::table('categories')->where('parent_id', $id)->get();
        return view('category', ['products' => $products, 'category' => $category, 'subCategory' => $subCategory]);
    }

    public function productView($id)
    {
        $product = Product::find($id);
        return view('product', ['product' => $product]);   
    }
}
