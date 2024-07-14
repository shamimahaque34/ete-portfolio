<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }

    public function about()
    {
        return view('frontend.about.index');
    }

    public function services()
    {
        return view('frontend.services.index');
    }

    public function portfolio()
    {
        return view('frontend.portfolio.index');
    }

    public function contact()
    {
        return view('frontend.contact.index');
    }

}
