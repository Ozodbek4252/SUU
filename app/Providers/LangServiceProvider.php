<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LangServiceProvider extends ServiceProvider
{
    /* Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /* Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view)
        {
            if (\Request::segment(1) == '') {
                session()->put('locale', 'ru');
                app()->setLocale('ru');
            } else {
                app()->setLocale(\Request::segment(1));
                session()->put('locale', \Request::segment(1));
            }
            $lan = session()->get('locale');

            $view->with(['lan'=>$lan]);
        });
    }
}
