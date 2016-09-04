<?php

namespace Whirlpool\Terminal\Presenters;

use Carbon\Carbon;
use McCool\LaravelAutoPresenter\BasePresenter;
use Whirlpool\Terminal\Entities\Terminal;

class TerminalPresenter extends BasePresenter
{
    /**
     * @var Terminal
     */
    protected $wrappedObject;

    /**
     * NewsPresenter constructor.
     *
     * @param \Whirlpool\Terminal\Entities\Terminal $resource
     */
    public function __constructor(Terminal $resource)
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

    /**
     * 省份
     */
    public function location()
    {
        $location = $this->wrappedObject->location;
        $entity = $this->wrappedObject;
        $locations = $entity::LOCATIONS;

        return isset($locations[$location]) ? $locations[$location] : $location;
    }
}
