<?php

namespace App\Http\Controllers\Frontend\auth\register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use function GuzzleHttp\Promise\all;

class indexController extends Controller
{
    //
    public function index()
    {
        return view('Frontend.auth.register.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:150'],
            'email' => ['required', 'email:rfc,dns', 'exists:buyers', 'exists:users'],
            'password' => ['required', Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()
                ->uncompromised(), 'confirmed']
        ],
        [
            'name.required'=> 'Lütfen isim giriniz.',
            'email.email' => 'Geçerli bir mail adresi giriniz.',
            'password.confirmed' =>' Şifreler uyuşmuyor.'
        ]);


    }
}
