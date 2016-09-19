<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Whirlpool\Life\Entities\Life;
use Whirlpool\News\Entities\News;
use Whirlpool\Product\Entities\ProductType;
use Whirlpool\Project\Entities\Project;
use Whirlpool\Terminal\Entities\Terminal;
use Whirlpool\Product\Entities\Product;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        // 兼容软删除的路由模型绑定
        $router->bind('news', function($id){
            return News::withTrashed()->where('id', $id)->firstOrFail();
        });
        $router->bind('life', function($id){
            return Life::withTrashed()->where('id', $id)->firstOrFail();
        });
        $router->bind('terminal', function($id){
            return Terminal::withTrashed()->where('id', $id)->firstOrFail();
        });
        $router->bind('product', function($id){
            return Product::withTrashed()->where('id', $id)->firstOrFail();
        });
        $router->bind('product-type', function ($id) {
            return ProductType::withTrashed()->where('id', $id)->firstOrFail();
        });
        $router->bind('project', function($id) {
            return Project::withTrashed()->where('id', $id)->firstOrFail();
        });

        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $this->mapWebRoutes($router);
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    protected function mapWebRoutes(Router $router)
    {
        $router->group([
            'namespace' => $this->namespace, 'middleware' => 'web',
        ], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}
