<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Whirlpool\News\Entities\News;
use Whirlpool\News\NewsRepositoryInterface;
use Whirlpool\News\Requests\NewsRequest;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:news']);
    }

    /**
     * 后台列表
     *
     * @param \Illuminate\Http\Request                $request
     *
     * @param \Whirlpool\News\NewsRepositoryInterface $repository
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request, NewsRepositoryInterface $repository)
    {
        $total = $repository->total();
        $newsList = $repository->filter($request->all());

        return view('admin.news.index', compact('total', 'newsList'));
    }

    /**
     * 新建
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $this->setPreviousUrl();

        return view('admin.news.create');
    }

    /**
     * 保存
     *
     * @param \Whirlpool\News\Requests\NewsRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(NewsRequest $request)
    {
        News::create($request->all());

        alert()->success('', '成功添加文章！');

        return redirect()->intended();
    }

    /**
     * 编辑
     *
     * @param \Whirlpool\News\Entities\News $news
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(News $news)
    {
        $this->setPreviousUrl();

        return view('admin.news.edit', compact('news'));
    }

    /**
     * 修改
     *
     * @param \Whirlpool\News\Requests\NewsRequest $request
     * @param \Whirlpool\News\Entities\News        $news
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(NewsRequest $request, News $news)
    {
        $news->update($request->all());

        alert()->success('', '成功编辑文章！');

        return redirect()->intended();
    }

    /**
     * 设为隐藏
     *
     * @param \Whirlpool\News\Entities\News $news
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(News $news)
    {
        $news->delete();

        alert()->success('', '成功隐藏文章！');

        return redirect()->back();
    }

    /**
     * 设为可见
     *
     * @param \Whirlpool\News\Entities\News $news
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function restore(News $news)
    {
        $news->restore();

        alert()->success('', '成功设为可见！');

        return redirect()->back();
    }

    public function stick(News $news)
    {
        // 最多只有两篇置顶，先获得前一篇
        $nearestStick = News::withTrashed()->where('is_stick', 1)->orderBy('id', 'DESC')->first();
        $news->update(['is_stick' => 1]);
        $keepItStick = $nearestStick ? [$news->id, $nearestStick->id] : [$news->id];
        // 把其它全部取消置顶
        News::withTrashed()->whereNotIn('id', $keepItStick)->update(['is_stick' => 0]);

        alert()->success('', '成功置顶！');

        return redirect()->back();
    }

    public function cancelStick(News $news)
    {
        $news->update(['is_stick' => 0]);

        alert()->success('', '成功取消置顶！');

        return redirect()->back();
    }
}
