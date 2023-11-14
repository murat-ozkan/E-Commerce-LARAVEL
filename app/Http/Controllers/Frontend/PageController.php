<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function products()
    {
        return view('frontend.pages.products');
    }
    public function productdetail()
    {
        return view('frontend.pages.product');
    }
    public function about()
    {
        return view('frontend.pages.about');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function cart()
    {
        return view('frontend.pages.cart');
    }
}
