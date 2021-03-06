<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Contact;
use App\Models\Menu;
use App\Models\SiteSettings;
use Illuminate\Support\ServiceProvider;

class ViewShareProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->runningInConsole()) {
            view()->share('site_settings', SiteSettings::where('id', 1)->first());
            view()->share('contacts', Contact::where('id', 1)->first());
            view()->share('menus', Menu::where('subcategory', 0)->get());
            view()->share('submenus', Menu::where('subcategory', '!=', 0)->get());
            view()->share('brands', Brand::all());
        }
    }
}
