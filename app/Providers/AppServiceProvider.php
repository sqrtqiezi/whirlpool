<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Whirlpool\Config\Entities\Config;
use Whirlpool\Life\LifeRepository;
use Whirlpool\Life\LifeRepositoryInterface;
use Whirlpool\News\NewsRepository;
use Whirlpool\News\NewsRepositoryInterface;
use Whirlpool\Product\Entities\ProductType;
use Whirlpool\Product\ProductRepository;
use Whirlpool\Product\ProductRepositoryInterface;
use Whirlpool\Project\ProjectRespository;
use Whirlpool\Project\ProjectRespositoryInterface;
use Whirlpool\Terminal\TerminalRepository;
use Whirlpool\Terminal\TerminalRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        app('view')->composer('*', function ($view) {
            if ($config = Config::first()) {
                $view->with('siteConfig', $config);
            }

            if ($productTypes = ProductType::all()) {
                $view->with('productTypes', $productTypes);
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // 新闻资料库
        $this->app->bind(NewsRepositoryInterface::class, function () {
            return new NewsRepository;
        });
        // 会生活
        $this->app->bind(LifeRepositoryInterface::class, function () {
            return new LifeRepository;
        });
        // 终端
        $this->app->bind(TerminalRepositoryInterface::class, function () {
            return new TerminalRepository;
        });
        // 产品
        $this->app->bind(ProductRepositoryInterface::class, function () {
            return new ProductRepository;
        });
        // 工程案例
        $this->app->bind(ProjectRespositoryInterface::class, function() {
            return new ProjectRespository;
        });
    }
}
