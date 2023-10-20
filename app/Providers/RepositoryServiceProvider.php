<?php

namespace App\Providers;

use App\Repositories\Blog\BlogRepository;
use App\Repositories\Comment\CommentRepository;
use App\Repositories\Contracts\Blog\IBlogRepository;
use App\Repositories\Contracts\Comment\ICommentRepository;
use App\Repositories\Contracts\Image\IImageRepository;
use App\Repositories\Contracts\News\INewsRepository;
use App\Repositories\Contracts\User\IUserRepository;
use App\Repositories\Image\ImageRepository;
use App\Repositories\News\NewsRepository;
use App\Repositories\User\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(IUserRepository::class, UserRepository::class);
        $this->app->bind(IBlogRepository::class, BlogRepository::class);
        $this->app->bind(IImageRepository::class, ImageRepository::class);
        $this->app->bind(INewsRepository::class, NewsRepository::class);
        $this->app->bind(ICommentRepository::class, CommentRepository::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
