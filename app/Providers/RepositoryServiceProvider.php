<?php

namespace App\Providers;

use App\Helpers\Repositories\BaseRepository;
use App\Helpers\Repositories\BaseRepositoryInterface;
use App\Modules\Categories\Repositories\CategoryRepository;
use App\Modules\Categories\Repositories\CategoryRepositoryInterface;
use App\Modules\Contacts\Repositories\ContactRepository;
use App\Modules\Contacts\Repositories\ContactRepositoryInterface;
use App\Modules\Posts\Repositories\PostRepository;
use App\Modules\Posts\Repositories\PostRepositoryInterface;
use App\Modules\Products\Repositories\ProductDescriptionRepository;
use App\Modules\Products\Repositories\ProductDescriptionRepositoryInterface;
use App\Modules\Products\Repositories\ProductDetailRepository;
use App\Modules\Products\Repositories\ProductDetailRepositoryInterface;
use App\Modules\Products\Repositories\ProductRepository;
use App\Modules\Products\Repositories\ProductRepositoryInterface;
use App\Modules\Users\Repositories\UserRepository;
use App\Modules\Users\Repositories\UserRepositoryInterface;
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
        $this->app->bind(PostRepositoryInterface::class, PostRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);
    }
}
