<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $service;

    public function __construct()
    {
        if(request()->route()) {
            $school_no = config('app.school_no') == '' ? 'Base' : config('app.school_no');

            $action = request()->route()->getAction();

            $namespace = $action['namespace'] . '\\';

            $controller = explode('\\', $action['controller']);

            $ServiceName = explode('Controller', 'App\Service\\' . $school_no . '\\' . $controller[4] . '\\' . $controller[5])[0] . 'Service';

            if(class_exists($ServiceName)) {
                $this->service = app()->make($ServiceName);
                return $this->service;
            }
        }
    }
}
