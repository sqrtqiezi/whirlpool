<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Whirlpool\Product\Entities\Product;
use Whirlpool\Product\Entities\ProductType;
use Whirlpool\Product\ProductRepositoryInterface;
use Whirlpool\Product\ProductService;
use Whirlpool\Product\ProductTypeRepository;
use Whirlpool\Product\ProductTypeService;
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
        $types = ProductType::pluck('name', 'id')->all();


        return view('admin.product.index', compact('total', 'products', 'types'));
    }

    /**
     * 新建
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        $this->setPreviousUrl();
        $types = ProductType::pluck('name', 'id')->all();

        if ($request->has('type')) {
            $typeAttributes = ProductType::find($request->get('type'))->attributes;
        }

        return view('admin.product.create', compact('types', 'typeAttributes'));
    }

    /**
     * 保存
     *
     * @param \Whirlpool\Product\Requests\ProductRequest $request
     *
     * @param \Whirlpool\Product\ProductService          $service
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ProductRequest $request, ProductService $service)
    {
        $service->create($request);

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
        $types = ProductType::pluck('name', 'id')->all();

        $typeAttributes = ProductType::find($product->type_id)->attributes;
        // 合并用户已经配置的
        $specifications = array_column($product->specification, 'value', 'name');
        $typeAttributes = $specifications + $typeAttributes;

        return view('admin.product.edit', compact('product', 'types', 'typeAttributes'));
    }

    /**
     * 修改
     *
     *
     * @param \Whirlpool\Product\Requests\ProductRequest $request
     * @param \Whirlpool\Product\Entities\Product        $product
     * @param \Whirlpool\Product\ProductService          $service
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ProductRequest $request, Product $product, ProductService $service)
    {
        $service->update($product, $request);

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
