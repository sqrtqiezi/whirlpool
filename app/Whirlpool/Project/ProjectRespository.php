<?php
/**
 * I pledge that this program represents my own
 * program code.
 */

namespace Whirlpool\Project;

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
                case self::VISIBLE:
                    break;
                case self::INVISIBLE:
                    $projects->onlyTrashed();
                    break;
                default:
                    break;
            }
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
