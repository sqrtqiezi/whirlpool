<?php

namespace Whirlpool\Product\Presenters;

use Carbon\Carbon;
use Illuminate\Support\Str;
use McCool\LaravelAutoPresenter\BasePresenter;
use Whirlpool\Product\Entities\Product;

class ProductPresenter extends BasePresenter
{
    public static $typeProduct = [
        Product::TYPE_SMOKE        => '吸油烟机',
        Product::TYPE_STOVE        => '灶具',
        Product::TYPE_MICROWAVE    => '微波炉',
        Product::TYPE_STEAM        => '蒸箱',
        Product::TYPE_DISINFECTION => '消毒柜',
        Product::TYPE_DISH         => '洗碗机',
        Product::TYPE_OVEN         => '烤箱',
        Product::TYPE_FRIDGE       => '嵌入式冰箱',
        Product::TYPE_WINE         => '酒柜',
        Product::TYPE_WARM         => '暖碟机',
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
     * @param \Whirlpool\Product\Entities\Product $resource
     */
    public function __constructor(Product $resource)
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
