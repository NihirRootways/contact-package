<?php

namespace Nihir\Contact;
use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/view','contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(
            __DIR__.'/config/contact.php','contact'
        );
        /* $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
            __DIR__.'/view/contact.blade.php',
            __DIR__.'/view/contact/email.blade.php',
        ]); */
        $this->publishableGroups([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
            __DIR__.'/view/contact.blade.php',
            __DIR__.'/view/contact/email.blade.php',
        ]);
    }

    public function register()
    {

    }
}
