<?php

return [
    'role_structure' => [
        'webconfig' => [
            'display_name' => '网站设置',
            'description' => '网站设置',
            'permissions' => 'm'
        ],
        'users' => [
            'display_name' => '用户权限',
            'description' => '用户权限',
            'permissions' => 'm'
        ],
        'life' => [
            'display_name' => '"会"生活',
            'description' => '"会"生活',
            'permissions' => 'm'
        ],
        'news' => [
            'display_name' => '新闻中心',
            'description' => '新闻中心',
            'permissions' => 'm'

        ],
        'product' => [
            'display_name' => '厨房电器',
            'description' => '厨房电器',
            'permissions' => 'm'

        ],
        'project' => [
            'display_name' => '工程案例',
            'description' => '工程案例',
            'permissions' => 'm'

        ],
        'terminal' => [
            'display_name' => '终端形象',
            'description' => '终端形象',
            'permissions' => 'm'
        ]
    ],
    'permissions_map' => [
        'm' => [
            'name' => 'manage',
            'display_name' => '管理',
            'description' => '管理'
        ]
    ],
    'superadmin' => [
        'name' => 'admin',
        'user_name' => '超级管理员'
    ]
];
