<?php
/**
 * I pledge that this program represents my own
 * program code.
 */

namespace App\Repositories;

use App\User;
use Whirlpool\Contracts\RepositoryInterface;

class UserRepository
{
    public function filter(array $criteria = [], $pageSize = 10)
    {
        $users = User::query();

        // 名字搜索
        if (isset($criteria['q']) && $keyword = $criteria['q']) {
            $users->where('name', 'LIKE', "%{$keyword}%");
        }

        // 可见性
        if (isset($criteria['visibility'])) {
            switch ($criteria['visibility']) {
                case RepositoryInterface::VISIBLE:
                    break;
                case RepositoryInterface::INVISIBLE:
                    $users->onlyTrashed();
                    break;
                default:
                    break;
            }
        }


        return $users->paginate($pageSize);
    }

    /**
     * 管理用户总数
     *
     * @return int
     */
    public function total()
    {
        return User::query()->count();
    }

    /**
     * 新建用户
     *
     * @param $name
     * @return static
     */
    public function create($name, $user_name)
    {
        return User::create([
            'name' => $name,
            'user_name' => $user_name,
            'password' => bcrypt('123456')
        ]);
    }
}