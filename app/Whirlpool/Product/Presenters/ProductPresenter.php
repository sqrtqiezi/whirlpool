<?php

namespace Whirlpool\Product\Presenters;

use Carbon\Carbon;
use Illuminate\Support\Str;
use McCool\LaravelAutoPresenter\BasePresenter;
use Whirlpool\Product\Entities\Product;

class ProductPresenter extends BasePresenter
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

    public function feature()
    {
        $features = $this->wrappedObject->feature;

        return implode("\r\n", $features);
    }

    public function background_url()
    {
        return isset($this->wrappedObject->background)
            ? asset($this->wrappedObject->background)
            : '';
    }

    public function spec_img_one_url()
    {
        return isset($this->wrappedObject->spec_img_one)
            ? asset($this->wrappedObject->spec_img_one)
            : '';
    }

    public function spec_img_two_url()
    {
        return isset($this->wrappedObject->spec_img_two)
            ? asset($this->wrappedObject->spec_img_two)
            : '';
    }
}
