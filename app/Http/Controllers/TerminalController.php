<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Whirlpool\Terminal\Entities\Terminal;
use Whirlpool\Terminal\Requests\TerminalRequest;
use Whirlpool\Terminal\TerminalRepositoryInterface;

class TerminalController extends Controller
{
    /**
     * TerminalController constructor.
     */
    public function     __construct()
    {
    }

    /**
     * 后台列表
     *
     * @param \Illuminate\Http\Request                        $request
     *
     * @param \Whirlpool\Terminal\TerminalRepositoryInterface $repository
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request, TerminalRepositoryInterface $repository)
    {
        $total = $repository->total();
        $terminals = $repository->filter($request->all());

        return view('admin.terminal.index', compact('total', 'terminals'));
    }

    /**
     * 新建
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $this->setPreviousUrl();

        return view('admin.terminal.create');
    }

    /**
     * 保存
     *
     * @param \Whirlpool\Terminal\Requests\TerminalRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(TerminalRequest $request)
    {
        Terminal::create($request->all());

        alert()->success('', '成功添加终端！');

        return redirect()->intended();
    }

    /**
     * 编辑
     *
     *
     * @param \Whirlpool\Terminal\Entities\Terminal $terminal
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Terminal $terminal)
    {
        $this->setPreviousUrl();

        return view('admin.terminal.edit', compact('terminal'));
    }

    /**
     * 修改
     *
     *
     * @param \Whirlpool\Terminal\Requests\TerminalRequest $request
     * @param \Whirlpool\Terminal\Entities\Terminal        $terminal
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(TerminalRequest $request, Terminal $terminal)
    {
        $terminal->update($request->all());

        alert()->success('', '成功编辑终端！');

        return redirect()->intended();
    }

    /**
     * 设为隐藏
     *
     * @param \Whirlpool\Terminal\Entities\Terminal $terminal
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Terminal $terminal)
    {
        $terminal->delete();

        alert()->success('', '成功隐藏终端！');

        return redirect()->back();
    }

    /**
     * 设为可见
     *
     * @param \Whirlpool\Terminal\Entities\Terminal $terminal
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function restore(Terminal $terminal)
    {
        $terminal->restore();

        alert()->success('', '成功设为可见！');

        return redirect()->back();
    }

    /**
     * 暂存列表页 url，防止更新或新建后，回不到原来的筛选结果
     */
    protected function setPreviousUrl()
    {
        app('session')->put('url.intended', app('url')->previous());
    }
}
