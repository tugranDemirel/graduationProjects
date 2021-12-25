<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Menu;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        $brands = Brand::all();
        $menu = Menu::where('status', 1)->get();
        return view('Backend.Products.product_create', compact('brands', 'menu'));
    }

    public function create(Request $request)
    {
        dd($request->all());
    }
}
