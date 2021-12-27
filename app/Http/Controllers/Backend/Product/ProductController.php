<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Menu;
use App\Models\Product;
use Delight\Random\Random;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function show()
    {
        $brands = Brand::all();
        $menus = Menu::where('status', 1)->get();
        return view('Backend.Products.product_create', compact('brands', 'menus'));
    }

    public function create(Request $request)
    {

        $product = new Product;

        $product->title = $request->title;
        $product->slug = Str::slug($request->title).'-'.Random::alphanumericHumanString(10);
        $product->about = $request->about;
        $product->description = $request->description;
        $product->keywords = $request->keywords;
        $product->hash = Random::alphaLowercaseHumanString(28);
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->stock = 10;
        $product->menu_id = $request->menu;
        $product->brand_id = $request->brand;
        $product->code = $request->code;
        $product->status = 1;
        $product->hit = 0;

        if ($request->hasFile('images'))
        {
            $imageName = Str::slug($request->title, '-') . '-' . rand(1200, 199999) . '.' . $request->images->extension(); // getClientOriginalExtension()
            $request->images->move(public_path('uploads/products/'), $imageName);
            $product->images = 'products'.$imageName;
        }
        $product->save();
        toastSuccess('Ekleme işlemi başarılı bir şekilde gerçekleştirilmiştir.');
        return redirect()->route('admin.index');
    }

    // URUN LISTESI

    public function list()
    {
        $products = Product::all();
        return view('Backend.Products.product_list', compact('products'));
    }

    // URUN EDIT

    public function edit($hash)
    {
        $brands = Brand::all();
        $menus = Menu::where('status', 1)->get();
        $product = Product::Where('hash', $hash)->get();
        return view('Backend.Products.product_edit', compact('brands', 'menus', 'product'));
    }

    // URUN DESTROY

    public function destroy()
    {
        toastSuccess('Başarılı bir şekilde silme işlemi gerçekleştirilmiştir');
        return redirect()->route('product.list');
    }
}
