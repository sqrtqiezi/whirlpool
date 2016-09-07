<?php

namespace Whirlpool\Contracts;

interface RepositoryInterface
{
    /**
     * 未删除
     */
    const VISIBLE = 1;
    /**
     * 已删除
     */
    const INVISIBLE = 2;

}
