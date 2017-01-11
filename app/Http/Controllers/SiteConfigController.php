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
        $this->config->update(['content' => $request->get('content')]);

        alert()->success('', '成功保存配置！');

        return redirect()->back();
    }
}
