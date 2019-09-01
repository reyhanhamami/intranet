<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;

class ForHover extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $halaman = "";
        if (Request::segment(1) == 'home') {
            $halaman = 'home';
        }
        if (Request::segment(1) == 'artikel') {
            $halaman = 'artikel';
        }
        if (Request::segment(1) == 'education') {
            $halaman = 'education';
        }
        if (Request::segment(1) == 'events') {
            $halaman = 'events';
        }
        if (Request::segment(1) == 'forumdiskusi') {
            $halaman = 'forumdiskusi';
        }
        if (Request::segment(1) == 'jobrequest') {
            $halaman = 'jobrequest';
        }
        if (Request::segment(1) == 'listemployee') {
            $halaman = 'listemployee';
        }
        if (Request::segment(1) == 'polling') {
            $halaman = 'polling';
        }
        if (Request::segment(1) == 'projects') {
            $halaman = 'projects';
        }
        if (Request::segment(1) == 'tasks') {
            $halaman = 'tasks';
        }
        if (Request::segment(1) == 'wiki') {
            $halaman = 'wiki';
        }
        view()->share('halaman', $halaman); 
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
