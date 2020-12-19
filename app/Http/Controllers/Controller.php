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

            $ServiceName = explode('Controller', str_replace('App\Http\Controllers\\' . $school_no . '\\', 'App\Service\\' . $school_no . '\\' , $action['controller']))[0] . 'Service';
// dd($ServiceName);
            if(class_exists($ServiceName)) {
                $this->service = app()->make($ServiceName);
                // dd($this->service );
                return $this->service;
            }
        }
    }
}
