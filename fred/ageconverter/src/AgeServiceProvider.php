<?php

    namespace Rwihimba\Ageconverter;
    use Illuminate\Support\ServiceProvider;

    class AgeServiceProvider extends ServiceProvider {

        public function boot()
        {
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            $this->loadViewsFrom(__DIR__.'/resources/views', 'index');
        }

        public function register()
        {

        }
    }
    ?>