<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required',
            'brand'=>'required',
            'price'=>'require|numeric|min:0',
            'discount'=>'required|numeric|min:0',
            'stock'=>'required|numeric|min:1',
            'code' =>'required',
            'images'=>'required|mimes:jpg|dimensions:max_width=485,max_height=485,min_width=485,min_height=485'
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>'Lütfen ürün adını giriniz.',
            'brand.required'=>'Lütfen ürün markası seçiniz.',
            'price.required'=>'Lütfen ürün fiyatını giriniz.',
            'price.numeric'=>'Lütfen ürün fiyatını sayı şeklinde giriniz ve eksi(-) değer olarak girmeyiniz.',
            'discount.required'=>'Lütfen ürün indirim fiyatını giriniz. Yoksa 0 olarak giriniz.',
            'discount.numeric'=>'Lütfen ürün fiyatını sayı şeklinde giriniz ve eksi(-) değer olarak girmeyiniz.',
            'stock.required'=>'Lütfen stok adetini giriniz(sayısal veri olarak).',
            'stock.code'=>'Lütfen ürün kodunu giriniz.',
            'images.required'=>'Lütfen resim seçiniz ve boyutları 485x485 şeklinde resim uzantısı .jpg olmalıdır.'
        ];
    }
}
