<?php

namespace App\Providers;

use App\Models\Reply;
use App\Models\Topic;
use App\Models\User;
use App\Observers\ReplyObserver;
use App\Observers\TopicObserver;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        \Carbon\Carbon::setLocale('zh');
        User::observe(UserObserver::class);
        //Reply::observe(ReplyObserver::class);
        Topic::observe(TopicObserver::class);
        Reply::observe(ReplyObserver::class)
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
