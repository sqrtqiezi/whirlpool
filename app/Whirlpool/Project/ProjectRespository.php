<?php
/**
 * I pledge that this program represents my own
 * program code.
 */

namespace Whirlpool\Project;

use Whirlpool\Contracts\RepositoryInterface;
use Whirlpool\Project\Entities\Project;

class ProjectRespository implements ProjectRespositoryInterface
{
    /**
     *
     * 筛选列表结果
     *
     * @param array $criteria
     *
     * @return Collection
     */
    public function filter(array $criteria = [], $pageSize = 10)
    {

        $projects = (new Project())->newQuery();

        // 标题搜索
        if (isset($criteria['q']) && $keyword = $criteria['q']) {
            $projects->where('title', 'LIKE', "%{$keyword}%");
        }
        // 可见性
        if (isset($criteria['visibility'])) {
            switch ($criteria['visibility']) {
                case RepositoryInterface::VISIBLE:
                    break;
                case RepositoryInterface::INVISIBLE:
                    $projects->onlyTrashed();
                    break;
                default:
                    goto ALL_VISIBILITY;
            }
        } else {
            ALL_VISIBILITY:
            $projects->withTrashed();
        }

        return $projects->orderBy('id', 'DESC')->paginate($pageSize);
    }

    /**
     * 信息总数
     *
     * @return int
     */
    public function total()
    {
        return Project::withTrashed()->count();
    }
}