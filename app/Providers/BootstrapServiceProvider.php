<?php

namespace App\Providers;

use App\Modules\Categories\Services\CategoryService;
use App\Modules\Categories\Services\CategoryServiceInterface;
use App\Modules\Contacts\Services\ContactService;
use App\Modules\Contacts\Services\ContactServiceInterface;
use App\Modules\Posts\Services\PostService;
use App\Modules\Posts\Services\PostServiceInterface;
use App\Modules\Products\Services\ProductService;
use App\Modules\Products\Services\ProductServiceInterface;
use App\Modules\Users\Services\UserService;
use App\Modules\Users\Services\UserServiceInterface;
use Illuminate\Support\ServiceProvider;

class BootstrapServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CategoryServiceInterface::class, CategoryService::class);
        $this->app->bind(ProductServiceInterface::class, ProductService::class);
        $this->app->bind(PostServiceInterface::class, PostService::class);
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(ContactServiceInterface::class, ContactService::class);
    }
}
