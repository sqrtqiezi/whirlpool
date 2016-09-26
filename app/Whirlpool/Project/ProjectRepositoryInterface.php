<?php
/**
 * I pledge that this program represents my own
 * program code.
 */

namespace Whirlpool\Project;


use Illuminate\Database\Eloquent\Collection;
use Whirlpool\Contracts\RepositoryInterface;

interface ProjectRepositoryInterface extends RepositoryInterface
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
