<?php

namespace Whirlpool\Project\Presenters;

use Carbon\Carbon;
use McCool\LaravelAutoPresenter\BasePresenter;
use Whirlpool\Project\Entities\Project;

class ProjectPresenter extends BasePresenter
{
    /**
     * 包装对象
     *
     * @var \Whirlpool\News\Entities\News
     */
    protected $wrappedObject;

    /**
     * ProjectPresenter constructor.
     *
     * @param \Whirlpool\Project\Entities\Project $resource
     */
    public function __constructor(Project $resource)
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
     * 工程案例描述
     *
     * @return string
     */
    public function description()
    {
        return $this->wrappedObject->description;
    }

    /**
     * 工程案例发布日期
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
     * 工程案例修改日期
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
     * 缩略图完整 url
     * @return string
     */
    public function thumbnail_url()
    {
        return $this->wrappedObject->thumbnail
            ? asset($this->wrappedObject->thumbnail)
            : '';
    }
}
