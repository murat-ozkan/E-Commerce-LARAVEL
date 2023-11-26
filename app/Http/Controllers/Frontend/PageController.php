<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function products(Request $request)
    {
        $size = $request->size ?? null;
        $color = $request->color ?? null;
        $startPrice = $request->startPrice ?? null;
        $endPrice = $request->endPrice  ?? null;

        $products = Product::where('status', '1') //! Burası urlden gelen sorguya göre değerleri return ediyor
            ->select(['id', 'name', 'slug', 'size', 'color', 'price', 'category_id', 'image']) //! Gelen veriyi azaltalım, sınırlayalım.
            ->where(function ($q) use ($size, $color, $startPrice, $endPrice) { //! use sayesinde dinamik değişkenleri aşağıya aktardık.
                if (!empty($size)) {
                    $q->where('size', $size);
                }
                if (!empty($color)) {
                    $q->where('color', $color);
                }
                if (!empty($startPrice && $endPrice)) {
                    $q->whereBetween('price', [$startPrice, $endPrice]);
                }
                return $q;
            })
            ->with('category:id,name,slug');
        //! tablolar arası ilişki kuruldu. Product içinde hasOne. Sade olsun diye id, name, slug alındı sadece. boşluk bırakma!


        $minprice = $products->min('price');
        $maxprice = $products->max('price');

        $sizelists = Product::where('status', '1')->groupBy('size')->pluck('size')->toArray(); //! plusk kullanınca get yerine toArray kullandık. Anlamadım.

        $colorlists = Product::where('status', '1')->groupBy('color')->pluck('color')->toArray(); //! plusk kullanınca get yerine toArray kullandık. Anlamadım.

        $products = $products->paginate(1);

        $categories = Category::where('status', '1')->where('cat_ust', null)->withCount('items')->get();
        //! with('items') category modeldeki onetomany ilişki fonksiyonu
        //! items sayısı da lazım olduğu için withCount() kullanabiliriz

        return view('frontend.pages.products', compact('products', 'categories', 'minprice', 'maxprice', 'sizelists', 'colorlists'));
    }
    public function onsaleproducts()
    {
        return view('frontend.pages.products');
    }
    public function productdetail($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('frontend.pages.product', compact('product'));
    }
    public function about()
    {
        $about = About::where('id', 1)->first();
        return view('frontend.pages.about', compact('about'));
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
