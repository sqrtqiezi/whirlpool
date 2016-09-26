<?php

namespace Whirlpool\Product;

use Illuminate\Support\Collection;
use Whirlpool\Contracts\RepositoryInterface;

interface ProductRepositoryInterface extends RepositoryInterface
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
