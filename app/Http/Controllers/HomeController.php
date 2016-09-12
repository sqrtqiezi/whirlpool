<?php

namespace App\Http\Controllers;

use Whirlpool\News\NewsRepositoryInterface;

class HomeController extends Controller
{
    public function index(NewsRepositoryInterface $repository)
    {
        $newsList = $repository->filter([], 4);
        return view('welcome', compact(
            'newsList'
        ));
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
