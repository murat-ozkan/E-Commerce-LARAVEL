<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;

class PageHomeController extends Controller
{
    public function home()
    {
        $slider = Slider::where('status', '1')->first(); // get kullanıldığında collection olur. o yüzden first yaptım.
        $categories = Category::where('status', '1')->get(); // bütün veriler gelecek. foreach kullanmak lazım diğer tarafta.
        //! Burada categories kısmını middleware kullanarak yapacağız ileride. Amaç datayı bütün sayfalarda kullanabilmek.
        //! Şu anda sadece Home pagede kullanıyoruz.

        $title = 'Home'; // Lazım olursa

        $about = About::where('id', 1)->first();

        return view('frontend.pages.index', compact('slider', 'categories', 'title', 'about'));
    }
}
