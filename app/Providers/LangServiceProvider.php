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
            if (session()->get('locale') == '') {
                session()->put('locale', 'ru');
                app()->setLocale('ru');
            } else {
                app()->setLocale(session()->get('locale'));
            }
            $lan = session()->get('locale');

            $view->with(['lan'=>$lan]);
        });
    }
}