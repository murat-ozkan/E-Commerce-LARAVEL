<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class PageHomeController extends Controller
{
    public function home()
    {
        $slider = Slider::where('status', '1')->first(); // get kullanıldığında collection olur. o yüzden first yaptım.
        return view('frontend.pages.index', compact('slider'));
    }
}
