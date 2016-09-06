<?php

if (!function_exists('is_active')) {
    /**
     * 根据当前访问的路由名称判断是否应该给特定的导航菜单加亮。
     *
     * @param string|null $routeName
     *
     * @return bool
     */
    function is_active($routeName = '')
    {
        $currentRoute = app()['request']->route()->getName();

        // 如果特定菜单的名称，存在于当前访问的路由名中。
        return false !== strpos($currentRoute, $routeName);
    }
}
