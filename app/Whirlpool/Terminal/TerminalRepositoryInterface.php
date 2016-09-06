<?php

namespace Whirlpool\Terminal;

use Illuminate\Support\Collection;

interface TerminalRepositoryInterface
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
