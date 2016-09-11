<?php

namespace App\Http\Controllers;

use Whirlpool\Product\Entities\Product;
use Whirlpool\Product\Entities\ProductType;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function products()
    {
        $types = ProductType::all();

        return view('products', compact('types'));
    }

    public function productCategory($id)
    {
        $products = Product::where('type_id', $id)->paginate(5);

        return view('category', compact('products'));
    }

    public function product($id)
    {
        $product = Product::find($id);

        return view('product', compact('product'));
    }

    public function news()
    {
        return view('news');
    }

    public function newsDetail($id)
    {
        return view('news_detail');
    }

    public function life()
    {
        return view('life');
    }

    public function lifeDetail($id)
    {
        return view('life_detail');
    }

    public function stores()
    {
        return view('stores');
    }

    public function contact()
    {
        return view('contact');
    }

    public function projects()
    {
        return view('projects');
    }

    /**
     * 后台首页
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function panel()
    {
        return redirect('panel/news ');
    }
}
