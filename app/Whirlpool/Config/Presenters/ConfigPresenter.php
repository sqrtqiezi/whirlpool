<?php

namespace Whirlpool\Config\Presenters;

use Carbon\Carbon;
use Illuminate\Support\Str;
use McCool\LaravelAutoPresenter\BasePresenter;
use Whirlpool\Config\Entities\Config;

class ConfigPresenter extends BasePresenter
{
    /**
     * 包装对象
     *
     * @var \Whirlpool\News\Entities\News
     */
    protected $wrappedObject;

    /**
     * NewsPresenter constructor.
     *
     * @param \Whirlpool\Config\Entities\Config $resource
     */
    public function __constructor(Config $resource)
    {
        $this->wrappedObject = $resource;
        $this->content = isset($this->wrappedObject['content'])
            ? $this->wrappedObject['content'] : [];
    }

    /**
     * 标题
     *
     * @return string
     */
    public function title()
    {
        return $this->content['title'];
    }

    public function keyword()
    {
        return $this->content['keyword'];
    }

    public function description()
    {
        return $this->content['description'];
    }

    public function brand()
    {
        return $this->content['brand'];
    }

    public function icp()
    {
        return $this->content['icp'];
    }

    public function categories()
    {
        return $this->content['categories'];
    }

    /**
     * 新闻真实发布日期
     *
     * @return string
     */
    public function created_at()
    {
        /** @var Carbon $createdAt */
        $createdAt = $this->wrappedObject->created_at;

        return $createdAt->toDateString();
    }

    /**
     * 新闻最后修改日期
     *
     * @return string
     */
    public function updated_at()
    {
        /** @var Carbon $updatedAt */
        $updatedAt = $this->wrappedObject->updated_at;

        return $updatedAt->toDateString();
    }
}
