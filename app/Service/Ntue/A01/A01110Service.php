<?php

namespace App\Service\Ntue\A01;

use App\Service\Base\A01\A01110Service AS BaseA01110Service;

class A01110Service extends BaseA01110Service
{
	public $request;

	public function __construct() {

	}

	public function index() 
	{
		dd($this->request);

		return view('Ntue.A01.A01110.index');
	}

	public function getRequest(){
		return $this->request = request();
	}


}

 ?>