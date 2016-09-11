<?php

namespace Whirlpool\Product\Presenters;

use Carbon\Carbon;
use Illuminate\Support\Str;
use McCool\LaravelAutoPresenter\BasePresenter;
use Whirlpool\Product\Entities\Product;

class ProductTypePresenter extends BasePresenter
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
     * @param \Whirlpool\Product\Entities\Product $resource
     */
    public function __constructor(Product $resource)
    {
        $this->wrappedObject = $resource;
    }

    /**
     * 名称
     *
     * @return string
     */
    public function name()
    {
        return $this->wrappedObject->name;
    }

    /**
     * 属性摘要，用户列表显示
     *
     * @return string
     */
    public function attributesSummary()
    {
        $attributes = $this->wrappedObject->attributes;
        return implode(' | ', array_slice(array_keys($attributes), 0, 10));
    }

    public function attributes()
    {
        $attributes = $this->wrappedObject->attributes;

        return implode("\r\n", $attributes);
    }

    /**
     * 添加日期
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
     * 最后修改日期
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
