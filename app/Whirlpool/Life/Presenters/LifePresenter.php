<?php

namespace Whirlpool\Life\Presenters;

use Carbon\Carbon;
use Illuminate\Support\Str;
use McCool\LaravelAutoPresenter\BasePresenter;
use Whirlpool\Life\Entities\Life;

class LifePresenter extends BasePresenter
{
    /**
     * 新闻分类文字
     *
     * @var array
     */
    public static $typeContent = [
        Life::TYPE_PEOPLE    => '厨电创想人',
        Life::TYPE_APPLIANCE => '“懂”厨电',
        Life::TYPE_DELICIOUS => '“品”美味',
        Life::TYPE_KITCHEN   => '“绘”厨房',
    ];

    /**
     * 包装对象
     *
     * @var \Whirlpool\News\Entities\News
     */
    protected $wrappedObject;

    /**
     * NewsPresenter constructor.
     *
     * @param \Whirlpool\Life\Entities\Life $resource
     */
    public function __constructor(Life $resource)
    {
        $this->wrappedObject = $resource;
    }

    /**
     * 标题
     *
     * @return string
     */
    public function title()
    {
        return $this->wrappedObject->title;
    }

    /**
     * 新闻内容
     *
     * @return string
     */
    public function content()
    {
        return $this->wrappedObject->content;
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

    /**
     * 新闻内容截取摘要
     *
     * @param int $length
     *
     * @return string
     */
    public function description($length = 30)
    {
        /** @var string $content */
        $content = strip_tags($this->wrappedObject->content);

        return Str::substr($content, 0, $length);
    }

    /**
     * 新闻分类
     *
     * @return string
     */
    public function type()
    {
        $type = $this->wrappedObject->type;

        return isset(self::$typeContent[$type]) ? self::$typeContent[$type] : $type;
    }
}
