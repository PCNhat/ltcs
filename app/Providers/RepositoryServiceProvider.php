<?php

namespace App\Providers;

use App\Helpers\Repositories\BaseRepository;
use App\Helpers\Repositories\BaseRepositoryInterface;
use App\Modules\Categories\Repositories\CategoryRepository;
use App\Modules\Categories\Repositories\CategoryRepositoryInterface;
use App\Modules\Products\Repositories\ProductDescriptionRepository;
use App\Modules\Products\Repositories\ProductDescriptionRepositoryInterface;
use App\Modules\Products\Repositories\ProductDetailRepository;
use App\Modules\Products\Repositories\ProductDetailRepositoryInterface;
use App\Modules\Products\Repositories\ProductRepository;
use App\Modules\Products\Repositories\ProductRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(ProductDetailRepositoryInterface::class, ProductDetailRepository::class);
        $this->app->bind(ProductDescriptionRepositoryInterface::class, ProductDescriptionRepository::class);
    }
}
