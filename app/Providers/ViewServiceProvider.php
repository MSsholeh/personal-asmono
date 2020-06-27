<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\GeneralSetting;
use App\CompanyProfile;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Using Closure based composers...
        View::composer('webuilder.layouts.app', function ($view) {
            $view->with([
                'generalSetting' => GeneralSetting::first(),
                'companyProfile' => CompanyProfile::first()
            ]);
        });

         View::composer('admin.default', function ($view) {
            $view->with('generalSetting', GeneralSetting::first());
        });
    }
}
