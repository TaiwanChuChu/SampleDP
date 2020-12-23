<?php

namespace App\Providers;

use App\Contracts\Service\FormServiceInterFace;
use App\Service\Base\A01\A01110Service;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\ServiceProvider;

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
        $this->app->bind(FormServiceInterFace::class, function($app){
            $school_no = config('app.school_no') == '' ? 'Base' : config('app.school_no');

            $action = request()->route()->getAction();

            $namespace = $action['namespace'] . '\\';

            $controller = explode('\\', $action['controller']);
            $ServiceName = explode('Controller', 'App\Service\\' . $school_no . '\\' . $controller[4] . '\\' . $controller[5])[0] . 'Service';
            if(class_exists($ServiceName)) {
                return $app->make($ServiceName);
            }
        });

        $this->app->bind(FormRequest::class, function($app){
            $school_no = config('app.school_no') == '' ? 'Base' : config('app.school_no');

            $action = request()->route()->getAction();

            $namespace = $action['namespace'] . '\\';

            $controller = explode('\\', $action['controller']);

            $ServiceName = explode('Controller', 'App\Http\Requests\\' . $controller[5])[0] . 'FormRequest';
            if(class_exists($ServiceName)) {
                return $app->make($ServiceName);
            }
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
