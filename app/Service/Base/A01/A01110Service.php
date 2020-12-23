<?php

namespace App\Service\Base\A01;

use App\Contracts\Service\FormServiceInterFace;
use App\Http\Requests\A01110FormRequest;
use Illuminate\Http\Request;

class A01110Service implements FormServiceInterFace
{
	protected $FormRequest;

	public function __construct() {
//		$this->registerFormRequest();
//		dd($this->FormRequest->rules());
	}

	public function registerFormRequest()
	{
//		return $this->FormRequest = app()->make(A01110FormRequest::class);
	}

	public function index()
	{
		return view('Base.A01.A01110.index');
	}

	public function create()
	{
		return view('Base.A01.A01110.create');
	}

	public function store(Request $request)
	{
//	    dd([['name' => $request->name, 'email' => $request->email]]);
//	    if($this->FormRequest->validate(['name' => $request->name, 'email' => $request->email])) {
//	        dd(123);
//        } else {
//	        dd(456);
//        }
	}

	public function show($id)
	{

	}

	public function edit($id)
	{

	}

	public function update(Request $request, $id)
	{

	}

	public function destroy($id)
	{

	}

}

 ?>
