<?php

namespace App\Http\Controllers\Frontend\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    //
    public function index()
    {
        return view('Frontend.user.index');
    }

    
}
