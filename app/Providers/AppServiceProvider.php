<?php

namespace App\Providers;

use App\Repositories\Contracts\CategoryArticleRepositoryInterface;
use App\Repositories\Contracts\FacilityRepositoryInterface;
use App\Repositories\Contracts\FooterRepositoryInterface;
use App\Repositories\Contracts\HistoryRepositoryInterface;
use App\Repositories\CategoryArticleRepository;
use App\Repositories\FacilityRepository;
use App\Repositories\FooterRepository;
use App\Repositories\HistoryRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(CategoryArticleRepositoryInterface::class, CategoryArticleRepository::class);

        $this->app->singleton(FacilityRepositoryInterface::class, FacilityRepository::class);

        $this->app->singleton(FooterRepositoryInterface::class, FooterRepository::class);
        $this->app->singleton(HistoryRepositoryInterface::class, HistoryRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
