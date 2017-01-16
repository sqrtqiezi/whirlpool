<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Whirlpool\Config\Entities\Config;
use Whirlpool\Config\Requests\ConfigRequest;

class SiteConfigController extends Controller
{
    /**
     * 第一条实体
     *
     * @var array
     */
    private $config;

    /**
     * SiteConfigController constructor.
     */
    public function __construct()
    {
        $this->config = Config::first();
        $this->middleware(['role:webconfig']);
    }

    public function index()
    {
        return view('admin.site-config.index')->with('config', $this->config);
    }

    public function store(ConfigRequest $request)
    {
        // 更新排序
        $categories = explode(',', $request->get('categories')[0]);
        $content = $this->config->content;
        $newCategories = [];
        foreach ($categories as $category) {
            $newCategories[$category] = $content['categories'][$category];
        }

        $content = $request->get('content');
        $content['categories'] = $newCategories;
        $this->config->update(['content' => $content]);

        alert()->success('', '成功保存配置！');

        return redirect()->back();
    }
}
