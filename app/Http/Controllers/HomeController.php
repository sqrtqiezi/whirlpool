<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Whirlpool\Life\Entities\Life;
use Whirlpool\News\Entities\News;
use Whirlpool\Product\Entities\Product;
use Whirlpool\Product\Entities\ProductType;
use Whirlpool\Project\Entities\Project;
use Whirlpool\Terminal\Entities\Terminal;

class HomeController extends Controller
{
    public function index()
    {
        $newsList = News::query()->where('is_stick', 0)->orderBy('id', 'DESC')->paginate(4);
        $stickNews = News::query()->where('is_stick', 1)->get();
        return view('welcome', compact(
            'newsList', 'stickNews'
        ));
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
        $productType = ProductType::findOrFail($id);
        $products = Product::where('type_id', $id)->orderBy('id', 'desc')->paginate(6);

        return view('category', compact('productType', 'products'));
    }

    public function product(Product $product)
    {
        $features = $product->feature;

        return view('product', compact('product', 'features'));
    }

    public function news(Request $request)
    {
        $newsQuery =  News::query();
        if(isset($request['type']))
        {
            $newsQuery->where('type', $request['type']);
        }
        $newsList = $newsQuery->orderBy('id', 'DESC')->paginate(5);
        return view('news', compact('newsList'));
    }

    public function newsDetail($id)
    {
        $news = News::findOrFail($id);
        return view('news_detail', compact('news'));
    }

    public function life(Request $request)
    {
        $livesQuery = Life::query();
        if(isset($request['type']))
        {
            $livesQuery->where('type', $request['type']);
        }
        $livesList = $livesQuery->orderBy('id', 'DESC')->paginate(4);
        return view('life', compact('livesList'));
    }

    public function lifeDetail($id)
    {
        $life = Life::findOrFail($id);
        return view('life_detail', compact('life'));
    }

    public function stores()
    {
        $terminalsList = Terminal::query()->paginate(5);

        return view('stores', compact('terminalsList'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function projects()
    {
        $projectsList = Project::all();
        return view('projects', compact('projectsList'));
    }

    /**
     * 后台首页
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function panel()
    {
        return view('admin.index');
    }
}
