<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Whirlpool\Product\Entities\Product;
use Whirlpool\Product\ProductRepositoryInterface;
use Whirlpool\Product\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * 后台列表
     *
     * @param \Illuminate\Http\Request                      $request
     *
     *
     * @param \Whirlpool\Product\ProductRepositoryInterface $repository
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request, ProductRepositoryInterface $repository)
    {
        $total = $repository->total();
        $products = $repository->filter($request->all());

        return view('admin.product.index', compact('total', 'products'));
    }

    /**
     * 新建
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $this->setPreviousUrl();

        return view('admin.product.create');
    }

    /**
     * 保存
     *
     * @param \Whirlpool\Product\Requests\ProductRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ProductRequest $request)
    {
        Product::create($request->all());

        alert()->success('', '成功添加产品！');

        return redirect()->intended();
    }

    /**
     * 编辑
     *
     *
     * @param \Whirlpool\Product\Entities\Product $product
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Product $product)
    {
        $this->setPreviousUrl();

        return view('admin.product.edit', compact('product'));
    }

    /**
     * 修改
     *
     *
     * @param \Whirlpool\Product\Requests\ProductRequest $request
     * @param \Whirlpool\Product\Entities\Product        $product
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->all());

        alert()->success('', '成功编辑产品！');

        return redirect()->intended();
    }

    /**
     * 设为隐藏
     *
     * @param \Whirlpool\Product\Entities\Product $product
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Product $product)
    {
        $product->delete();

        alert()->success('', '成功隐藏产品！');

        return redirect()->back();
    }

    /**
     * 设为可见
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function restore(Product $product)
    {
        $product->restore();

        alert()->success('', '成功设为可见！');

        return redirect()->back();
    }
}
