<?php
/**
 * I pledge that this program represents my own
 * program code.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Whirlpool\Project\Entities\Project;
use Whirlpool\Project\ProjectRespository;
use Whirlpool\Project\Requests\ProjectRequest;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:project']);
    }

    /**
     * 后台列表
     *
     * @param \Illuminate\Http\Request $request
     *
     * @param \Whirlpool\Product\ProductTypeRepository $repository
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request, ProjectRespository $repository)
    {
        $projects = $repository->filter($request->all());
        $total = $repository->total();
        return view('admin.project.index', compact('projects', 'total'));
    }

    /**
     * 新建
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $this->setPreviousUrl();

        return view('admin.project.create');
    }

    /**
     * 保存
     *
     *
     * @param \Whirlpool\Project\Requests\ProjectRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ProjectRequest $request)
    {
        Project::create($request->all());

        alert()->success('', '成功添加工程案例！');

        return redirect()->intended();
    }

    /**
     * 编辑
     *
     * @param \Whirlpool\Project\Entities\Project $project
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Project $project)
    {
        $this->setPreviousUrl();
        return view('admin.project.edit', compact('project'));
    }

    /**
     * 修改
     *
     * @param \Whirlpool\Project\Requests\ProjectRequest $request
     * @param \Whirlpool\Project\Entities\Project $project
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @internal param \App\Http\Controllers\Product $product
     *
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $project->update($request->all());

        alert()->success('', '成功编辑工程案例！');

        return redirect()->intended();
    }

    /**
     * 设为隐藏
     *
     * @param \Whirlpool\Project\Entities\Project $project
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Project $project)
    {
        $project->delete();

        alert()->success('', '成功删除工程案例！');

        return redirect()->back();
    }

    /**
     * 设为可见
     *
     * @param \Whirlpool\Project\Entities\Project $project
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function restore(Project $project)
    {
        $project->restore();

        alert()->success('', '成功设为可见！');

        return redirect()->back();
    }
}