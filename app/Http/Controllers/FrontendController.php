<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontends.index');
    }

    public function car()
    {
        return view('frontends.car');
    }

    public function about()
    {
        return view('frontends.about');
    }
}
