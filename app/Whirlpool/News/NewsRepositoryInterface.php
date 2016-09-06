<?php

namespace Whirlpool\News;

use Illuminate\Support\Collection;
use Whirlpool\Contracts\RepositoryInterface;

interface NewsRepositoryInterface extends RepositoryInterface
{

    /**
     *
     * 筛选列表结果
     *
     * @param array $criteria
     *
     * @return Collection
     */
    public function filter(array $criteria = []);

    /**
     * 信息总数
     *
     * @return int
     */
    public function total();
}
