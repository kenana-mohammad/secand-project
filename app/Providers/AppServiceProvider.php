<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;
class AppServiceProvider extends ServiceProvider
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
        Schema::defaultStringLength(191);
        if(!app()->runningInConsole()){
            $setting = Setting::firstOr(function () {
                return Setting::create([
                     'title' => 'site_name',
                     'decsrption' => 'Laravel',
                 ]);
              });
    
      
              view()->share('setting', $setting);
            }
        }}
    

