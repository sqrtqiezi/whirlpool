<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Whirlpool\Product\Entities\ProductType;
use Whirlpool\Product\ProductTypeRepository;
use Whirlpool\Product\ProductTypeService;
use Whirlpool\Product\Requests\ProductTypeRequest;

class ProductTypeController extends Controller
{
    /**
     * 后台列表
     *
     * @param \Illuminate\Http\Request                 $request
     *
     * @param \Whirlpool\Product\ProductTypeRepository $repository
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request, ProductTypeRepository $repository)
    {
        $types = $repository->filter($request->all());
        $total = $repository->total();
        return view('admin.product.type.index', compact('types', 'total'));
    }

    /**
     * 新建
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $this->setPreviousUrl();

        return view('admin.product.type.create');
    }

    /**
     * 保存
     *
     *
     * @param \Whirlpool\Product\Requests\ProductTypeRequest $request
     *
     * @param \Whirlpool\Product\ProductTypeService          $service
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ProductTypeRequest $request, ProductTypeService $service)
    {
        $service->create($request);

        alert()->success('', '成功添加分类！');

        return redirect()->intended();
    }

    /**
     * 编辑
     *
     * @param \Whirlpool\Product\Entities\ProductType $type
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(ProductType $type)
    {
        $this->setPreviousUrl();

        return view('admin.product.type.edit', compact('type'));
    }

    /**
     * 修改
     *
     * @param \Whirlpool\Product\Requests\ProductTypeRequest $request
     * @param \Whirlpool\Product\Entities\ProductType        $type
     * @param \Whirlpool\Product\ProductTypeService          $service
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @internal param \App\Http\Controllers\Product $product
     *
     */
    public function update(ProductTypeRequest $request, ProductType $type, ProductTypeService $service)
    {
        $service->update($type, $request->all());

        alert()->success('', '成功编辑分类！');

        return redirect()->intended();
    }

    /**
     * 设为隐藏
     *
     * @param \Whirlpool\Product\Entities\ProductType $type
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(ProductType $type)
    {
        $type->delete();

        alert()->success('', '成功隐藏分类！');

        return redirect()->back();
    }

    /**
     * 设为可见
     *
     * @param \Whirlpool\Product\Entities\ProductType $type
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function restore(ProductType $type)
    {
        $type->restore();

        alert()->success('', '成功设为可见！');

        return redirect()->back();
    }
}
