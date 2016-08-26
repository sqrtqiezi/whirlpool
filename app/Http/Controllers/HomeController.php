<?php

namespace App\Http\Controllers;


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
        return view('products');
    }

    public function productCategory($id)
    {
        return view('category');
    }

    public function product($id)
    {
        return view('product');
    }

    public function news()
    {
        return view('news');
    }
}