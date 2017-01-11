<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_name', 'password', 'remember_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * 判断是否为超级管理员
     *
     * @return bool
     */
    public function getIsAdminAttribute()
    {
        return $this->name === 'admin';
    }

    public function getRolesDisplayAttribute()
    {
        $result = [];
        foreach($this->roles as $role) {
            $result[] = $role['display_name'];
        }
        return implode('|', $result);
    }
}
