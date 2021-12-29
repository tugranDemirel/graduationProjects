<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Menu;
use App\Models\Product;
use App\Support\Helper;
use Delight\Random\Random;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    // URUN LISTESI

    public function list()
    {
        if (Auth::check())
        {
            $products = Product::all();
            return view('Backend.Products.product_list', compact('products'));
        }
    }

    // CRAETA PAGE ITEM LIST

    public function show()
    {
        if (Auth::check())
        {
            $brands = Brand::all();
            $menus = Menu::where('status', 1)->get();
            return view('Backend.Products.product_create', compact('brands', 'menus'));
        }
        else
        {
            toastError('Geçersiz işlem.');
            return redirect()->back();
        }
    }

    public function create(Request $request)
    {

        if (Auth::check())
        {
            $isHash = Random::alphaLowercaseHumanString(28);
            $hash = Product::where('hash', $isHash)->first();
            if ($hash)
            {
                toastError('Bir hata oluştu. Lütfen tekrar deneyiniz.');
                return redirect()->back();
            }
            else
            {
                $product = new Product;

                $product->title = $request->title;
                $product->slug = Str::slug($request->title).'-'.Random::alphanumericHumanString(10);
                $product->about = $request->about;
                $product->description = $request->description;
                $product->keywords = $request->keywords;
                $product->hash = $isHash;
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
        }
        else
        {
            toastError('Geçersiz işlem.');
            return redirect()->back();
        }
    }


    // URUN EDIT

    public function edit($hash)
    {
        if (Auth::check())
        {
            $brands = Brand::all();
            $menus = Menu::where('status', 1)->get();
            $product = Product::where('hash', $hash)->firstOrFail();
            return view('Backend.Products.product_edit', compact('brands', 'menus', 'product'));
        }
        else
        {
            toastError('Geçersiz işlem.');
            return redirect()->back();
        }
    }

    public function update(Request $request, $hash)
    {
        if (Auth::check())
        {
            $isProduct = Product::where('hash',$hash)->whereNotIn('id', [$request->id])->first();
            if ($isProduct)
            {
                toastr()->error('Böyle bir ürün mevcuttur.');
                return redirect()->back();
            }
            else
            {
                $product = Product::where('hash', $hash)->where('id', $request->id)->first();

                $product->title = $request->title;
                $product->slug = Str::slug($request->title).'-'.Random::alphanumericHumanString(10);
                $product->about = $request->about;
                $product->description = $request->description;
                $product->keywords = $request->keywords;
                $product->hash = $hash;
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
                    $move = Helper::imageUpload($request->images, $request->title, 'uploads/products');
                    $product->images = $move;

                }

                $isSave = $product->save();
                if ($isSave)
                {
                    toastSuccess('Başarılı bir şekilde güncelleme işlemi gerçekleştirilmiştir.');
                    return redirect()->route('product.list');
                }
            }
        }
        if($request->hash == 'pnftfhbwtvnmhwkvdfmywtpgpngr')
            return 'doğry';
    }

    // URUN DESTROY

    public function destroy()
    {
        if (Auth::check())
        {
            toastSuccess('Başarılı bir şekilde silme işlemi gerçekleştirilmiştir');
            return redirect()->route('product.list');
        }
        else
        {
            toastError('Geçersiz işlem.');
            return redirect()->back();
        }
    }
}
