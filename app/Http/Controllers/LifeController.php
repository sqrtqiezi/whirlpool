<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Whirlpool\Life\Entities\Life;
use Whirlpool\Life\LifeRepositoryInterface;
use Whirlpool\Life\Requests\LifeRequest;

class LifeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:life']);
    }

    /**
     * 后台列表
     *
     * @param \Illuminate\Http\Request                $request
     *
     *
     * @param \Whirlpool\Life\LifeRepositoryInterface $repository
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request, LifeRepositoryInterface $repository)
    {
        $total = $repository->total();
        $lives = $repository->filter($request->all());

        return view('admin.life.index', compact('total', 'lives'));
    }

    /**
     * 新建
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $this->setPreviousUrl();

        return view('admin.life.create');
    }

    /**
     * 保存
     *
     *
     *
     * @param \Whirlpool\Life\Requests\LifeRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(LifeRequest $request)
    {
        Life::create($request->all());

        alert()->success('', '成功添加文章！');

        return redirect()->intended();
    }

    /**
     * 编辑
     *
     * @param \Whirlpool\Life\Entities\Life $life
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Life $life)
    {
        $this->setPreviousUrl();

        return view('admin.life.edit', compact('life'));
    }

    /**
     * 修改
     *
     * @param \Whirlpool\Life\Requests\LifeRequest $request
     * @param \Whirlpool\Life\Entities\Life        $life
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(LifeRequest $request, Life $life)
    {
        $life->update($request->all());

        alert()->success('', '成功编辑文章！');

        return redirect()->intended();
    }

    /**
     * 设为隐藏
     *
     *
     *
     * @param \Whirlpool\Life\Entities\Life $life
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Life $life)
    {
        $life->delete();

        alert()->success('', '成功隐藏文章！');

        return redirect()->back();
    }

    /**
     * 设为可见
     *
     *
     * @param \Whirlpool\Life\Entities\Life $life
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function restore(Life $life)
    {
        $life->restore();

        alert()->success('', '成功设为可见！');

        return redirect()->back();
    }
}
