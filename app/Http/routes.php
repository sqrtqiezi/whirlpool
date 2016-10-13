<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/** @var $router \Illuminate\Routing\Router */

// 后台
$router->group([
    'prefix' => 'panel',
], function () use ($router) {
    // 登录
    // Authentication Routes...
    $this->get('login', 'Auth\AuthController@showLoginForm');
    $this->post('login', 'Auth\AuthController@login');
    $this->get('logout', 'Auth\AuthController@logout');

    // 登录后
    $router->group(['middleware' => 'auth'], function () use ($router) {
        // Password Reset Routes...
        $this->get('password/reset', 'Auth\PasswordController@showResetForm')->name('panel.reset-password');
        $this->post('password/reset', 'Auth\PasswordController@reset');

        // 首页
        $router->get('/', 'HomeController@panel')->name('panel.index');
        $router->resources([
            // 厨房电器
            'product'  => 'ProductController',
            // 电器分类
            'product-type' => 'ProductTypeController',
            // 新闻
            'news'     => 'NewsController',
            // 终端
            'terminal' => 'TerminalController',
            // '会' 生活
            'life'     => 'LifeController',
            // 工程案例
            'project' => 'ProjectController',
            // 基本设置
            'site-config'     => 'SiteConfigController',
        ]);
        // 产品排序
        $router->post('product/resort', 'ProductController@resort')->name('panel.product.resort');
        // 恢复软删除
        $router->post('news/{news}/restore', 'NewsController@restore')->name('panel.news.restore');
        $router->post('life/{life}/restore', 'LifeController@restore')->name('panel.life.restore');
        $router->post('terminal/{terminal}/restore', 'TerminalController@restore')->name('panel.terminal.restore');
        $router->post('product/{product}/restore', 'ProductController@restore')->name('panel.product.restore');
        $router->post('project/{project}/restore', 'ProjectController@restore')->name('panel.project.restore');
        // 新闻置顶和取消
        $router->post('news/{news}/stick', 'NewsController@stick')->name('panel.news.stick');
        $router->post('news/{news}/cancel-stick', 'NewsController@cancelStick')->name('panel.news.cancel-stick');
        // 文件上传
        $router->match(['put','patch', 'post'], 'api/upload', 'AjaxController@upload')->name('panel.api.upload');
    });
    // ./ 登录后
});
// ./ 后台

// 前台
Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/products', 'HomeController@products')->name('products');
Route::get('/product/category/{id}', 'HomeController@productCategory')->name('category');
Route::get('/product/{product}', 'HomeController@product')->name('product');
Route::get('/projects', 'HomeController@projects')->name('projects');
Route::get('/news', 'HomeController@news')->name('news');
Route::get('/news/{id}', 'HomeController@newsDetail')->name('newsDetail');
Route::get('/life', 'HomeController@life')->name('life');
Route::get('/life/{id}', 'HomeController@lifeDetail')->name('lifeDetail');
Route::get('/stores', 'HomeController@stores')->name('stores');
Route::get('/contact', 'HomeController@contact')->name('contact');
